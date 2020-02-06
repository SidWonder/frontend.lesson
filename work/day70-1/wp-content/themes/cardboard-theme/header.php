<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Добрый картон</title>

    <!--Fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&display=swap&subset=cyrillic"
      rel="stylesheet"
    />

    <?php
      wp_head();
    ?>
  </head>
  <body>
    <header class="header">
      <!-- Menu -->
      <div class="header-wrapper hidden-mobile">
        <div class="container">
          <nav class="header-nav">
            <ul>
              <li><a href="#map">О компании</a></li>
              <li><a href="#box">преимущества</a></li>
              <li><a href="#manufacturing">производство</a></li>
              <li><a href="#promo">склад</a></li>
              <li><a href="#production">Продукция</a></li>
              <li><a href="#client">наши клиенты</a></li>
              <li><a href="#feedback">Сертификаты</a></li>
              <li><a href="#feedback">Отзывы</a></li>
              <li><a href="#map">контакты</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <!-- Gamburger Menu -->
      <a href="#menu" class="menu-link hidden-lg">
        <span class="menu-link__line"></span>
      </a>

      <div class="menu hidden-lg">
        <ul>
          <li><a href="#map">О компании</a></li>
          <li><a href="#box">преимущества</a></li>
          <li><a href="#manufacturing">производство</a></li>
          <li><a href="#promo">склад</a></li>
          <li><a href="#production">Продукция</a></li>
          <li><a href="#client">наши клиенты</a></li>
          <li><a href="#feedback">Сертификаты</a></li>
          <li><a href="#feedback">Отзывы</a></li>
          <li><a href="#map">контакты</a></li>
        </ul>
      </div>



      <div class="container header-line">
        <div class="row align-items-center">
          <div class="col-3 col-md-4">
            <div class="header-logo"></div>
          </div>
          <div class="col-9 col-md-8">
            <div class="header-contacts">
              <div class="header-contacts__phones">
                <div class="header-contacts__phone">8 (347) 271-54-28</div>
                <div class="header-contacts__phone">8 (937) 363-30-00</div>
              </div>
              <button onclick="ym(57373428, 'reachGoal', 'topBtn'); return true;" class="header-contacts__button btn">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/call.png" alt="Телефон" />
                <span class="hidden-mobile">Заказать звонок</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </header>