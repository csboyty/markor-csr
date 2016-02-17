<?php

namespace common\models;

use Yii;

use yii\web\IdentityInterface;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use app\models\Enterprise;

/**
 * This is the model class for table "user".
 *
 * @property integer $user_id
 * @property integer $enterprise_id
 * @property string $name
 * @property string $password
 * @property string $role
 * @property string $wechat_open_id
 * @property string $auth_key
 */
class User extends ActiveRecord implements \yii\web\IdentityInterface
{

    const ROLE_USER = "USER";
    const ROLE_ADMIN = "ADMIN";
    const ROLE_SUPER_ADMIN="SUPER_ADMIN";

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['email', 'password'], 'string', 'max' => 255],
            [['role'], 'string', 'max' => 12],
            [['auth_key'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '用户ID',
            'email' => '邮箱',
            'password' => '密码',
            'role' => '角色',
            'auth_key' => 'Auth Key',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getAttribute('id');
    }

    /**
     * auth_key is use to cookie login
     * @nheritdoc
     */
    public function getAuthKey()
    {
        return $this->getAttribute('auth_key');
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAttribute('auth_key') == $authKey;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        //这个主要用于restFull api
        //return static::findOne(['access_token' => $token]);
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }


    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     *验证密码
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     *生成随机密码
     * @param $length
     */
    public function generatePassword($length){
        $sets = [
            'abcdefghjkmnpqrstuvwxyz',
            'ABCDEFGHJKMNPQRSTUVWXYZ',
            '23456789',
        ];
        $all = '';
        $password = '';
        foreach ($sets as $set) {
            $password .= $set[array_rand(str_split($set))];
            $all .= $set;
        }

        $all = str_split($all);
        for ($i = 0; $i < $length - count($sets); $i++) {
            $password .= $all[array_rand($all)];
        }

        $password = str_shuffle($password);

        $this->password=$password;
    }

}
