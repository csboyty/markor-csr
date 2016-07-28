$(document).ready(function(){
    $(".moreEllipsis").each(function(index,el){
        var row=$(this).data("row");
        $(this).ellipsis({
            row:row
        })
    });
    $("#menuIcon").click(function(){
        $("#menuM").toggle();
    });
    $("#menuM").on("click",".subMenuIcon",function(){
        $("#menuM .subMenu").hide();
        $("#menuM .active").removeClass("active");
        if($(this).hasClass("plus")){
            $("#menuM .subtract").removeClass("subtract").addClass("plus");
            $(this).parent().addClass("active").find(".subMenu").show();
            $(this).removeClass("plus").addClass("subtract");
        }else{
            $(this).removeClass("subtract").addClass("plus");
        }

    });

    $(".item").hover(function(){
        if($(this).find(".subMenu").length!=0||$(this).parent(".subMenu").length!=0){
            $("#subMenuBg").animate({
                height:"40px"
            },300);
        }else{
            $("#subMenuBg").height("0px");
        }
    },function(event){
        if($(this).parent(".subMenu").length==0){
            $("#subMenuBg").height("0px");
        }

    });

    $(".search").keydown(function(e){
        if(e.keyCode==13){
            window.location.href=document.getElementsByTagName("base")[0].getAttribute("href")+"search/"+$(this).val();
        }
    });

    //IE9
    if(navigator.userAgent.indexOf("MSIE 9.0")){

    }
});