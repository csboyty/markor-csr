var speechCOU=(function(config,functions){
    return{
        submitForm:function(form){
            var me=this;
            functions.showLoading();
            $(form).ajaxSubmit({
                dataType:"json",
                /*data:{
                    content:tinyMCE.editors[0].getContent()
                },*/
                success:function(response){
                    if(response.success){
                        $().toastmessage("showSuccessToast",config.messages.optSuccess);
                        setTimeout(function(){
                            switch(category_id){
                                case 8:
                                    window.location.href="speech/teacher-train";
                                    break;
                                case 12:
                                    window.location.href="speech/volunteer";
                                    break;
                                case 21:
                                    window.location.href="speech/trainee";
                                    break;
                            }

                        },3000);
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
    functions.createQiNiuUploader({
        maxSize:config.uploader.sizes.img,
        filter:config.uploader.filters.img,
        uploadBtn:"uploadBtn",
        multiSelection:false,
        multipartParams:null,
        uploadContainer:"uploadContainer",
        fileAddCb:null,
        progressCb:null,
        uploadedCb:function(info,file,up){
            if(info.w==500&&info.h==500){
                $("#imageUrl").val(info.url);

                $("#image").attr("src",info.url);

                $(".error[for='imageUrl']").remove();
            }else{
                $().toastmessage("showErrorToast",config.messages.imageSizeError);
            }
        }
    });
    $("#myForm").validate({
        ignore:[],
        rules:{
            thumb:{
                required:true
            },
            excerpt:{
                required:true
            },
            memo:{
                required:true,
                maxlength:32
            },
            author:{
                required:true,
                maxlength:32
            }
        },
        messages:{
            thumb:{
                required:config.validErrors.required
            },
            excerpt:{
                required:config.validErrors.required
            },
            memo:{
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",32)
            },
            author:{
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",32)
            }
        },
        submitHandler:function(form) {
            speechCOU.submitForm(form);
        }
    });
});
