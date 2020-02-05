    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Вставка элемента контакты -->
    <script>
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
    </script>

    <script>
      $(document).ready(function() {
        $(".header-contacts__button").on("click", function() {
          $(".overlay").show();
        });
        $(".popup-close").on("click", function() {
          $(".overlay").hide();
        });
      });
    </script>
    <!-- /.overlay -->

    <!-- Wow.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script>
      new WOW().init();
    </script>

    <!-- slick-slider -->
    <script
      src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script>
      $(document).ready(function() {
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
      });
    </script>

    <script>
      $(document).ready(function() {
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
      });
    </script>

    <script>
      $(document).ready(function() {
        $(".main-slider").slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
          autoplaySpeed: 4000
        });
      });
    </script>

    <!-- Gamburger Menu -->
    <script>
      $(document).ready(function() {
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
      });
    </script>

    <!-- Yandex.Metrika counter -->
    <script>
      (function(m, e, t, r, i, k, a) {
        m[i] =
          m[i] ||
          function() {
            (m[i].a = m[i].a || []).push(arguments);
          };
        m[i].l = 1 * new Date();
        (k = e.createElement(t)),
          (a = e.getElementsByTagName(t)[0]),
          (k.async = 1),
          (k.src = r),
          a.parentNode.insertBefore(k, a);
      })(
        window,
        document,
        "script",
        "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js",
        "ym"
      );
      ym(57373428, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true,
        trackHash: true
      });
    </script>
    <noscript
      ><div>
        <img
          src="https://mc.yandex.ru/watch/57373428"
          style="position:absolute; left:-9999px;"
          alt=""
        /></div
    ></noscript>
    <!-- /Yandex.Metrika counter -->
  </body>
</html>
