(function($){
    $('.slider-active').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,   
        prevArrow: '<i class="red-color slick-pre-button fa-solid fa-angle-left"></i>',
        nextArrow: '<i class="red-color slick-next-button fa-solid fa-angle-right"></i>',
        autoplay: true,
        autoplaySpeed: 4000,

      });
      if (window.innerWidth > 768) {
        $('.combo-sell-active').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            centerMode: true,               
            dots: true,   
            prevArrow: false,
            nextArrow: false,
          });
       }
       else if(window.innerWidth > 480){
        $('.combo-sell-active').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            centerMode: true,               
            dots: true,   
            prevArrow: false,
            nextArrow: false,
          });
       }
       else{
        $('.combo-sell-active').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,               
            dots: true,   
            prevArrow: false,
            nextArrow: false,
          });
       }

       $(document).ready(function() {
        $(".toggleButton").click(function() {
            $(".main-menu-area").toggleClass("togglemenu");
            $(".menu-button").toggleClass("button-hidden");
        });
        $(".searchengin-icon").click(function() {
            $(".search-bar-area").toggleClass("searching-option");
            $(".searchengin-icon").toggleClass("searching-option-close");
        });

        $(window).scroll(function() {
          if ($(this).scrollTop() >= 1000) {
              $('#topButton').fadeIn();
          } else {
              $('#topButton').fadeOut();
          }
      });
  
      // Scroll to the top when the button is clicked
      $('#topButton').click(function() {
          $('html, body').animate({scrollTop: 0}, 500); // 500 milliseconds for the animation
      });

    });

   
      
       
    
    
})(jQuery);