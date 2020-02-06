//Вставка элемента контакты
$(document).ready(function() {
  //Получаем ширину экрана
  let userWidth = document.body.clientWidth;
  //Находим нужный элемент
  let parentElement = document.querySelector(".map-block");
  //Создаем элемент для вставки с нужными параметрами
  let div = document.createElement("div");
  div.className = "map__title";
  div.innerHTML = "контакты";

  if (userWidth < 576) {
    parentElement.insertBefore(div, parentElement.firstChild);
  }

  if (userWidth > 576) {
    parentElement.removeChild(div);
  }
});

//Overlay
$(document).ready(function() {
  $(".header-contacts__button").on("click", function() {
    $(".overlay").show();
  });
  $(".popup-close").on("click", function() {
    $(".overlay").hide();
  });
});

$(document).ready(function() {
  //Slick
  $(".manufacturing-slider_top").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: ".manufacturing-slider_bottom"
  });

  $(".manufacturing-slider_bottom").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: ".manufacturing-slider_top",
    dots: true,

    arrows: true,
    prevArrow:
      '<div class="slider-arrow slider-arrow_prod slider-arrow_prod_right"><div>',
    nextArrow:
      '<div class="slider-arrow slider-arrow_prod slider-arrow_prod_left"><div>',

    //centerMode: true,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false
        }
      }
    ]
  });

  //Slick 2
  $(".feedback-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,

    responsive: [
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ],

    prevArrow:
      '<div class="slider-arrow slider-arrow_feedback slider-arrow_right"><div>',
    nextArrow:
      '<div class="slider-arrow slider-arrow_feedback slider-arrow_left"><div>'
  });

  //Slick 3
  $(".main-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 4000
  });

  //Gamburger Menu
  let link = $(".menu-link");
  let link_active = $(".menu-link_active");
  let menu = $(".menu");
  let nav_link = $(".menu a");

  link.click(function() {
    link.toggleClass("menu-link_active");
    menu.toggleClass("menu_active");
  });

  nav_link.click(function() {
    link.toggleClass("menu-link_active");
    menu.toggleClass("menu_active");
  });

  new WOW().init();
});
