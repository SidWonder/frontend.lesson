$(document).ready(function () {
  $('.promo-slider').slick({
    arrows: true,
    dots: true,
    //infinite: true,
    speed: 1200,
    fade: true,
    cssEase: 'ease-out',
    dotsClass: "my-dots",
    prevArrow: '<button type="button" class="review-slider-prev"></button>',
    nextArrow: '<button type="button" class="review-slider-next"></button>',
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          arrows: false,
        },
      },
      {
        breakpoint: 400,
        settings: {
          dots: false,
        },
      }


    ]
  });

  
});