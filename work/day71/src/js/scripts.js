$(document).ready(function() {
  //Slick
  $(".carousel__inner").slick({
    dots: false,
    speed: 1200,
    prevArrow:
      '<button type="button" class="slick-prev"><img src="img/icons/slider-left.png"></button>',
    nextArrow:
      '<button type="button" class="slick-next"><img src="img/icons/slider-right.png"></button>'
  });

  //Section 'catalog'
  $("ul.catalog__tabs").on("click", "li:not(.catalog__tab_active)", function() {
    $(this)
      .addClass("catalog__tab_active")
      .siblings()
      .removeClass("catalog__tab_active")
      .closest("div.container")
      .find("div.catalog__content")
      .removeClass("catalog__content_active")
      .eq($(this).index())
      .addClass("catalog__content_active");
  });


  //Переключение карточек
  function toggleSlide(item) {
    $(item).each(function(i) {
      $(this).on("click", function(e) {
        e.preventDefault();
        $(".catalog-item__content").eq(i).toggleClass("catalog-item__content_active");
        $(".catalog-item__list").eq(i).toggleClass("catalog-item__list_active");
      })
    });
  };

  toggleSlide(".catalog-item__link");
  toggleSlide(".catalog-item__back");

  //Модальные окна
  $('[data-modal=consultation]').on('click', function(){
    $('.overlay, #consultation').fadeIn('slow');
  });
  $('.modal__close').on('click', function () {
    $('.overlay, #consultation, #thanks, #order').fadeOut('slow');
  });

  // $('.button_mini').on('click', function () {
  //   $('.overlay, #order').fadeIn('slow');
  // });

  //Мод.окна Перебирает значения заголовков и подставляет то значение в модадьное окно на чей блок мы нажали 
  $('.button_mini').each(function(i){
    $(this).on('click', function(){
      $('#order .modal__descr').text($('.catalog-item__subtitle').eq(i).text());
      $('.overlay, #order').fadeIn('slow');
    });
  });

  //Отправка писем AJAX
  $('form').submit(function (e) {
    e.preventDefault(); //Отключаем стандартное поведение браузера. Т.е. при нажатии отправки страница перезагружаться не будет
    $.ajax({
      type: "POST",
      url: "libs/send.php",
      data: $(this).serialize()
    }).done(function(){ //Действия после отправки формы
      $(this).find('input').val("");
      $('#consultation, #order').fadeOut(); //Закрываем окна формы
      $('.overlay, #thanks').fadeIn('slow'); //Показываем окно благодарности

      $('form').trigger('reset');
    });
    return false;
  });

  //Кнопка вверх и скролл
  $(window).scroll(function(){
    if($(this).scrollTop() > 1600) {
      $('.pageup').fadeIn();
    }
    else {
      $(".pageup").fadeOut();
    }
  });
      //Плавный скролл вверх
  $("a[href='#up']").click(function() {
    const _href = $(this).attr("href");
    $("html, body").animate({ scrollTop: $(_href).offset().top + "px" });
    return false;
  });  
});
