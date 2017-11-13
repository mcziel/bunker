;
(function($) {
    $(document).on('ready', function() {
        var _class = 'active',
            elemSlider = $('.main-slider .sliders > ul');


            
              new WOW().init();
              


        if($('.main-slider').hasClass('second')){
             elemSlider = $('.main-slider.second .sliders-bg > ul');
        }        

        elemSlider.find('> li').each(function(e) {
           
            $('.main-slider .bullets').append('<a href="#" class="trans-3"></a>');
        });


        $('.main-slider .bullets a:first-child').addClass(_class);

        var sliderBulletsA = $('.main-slider .bullets a'), 
            sliderControlsA = $('.main-slider .controls a');

        elemSlider.lightSlider({
            adaptiveHeight: true,
            item: 1,
            auto: true,
            pause: 7000,
            slideMargin: 0,
            loop: true,
            pager: false,
            pauseOnHover: true,
            
        onSliderLoad: function() {
            elemSlider.removeClass('cS-hidden');
        } ,
            onBeforeSlide: function(el, e, a) {
                var $slider = $(el.context),
                    current = (el.getCurrentSlideCount() + $slider.find('.clone').length / 2) - 1,
                    currentEl = sliderBulletsA.eq(current - 1);
                sliderBulletsA.removeClass(_class);
                currentEl.addClass(_class);

            }
        });

        sliderBulletsA.on('click', function(e) {

            if ($(this).hasClass(_class)) return false;

            sliderBulletsA.removeClass(_class);
            $(this).addClass(_class);

            elemSlider.goToSlide($(this).index() + 1);
            return false;
        });

        sliderControlsA.on('click', function(e) {
            if($(this).hasClass('prev')){
                  elemSlider.goToPrevSlide();
                return false;    
            }
              elemSlider.goToNextSlide();
               return false;     
        });

        /** Menu Responsive **/

        $('#header .menu-toggle').on('click', function() {

            $('.menu-float').addClass(_class);
        });
        $('.menu-float').on('click', function(e) {
            if ($(e.target).hasClass('menu-float')) {
                $('.menu-float').removeClass(_class);
            }

        });
        $(document).keyup(function(e) {
            if (e.keyCode == 27) {
                $('.menu-float').removeClass(_class);
            }
        });

        $('.menu-float .search-container .return-back').on('click', function() {

            $('.menu-float').removeClass(_class);
            return false;
        });

    });
})(jQuery);