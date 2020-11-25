const { includes } = require("lodash");

require('./vue');
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

(($) => {
    /* */

     $(document).foundation();
     console.log($(document));

    $('.slide-window').each((id, el)=>{
 
        let sliderWindow = $(el),
        sliderWindowWidth = $(sliderWindow).width(), // needs to update on window resize
        slideTrack = $(sliderWindow).find('.slide-track'),
        slides = $(slideTrack).find('.slide'),
        slideCount = slides.length - 1,
        prevBtns = $(slideTrack).find('.prev-btn'),
        nextBtns = $(slideTrack).find('.next-btn'),
        currentSlide = 0,

        sliderNav = $(el).siblings('.slider-nav'),
        slideBtns = $(sliderNav).find('.slide-btn');

        $(slideBtns).each((i, slideBtn)=> {
            let btnTarget = $(slideBtn).data('target-id');

            $(slideBtn).on('click', function(e){
                e.preventDefault();
                currentSlide = btnTarget,
                $(slideTrack).css('left', `-${sliderWindowWidth  * currentSlide}px`);
            });
        });

        //init settings
        $(slideTrack).width(sliderWindowWidth * slides.length); // needs to update on window resize
        $(slideTrack).css('left', '0px');

        $(slides).each((i, slide)=>{// needs to update on window resize
            $(slide).width(sliderWindowWidth);
        });

        $(nextBtns).each((i, nextBtn)=>{
            $(nextBtn).on('click', function(){
                if(currentSlide < slideCount){
                    currentSlide++;
                    $(slideTrack).css('left', `-${sliderWindowWidth  * currentSlide}px`)
                }
            });
        });

        $(prevBtns).each((i, prevBtn)=>{
            $(prevBtn).on('click', function(){
                if(currentSlide > 0){
                    currentSlide--;
                    $(slideTrack).css('left', `-${sliderWindowWidth  * currentSlide}px`)
                }
            });
        });
    });

 })(jQuery);


 