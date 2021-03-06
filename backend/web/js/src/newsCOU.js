var artNewsCOU=(function(config,functions){
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
                            window.location.href="news/index";
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
    $("#date").date_input();

    tinymce.init({
        selector: "#content",
        height:300,
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        //image_advtab: true,
        plugins : 'link image preview fullscreen table textcolor colorpicker code',
        setup: function (ed) {
            ed.on('blur', function (e) {
                $("#content").val(ed.getContent());
                if(ed.getContent()){
                    $(".error[for='content']").remove();
                }
            });
        }

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
            if(info.w/info.h==4/3&&info.w>=400&&info.w<=800){
                $("#imageUrl").val(info.url);

                $("#image").attr("src",info.url);

                $(".error[for='imageUrl']").remove();
            }else{
                $().toastmessage("showErrorToast",config.messages.imageSizeError);
            }
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
            if(info.w==1920&&info.h==830){
                $("#bgImageUrl").val(info.url);

                $("#bgImage").attr("src",info.url);

                $(".error[for='bgImageUrl']").remove();
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
            bg_image:{
                required:true
            },
            title:{
                required:true,
                maxlength:32
            },
            date:{
                required:true
            },
            content:{
                required:true
            },
            excerpt:{
                required:true,
                maxlength:255
            }
        },
        messages:{
            thumb:{
                required:config.validErrors.required
            },
            bg_image:{
                required:config.validErrors.required
            },
            date:{
                required:config.validErrors.required
            },
            content:{
                required:config.validErrors.required
            },
            title:{
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",32)
            },
            excerpt:{
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",255)
            }
        },
        submitHandler:function(form) {
            artNewsCOU.submitForm(form);
        }
    });
});
