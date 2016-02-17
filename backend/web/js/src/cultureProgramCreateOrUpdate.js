var cultureProgramCreateOrUpdate=(function(config,functions){
    return{
        submitForm:function(form){
            var me=this;
            functions.showLoading();
            $(form).ajaxSubmit({
                dataType:"json",
                data:{
                    content:tinyMCE.editors[0].getContent()
                },
                success:function(response){
                    if(response.success){
                        $().toastmessage("showSuccessToast",config.messages.optSuccess);
                        setTimeout(function(){
                            window.location.href="culture-program/index";
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
    tinymce.init({
        selector: "#content",
        height:300,
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        //image_advtab: true,
        plugins : 'link image preview fullscreen table textcolor colorpicker code'

    });
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
            var path=info.url;
            $.get(path+"?imageInfo",function(data){
                //console.log(data);
                if(data.width==500&&data.height==500){
                    $("#imageUrl").val(path);

                    $("#image").attr("src",path);

                    $(".error[for='imageUrl']").remove();
                }else{
                    $().toastmessage("showErrorToast",config.messages.imageSizeError);
                }
            });
        }
    });
    functions.createQiNiuUploader({
        maxSize:config.uploader.sizes.img,
        filter:config.uploader.filters.img,
        uploadBtn:"uploadBgBtn",
        multiSelection:false,
        multipartParams:null,
        uploadContainer:"uploadBgContainer",
        fileAddCb:null,
        progressCb:null,
        uploadedCb:function(info,file,up){
            var path=info.url;
            $.get(path+"?imageInfo",function(data){
                //console.log(data);
                if(data.width==1920&&data.height==600){
                    $("#bgImageUrl").val(path);

                    $("#bgImage").attr("src",path);

                    $(".error[for='bgImageUrl']").remove();
                }else{
                    $().toastmessage("showErrorToast",config.messages.imageSizeError);
                }
            });
        }
    });
    $("#myForm").validate({
        ignore:[],
        rules:{
            image:{
                required:true
            },
            bg_image:{
                required:true
            },
            create_at:{
                required:true
            },
            content:{
                required:true
            },
            excerpt:{
                required:true,
                maxlength:32
            }
        },
        messages:{
            image:{
                required:config.validErrors.required
            },
            bg_image:{
                required:config.validErrors.required
            },
            create_at:{
                required:config.validErrors.required
            },
            content:{
                required:config.validErrors.required
            },
            excerpt:{
                required:config.validErrors.required
            }
        },
        submitHandler:function(form) {
            cultureProgramCreateOrUpdate.submitForm(form);
        }
    });
});
