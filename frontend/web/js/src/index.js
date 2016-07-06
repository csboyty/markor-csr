$(document).ready(function(){

    /*$('#slider').flexslider({
        animation: "fade", //fade and slide
        controlNav: true,
        animationLoop: false,
        slideshow: false
    });*/
    var mySwiper = new Swiper ('.swiper-container', {
    
    direction: 'horizontal',
    loop: true,
    autoplay:3000,
    pagination: '.swiper-pagination',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev'
  })        

});
