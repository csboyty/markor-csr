var login=(function(config,functions){
    return {
        initMe:function(params){
            var i= 0,length=params.length,value;
            for(;i<length;i++){
                if(value=functions.getCookie(params[i]["name"])){
                    params[i]["el"].val(value);
                }
            }
        },
        rememberMe:function(params){
            var i= 0,length=params.length;
            for(;i<length;i++){
                functions.setCookie(params[i]["name"],params[i]["value"],7);
            }
        }
    }
})(config,functions);
$(document).ready(function(){
    /*$("#captchaRefresh").click(function(){
        $(this).find("img").attr("src","s/captcha.jpg?"+Math.random());
        return false;
    });

    login.initMe([{
        name:"email",
        el:$("#email")
    },{
        name:"password",
        el:$("#password")
    }]);*/

    $("#myForm").validate({
        rules: {
            email: {
                required:true,
                email:true,
                maxlength:30
            },
            password:{
                required:true,
                rangelength:[6, 120]
            }
        },
        messages: {
            email: {
                required:config.validErrors.required,
                email:config.validErrors.email,
                maxlength:config.validErrors.maxLength.replace("${max}",30)
            },
            password:{
                required:config.validErrors.required,
                rangelength:config.validErrors.rangLength.replace("${min}",6).replace("${max}",20)
            }
        },
        submitHandler:function(form){
            form.submit();
        }
    });
});
