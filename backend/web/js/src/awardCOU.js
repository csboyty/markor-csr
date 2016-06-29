var awardCOU=(function(config,functions){
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
                            window.location.href="award/index";
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
            if(info.w/info.h==4/3&&info.w>=400&&info.w<=600){
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
            title:{
                required:true,
                maxlength:32
            },
            excerpt:{
                required:true,
                maxlength:512
            },
            thumb:{
                required:true
            }
        },
        messages:{
            title:{
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",32)
            },
            excerpt:{
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",512)
            },
            thumb:{
                required:config.validErrors.required
            }
        },
        submitHandler:function(form) {
            awardCOU.submitForm(form);
        }
    });
});
