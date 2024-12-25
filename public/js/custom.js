
  $(function () {

    // MENU
    $('.navbar-collapse a').on('click',function(){
      $(".navbar-collapse").collapse('hide');
    });

    // AOS ANIMATION
    AOS.init({
      disable: 'mobile',
      duration: 800,
      anchorPlacement: 'center-bottom'
    });


    // SMOOTHSCROLL NAVBAR
    $(function() {
      $('.navbar a, .hero-text a').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 49
        }, 1000);
        event.preventDefault();
      });
    });    
  });

function handleHighlightChange(className, indx) {
  jQuery('.' + className + ' .HighlightsWithPhotoBackground_photo__KRDev').css('opacity', '0');
  jQuery('.' + className + ' .HighlightsWithPhotoBackground_photo__KRDev_' + indx).css('opacity', '1');
}
    

