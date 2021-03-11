(function ($, root, undefined) {

	$(function () {

        $(window).scroll(function (event) {
            var st = $(this).scrollTop();
            if (st < 1) {
                $('.header').removeClass('slide-up');
                $('.mobile-header.fixed').removeClass('slide-up');
            }else {
                $('.header').addClass('slide-up');
                $('.mobile-header.fixed').addClass('slide-up');
            }
            var mq = window.matchMedia("(min-width: 1200px)");
            if (mq.matches) {
              if (st < 500){
                  $('.tab-section-reference').removeClass('slide-up');
              }else{
                  $('.tab-section-reference').addClass('slide-up');
              }
            }
          });
    });
})(jQuery, this);



