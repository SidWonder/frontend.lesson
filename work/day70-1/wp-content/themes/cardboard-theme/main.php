
    <section>
      <div class="main-slider">
        <div class="main main-bg1">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12 col-lg-5">
                <div class="main-img hidden-mobile">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/decor/main_box.png" alt="Картон" />
                </div>
              </div>
              <div class="col-12 col-lg-7">
                <div class="main-text">
                  <h1 class="main-text__title">
                    <?php the_field('main-title'); ?>
                  </h1>
                  <!-- /.main-text__tittle -->
                  <div class="main-text__subtitle">
                    с доставкой по всей России
                  </div>
                  <!-- /.main-text__subtittle -->
                  <div class="main-text__form">
                    <div class="form-title">
                      Получите индивидуальное предложение на производство и
                      поставку гофропродукции
                      <span class="form-title_upercase"
                        >Образцы упаковки бесплатно!</span
                      >
                    </div>
                    <form action="<?php echo get_template_directory_uri(); ?>/send.php" class="form" method='POST'>
                      <input
                        class="form__input"
                        type="tel"
                        placeholder="Введите номер телефона"
                        name="user_phone"
                      />
                      <button class="form__button btn" type="submit">
                        Оставить заявку!
                      </button>
                    </form>
                    <small class="form__small">*Минимальный заказ 500шт</small>
                  </div>
                  <!-- /.main-text__form -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--main-bg1-->
        <div class="main main-bg2">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12 col-lg-5">
                <div class="main-img hidden-mobile">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/decor/main_box2.png" alt="Картон" />
                </div>
              </div>
              <div class="col-12 col-lg-7">
                <div class="main-text">
                  <h1 class="main-text__title">
                    <?php the_field('main-title'); ?>
                  </h1>
                  <!-- /.main-text__tittle -->
                  <div class="main-text__subtitle">
                    с доставкой по всей России
                  </div>
                  <!-- /.main-text__subtittle -->
                  <div class="main-text__form">
                    <div class="form-title">
                      Получите индивидуальное предложение на производство и
                      поставку гофропродукции
                      <span class="form-title_upercase"
                        >Образцы упаковки бесплатно!</span
                      >
                    </div>
                    <form action="#" class="form">
                      <input
                        class="form__input"
                        type="tel"
                        placeholder="Введите номер телефона"
                      />
                      <button class="form__button btn" type="submit">
                        Оставить заявку!
                      </button>
                    </form>
                    <small class="form__small">*Минимальный заказ 500шт</small>
                  </div>
                  <!-- /.main-text__form -->
                </div>
              </div>
            </div>
          </div>
          <!--</div>  -->
        </div>
        <!--main-bg2-->
      </div>
      <!--main-slider-->
    </section>

    <section class="promo">
      <div class="container">
        <div class="row" id="promo">
          <div class="col-12 col-md-4 promo-item">
            <div class="promo-item__tittle">5 лет</div>
            <div class="promo-item__desc">На рынке изделий из гофрокартона</div>
          </div>
          <div class="col-12 col-md-4 promo-item">
            <div class="promo-item__tittle">до 5 000 000 м<sup>2</sup></div>
            <div class="promo-item__desc">
              Ежемесячный объем производства гофрокартона
            </div>
          </div>
          <div class="col-12 col-md-4 promo-item">
            <div class="promo-item__tittle">4 000 м<sup>2</sup></div>
            <div class="promo-item__desc">Площадь склада</div>
          </div>
        </div>
        <div class="row box" id="box">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="box-item box-1 wow fadeInUp">
              <!-- <div class="box-item__img">
                <img src="img/icons/promo-11.png" alt="Производство" />
              </div> -->
              <div class="box-item__text">
                <div class="box-item__tittle">Собственное производство</div>
                <div class="box-item__desc">
                  4 технологические линии спо- собны выполнить любой заказ любой
                  сложности
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="box-item box-2 wow fadeInUp">
              <!-- <div class="box-item__img">
                <img src="" alt="" />
              </div> -->
              <div class="box-item__text">
                <div class="box-item__tittle">Бесплатные образцы</div>
                <div class="box-item__desc">
                  Бесплатно делаем образцы гофроупаковки - это помогает заранее
                  увидеть упаковку
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="box-item box-3 wow fadeInUp">
              <!-- <div class="box-item__img">
                <img src="" alt="" />
              </div> -->
              <div class="box-item__text">
                <div class="box-item__tittle">Стабильное качество</div>
                <div class="box-item__desc">
                  Собственная лаборатория кон- тролирует качество на каждом
                  этапе производства
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="box-item box-4 wow fadeInUp">
              <!-- <div class="box-item__img">
                <img src="" alt="" />
              </div> -->
              <div class="box-item__text">
                <div class="box-item__tittle">Страховой запас</div>
                <div class="box-item__desc">
                  Можем хранить запас гофро- продукции на своих складах и
                  поставлять его партиями
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="box-item box-5 wow fadeInUp">
              <!-- <div class="box-item__img">
                <img src="" alt="" />
              </div> -->
              <div class="box-item__text">
                <div class="box-item__tittle">Флексопечать</div>
                <div class="box-item__desc">
                  Возможно нанесение вашего логотипа, текста или мани-
                  пуляционных знаков
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="box-item box-6 wow fadeInUp">
              <!-- <div class="box-item__img">
                <img src="" alt="" />
              </div> -->
              <div class="box-item__text">
                <div class="box-item__tittle">Гидрофобные добавки</div>
                <div class="box-item__desc">
                  На производстве реализована технология, которая позволяет
                  гофрокартону стать прочнее
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- </div>-->
    </section>

    <section class="production" id="production">
      <div class="container">
        <div class="production__tittle">наша Продукция</div>
        <img
          class="production__img hidden-mobile"
          src="<?php echo get_template_directory_uri(); ?>/img/icons/line_title.png"
          alt="линия"
        />
        <div class="row">
          <div class="col-md-6">
            <div class="production-box">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/decor/box-1.jpg"
                alt="Гофрокороб 4-х клапанный"
                class="production-box__img"
              />
              <div class="production-box__title">Гофрокороб 4-х клапанный</div>
              <div class="production-box__button">
                <button class="prod-btn-o btn">Подробнее</button
                ><button class="prod-btn btn">Получить расчет</button>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="production-box">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/decor/box-2.jpg"
                alt="Гофролоток
"
                class="production-box__img"
              />
              <div class="production-box__title">Гофролоток</div>
              <div class="production-box__button">
                <button class="prod-btn-o btn">Подробнее</button
                ><button class="prod-btn btn">Получить расчет</button>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="production-box">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/decor/box-3.jpg"
                alt="Гофрокороб самосборный
"
                class="production-box__img"
              />
              <div class="production-box__title">
                Гофрокороб самосборный
              </div>
              <div class="production-box__button">
                <button class="prod-btn-o btn">Подробнее</button
                ><button class="prod-btn btn">Получить расчет</button>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="production-box">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/decor/box-4.jpg"
                alt="Гофролоток
"
                class="production-box__img"
              />
              <div class="production-box__title">Листовой гофрокартон</div>
              <div class="production-box__button">
                <button class="prod-btn-o btn">Подробнее</button
                ><button class="prod-btn btn">Получить расчет</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="individual">
      <div class="container">
        <div class="individual-title">Получите индивидуальное предложение</div>
        <div class="individual-subtitle">
          на производство и поставку изделий
        </div>

        <div class="ind-form-title">Введите ваш номер телефона:</div>

        <form action="<?php echo get_template_directory_uri(); ?>/telegram.php" class="ind-form" method='POST'>
          <input
            class="form__input ind-form__input"
            type="tel"
            placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ"
            name ="user_phone2"
          />
          <button class="form__button ind_btn btn" type="submit">
            Оставить заявку!
          </button>
        </form>
        <small class="form__small ind-form__small"
          >*Минимальный заказ 500шт</small
        >
      </div>
    </section>

    <section class="manufacturing" id="manufacturing">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-7 order-last order-lg-first">
            <div class="manufacturing-slider_top hidden-mobile">
              <img src="<?php echo get_template_directory_uri(); ?>/img/decor/man_1.jpg" alt="" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/decor/man_2.jpg" alt="" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/decor/man_3.jpg" alt="" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/decor/man_4.jpg" alt="" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/decor/man_5.jpg" alt="" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/decor/man_6.jpg" alt="" />
            </div>

            <div class="manufacturing-slider_bottom">
              <img src="<?php echo get_template_directory_uri(); ?>/img/decor/man_1.jpg" alt="" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/decor/man_2.jpg" alt="" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/decor/man_3.jpg" alt="" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/decor/man_4.jpg" alt="" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/decor/man_5.jpg" alt="" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/decor/man_6.jpg" alt="" />
            </div>
          </div>

          <div class="col-12 col-lg-5 order-first order-lg-last">
            <div class="manufacturing-text">
              <div class="manufacturing-text__title">Производство</div>
              <div class="manufacturing-text__descr">
                Современное оборудование позволяет произ- водить до 5 миллионов
                квадратных метров гофрокартона ежемесячно. Гофрокороба и лотки
                производятся по ГОСТу или чертежам заказчика. Досконально
                прорабатываем конструкции коро- бов и составы сырья, учитывая
                условия хранения, транспортировки и производства вашей
                продукции. Возможно нанесение цветной флексопечати на
                поверхность коробов.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="client" id="client">
      <div class="container">
        <div class="production__tittle">Наши клиенты</div>
        <img
          class="client__img hidden-mobile"
          src="<?php echo get_template_directory_uri(); ?>/img/icons/line_title.png"
          alt="линия"
        />

        <div class="row">
          <div class="client-box">
            <div class="client-box__item">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/decor/m1_vohod.jpg"
                alt="vohod"
                class="client-box__img"
              />
            </div>
            <div class="client-box__item">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/decor/m2_sterh.jpg"
                alt="sterh"
                class="client-box__img"
              />
            </div>
            <div class="client-box__item">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/decor/m3_silversnow.jpg"
                alt="silversnow"
                class="client-box__img"
              />
            </div>
            <div class="client-box__item">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/decor/m4_avdon.jpg"
                alt="avdon"
                class="client-box__img"
              />
            </div>
            <div class="client-box__item">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/decor/m5_brojler.jpg"
                alt="brojler"
                class="client-box__img"
              />
            </div>
            <div class="client-box__item">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/decor/m6_bashkir.jpg"
                alt="bashkir"
                class="client-box__img"
              />
            </div>
            <div class="client-box__item">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/decor/m7_allat.jpg"
                alt="allat"
                class="client-box__img"
              />
            </div>
            <div class="client-box__item">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/decor/m8_alt.jpg"
                alt="alt"
                class="client-box__img"
              />
            </div>
            <div class="client-box__item">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/decor/m9_indushkin.jpg"
                alt="indushkin"
                class="client-box__img"
              />
            </div>
            <div class="client-box__item">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/decor/m10_salavat.jpg"
                alt="salavat"
                class="client-box__img"
              />
            </div>
            <div class="client-box__item">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/decor/m11_ferm.jpg"
                alt="ferm"
                class="client-box__img"
              />
            </div>
            <div class="client-box__item">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/decor/m12_megi.jpg"
                alt="megi"
                class="client-box__img"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="feedback" id="feedback">
      <div class="container">
        <div class="feedback__title">Отзывы о сотрудничестве</div>
        <img
          class="feedback__img hidden-mobile"
          src="<?php echo get_template_directory_uri(); ?>/img/icons/line_title.png"
          alt="линия"
        />
        <div class="feedback-slider">
          <div class="feedback-slider_item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/decor/feedback_1.jpg" alt="" />
          </div>
          <div class="feedback-slider_item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/decor/feedback_2.jpg" alt="" />
          </div>
          <div class="feedback-slider_item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/decor/feedback_3.jpg" alt="" />
          </div>
          <div class="feedback-slider_item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/decor/feedback_1.jpg" alt="" />
          </div>
          <div class="feedback-slider_item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/decor/feedback_2.jpg" alt="" />
          </div>
          <div class="feedback-slider_item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/decor/feedback_3.jpg" alt="" />
          </div>
        </div>
        <!-- /.slider -->
      </div>
    </section>

    <section class="map" id="map">
      <div class="container">
        <div class="map-block">
          <div class="map-block__ardess">
            <div class="map-block__title">Адрес офиса</div>
            <div class="map-block__desc">г. Уфа, Проспект октября, 46</div>
          </div>
          <div class="map-block__ardess">
            <div class="map-block__title">Адрес склада</div>
            <div class="map-block__desc">г. Уфа, ул. Майкопская, 65/2</div>
          </div>

          <div class="map-block__phone">
            <div class="map-block__title">Тел. отдела продаж:</div>
            <div class="map-block__desc">8 (347) 271-54-28</div>
            <div class="map-block__desc">8 (937) 363-30-00</div>
          </div>
          <button class="btn map-block__btn">Заказать звонок</button>
          <div class="map-block__mail">
            <div class="map-block__title">Е-mail</div>
            <div class="map-block__desc">urals.karton@gmail.com</div>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/decor/map_mobile.jpg" class="map-block__img d-sm-none" alt='Карта'/>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="footer__text">
        © www.gofra-ural.ru 2016, все права защищены
      </div>
    </footer>

    <!-- Day66 || Modal Window-->
    <div class="overlay">
      <div class="popup">
        <div class="popup-title">Форма обратной связи</div>
        <!-- /.popup-title -->
        <div class="popup-close">&times;</div>
        <!-- /.popup-close -->
        <div class="popup-form">
          <form action="#" class="main-form">
            <div class="popup-form-header">
              Получите индивидуальное предложение
              <span> на производство и поставку изделий</span>
              <label for="phone" class="popup-form__label">Введите ваш номер телефона:</label>
              <input
                type="tel"
                name="phone"
                class="popup-form__input"
                placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ"
                required
              />
              <button class="btn popup-form__btn">Оставить заявку!</button>
              <div class="popup-form__note">*Минимальный заказ 500шт</div>
            </div>
          </form>
        </div>
        <!-- /.popup-form -->
      </div>
      <!-- /.popup -->
    </div>