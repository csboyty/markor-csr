var setting=(function(config,functions){
    return{
        submitForm:function(form){
            var me=this;
            functions.showLoading();
            $(form).ajaxSubmit({
                dataType:"json",
                success:function(response){
                    if(response.success){
                        $().toastmessage("showSuccessToast",config.messages.optSuccess);
                        functions.hideLoading();
                    }else{
                        functions.ajaxReturnErrorHandler(response.error_code);
                    }
                },
                error:function(){
                    functions.ajaxErrorHandler();
                }
            });
        }
    }
})(config,functions);

$(document).ready(function(){
    $("#myForm").validate({
        ignore:[],
        rules:{
            resource_prefix_type:{
                required:true
            }
        },
        messages:{
            resource_prefix_type:{
                required:config.validErrors.required
            }
        },
        submitHandler:function(form) {
            setting.submitForm(form);
        }
    });
});

