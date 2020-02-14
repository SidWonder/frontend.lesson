//Slick
$(document).ready(function() {
  $(".carousel__inner").slick({
    dots: false,
    speed: 1200,
    prevArrow:
      '<button type="button" class="slick-prev"><img src="img/icons/slider-left.png"></button>',
    nextArrow:
      '<button type="button" class="slick-next"><img src="img/icons/slider-right.png"></button>'
  });
});
