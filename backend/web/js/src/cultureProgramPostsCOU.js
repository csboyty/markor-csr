var cultureProgramPostsCOU=(function(config,functions){
    return{
        submitForm:function(form){
            var me=this,content=[];
            functions.showLoading();
            $(form).ajaxSubmit({
                dataType:"json",
                success:function(response){
                    if(response.success){
                        $().toastmessage("showSuccessToast",config.messages.optSuccess);
                        setTimeout(function(){
                            window.location.href="culture-program/posts";
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

    $("#loading .text").text("上传中...");
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
        maxSize:config.uploader.sizes.all,
        filter:config.uploader.filters.pdf,
        uploadBtn:"uploadFileBtn",
        multiSelection:false,
        multipartParams:null,
        uploadContainer:"uploadFileContainer",
        fileAddCb:null,
        progressCb:function(file){
            functions.showLoading();
        },
        uploadedCb:function(info,file,up){
            functions.hideLoading();
            $("#fileUrl").val(info.url);

            $("#filename").text(file.name);
        }
    });
    $("#myForm").validate({
        ignore:[],
        rules:{
            thumb:{
                required:true
            },
            title:{
                required:true,
                maxlength:32
            },
            date:{
                required:true
            },
            excerpt:{
                required:true,
                maxlength:512
            },
            content:{
                required:true
            }
        },
        messages:{
            thumb:{
                required:config.validErrors.required
            },
            title:{
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",32)
            },
            date:{
                required:config.validErrors.required
            },
            excerpt:{
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",512)
            },
            content:{
                required:config.validErrors.required
            }
        },
        submitHandler:function(form) {
            cultureProgramPostsCOU.submitForm(form);
        }
    });
});
