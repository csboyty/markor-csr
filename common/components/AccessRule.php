<?php
/**
 *权限控制类
 * User: ty
 * Date: 15-12-29
 * Time: 上午10:05
 * To change this template use File | Settings | File Templates.
 */
namespace common\components;

class AccessRule extends \yii\filters\AccessRule{

    /**
     * 覆写方法
     * @param \yii\web\User $user
     * @return bool|void
     */
    protected function matchRole($user){

        //如果没有给点roles,那么是所有的角色都可以用
        if(count($this->roles)===0){
            return true;
        }

        //分析所有配资了得roles,在controller的behaviors里面配置
        foreach($this->roles as $role){

            //？代表游客
            if($role==="?"){
                return true;
            }elseif(!$user->getIsGuest()&&$role===$user->identity->role){

                //判断其他的权限
                return true;
            }


        }

        return false;
    }
}