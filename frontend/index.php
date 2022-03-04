<?php
include "lib/Mobile_Detect.php";
$detect = new Mobile_Detect;
$isTablet = $detect->isTablet();
$user_agent = $_SERVER["HTTP_USER_AGENT"];
if (strpos($user_agent, "Firefox") !== false) $browser = "Firefox";
elseif (strpos($user_agent, "Opera") !== false) $browser = "Opera";
elseif (strpos($user_agent, "Chrome") !== false) $browser = "Chrome";
elseif (strpos($user_agent, "MSIE") !== false) $browser = "Internet Explorer";
elseif (strpos($user_agent, "Safari") !== false) $browser = "Safari";
else $browser = "Неизвестный";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Архыз VITA - Сегодня «Архыз Vita» обновляется, чтобы вы полнее ощутили обновление своей жизни.</title>
    <meta name="description" content="В чём уникальность воды «Архыз Vita»? Она рождается в особенном месте, в сердце Кавказских гор, на высоте 1465 м, и в первозданном виде попадает к вам. Вода с ледяных шапок кавказских гор, просачиваясь сквозь горные породы, насыщается полезными минералами и микроэлементами за 800 лет природной фильтрации." />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css?ver=4.2.1" media="all"/>
    <link rel="stylesheet" href="assets/css/video.min.css?ver=7.4.1" media="all"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>


    <!-- Icons
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css?ver=5.7.0">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/v4-shims.min.css?ver=5.7.0">
    -->

    <!-- Theme
    <link rel="stylesheet" href="dist/css/uix-kit.min.css?ver=3sMLB4yIKbbLZjo5jFPU"/>
    -->

    <!--[if lt IE 10]
    <link rel="stylesheet" href="assets/css/IE.css?ver=3sMLB4yIKbbLZjo5jFPU"/>>
    <![endif]-->


    <!-- Core & Theme CSS  end -->



    <!-- SEO
    =============================================
    <meta name="description"
          content="A free web kits for fast web design and development, compatible with Bootstrap v4.">
    <meta name="generator" content="Uix Kit"/>
    <meta name="author" content="UIUX Lab">-->
    <!-- SEO  end -->


    <!-- Favicons
    =============================================
    <link rel="icon" href="assets/images/favicon/favicon-32x32.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets/images/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-touch-icon-114x114.png">-->
    <!-- Favicons  end -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <?php
    if ($isTablet):
    ?>

    <?php
    endif;
    ?>


    <script src="assets/js/wp-jquery/jquery.min.js?ver=3.3.1"></script>
    <script src="assets/js/wp-jquery/jquery.migrate.min.js?ver=1.4.1"></script>

    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/Fqavicon_16x16%20px.png" sizes="16x16">
    <link rel="shortcut icon" href="img/Fqavicon_32x32%20px.png" sizes="32x32">
</head>
<body>
<section id="modal" class="modal">
    <div class="modal__wrapper">

    </div>
    <div class="modal-inner">
        <div id="modal__close" class="modal__close">+</div>
        <div class="modal__side-img">
            <img src="img/cross-blue-single.png" alt="" class="modal__side-icon">
        </div>
        <div class="modal__main">
            <div class="modal__main-container">

                <h3 class="modal__title">Заказать обратный звонок
                </h3>
                <p class="modal__text">
                    Пожалуйста, заполните поля ниже и наши менеджеры свяжутся с вами в самое ближайшее время.
                    <br>
                    <br>
                    Поля со звёздочкой обязательны для заполнения.
                </p>
                <form action="" class="modal__form">

                    <label for="modal__name">Ваше Имя*</label>
                    <input type="text" id="modal__name" class="modal__name">

                    <div class="modal__phone-email">
                        <div class="modal__phone-container-item modal__phone-container">
                            <label for="modal__phone">Телефон*</label>
                            <input type="text" id="modal__phone" class="modal__phone">
                        </div>
                        <div class="modal__phone-container-item modal__email-container">
                            <label for="modal__email">E-mail</label>
                            <input type="email" id="modal__email" class="modal__email">
                        </div>

                    </div>

                    <label for="modal__message">Текст сообщения</label>
                    <textarea type="text" id="modal__message" class="modal__message"></textarea>
                    <div class="modal__footer">
                        <div class="modal__check-container">
                            <div class="page__section page__custom-settings">
                                <div class="page__toggle">
                                    <label class="toggle">
                                        <input class="toggle__input" type="checkbox" checked>
                                        <span class="toggle__label">
        </span>
                                    </label>
                                </div>
                            </div>
                            <p class="modal__text">
                                Даю согласие на <a class="modal__link" href="">обработку<br> персональных данных</a>
                            </p>
                        </div>
                        <button type="button" id="modal__sumbit" class="modal__sumbit">Отправить</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<section class="bottle-mount">
   <div class="background-container">
       <div class="clouds"></div>
       </div>
        <div class="bottle-mount__scroll">
        <!--<p class="bottle-mount__scroll-text">крутите вниз</p>-->
        <img src="img/scroll-arrow.png" alt="" class="bottle-mount__scroll-arrow">
    </div>
    <div class="bottle-mount__call">
        <a href="tel:+84993222292" class="bottle-mount__phone">
            <img src="img/icon-phone.png" alt="" class="bottle-mount__phone-icon">
            <span class="bottle-mount__phone-number">8-499-322-22-92</span>
        </a>
        <button id="bottle-mount__callback" class="bottle-mount__callback">Обратный звонок</button>
    </div>
    <div class="bottle-mount__main">
        <div class="bottle-mount__story">

            <h3 class="bottle-mount__title title-txt">
                Истинная высота.
                <br>Истинное обновление.
            </h3>
            <img src="img/logo-arhiz.png" alt=3"" class="bottle-mount__story-picture">
            <div class="bottle-mount__descr"><p class="bottle-mount__description">Вода добывается на высоте <br> <span
                    class="bottle-mount__description-num">~1500
            </span><span class="bottle-mount__description-txt">метров</span></p></div>

        </div>
        <div class="bottle-mount__story-changed">
            <img src="img/logo-arhiz.png" alt="" class="bottle-mount__changed-icon">
            <p class="bottle-mount__changed-title">Сегодня «Архыз Vita» обновляется, чтобы вы полнее ощутили обновление
                своей жизни. День за днём, глоток за глотком.</p>
            <div class="bottle-mount__changed-description">
                <p class="bottle-mount__changed-description-text">Высоко в горах, близко к звёздам, в окружении
                    Тебердинского заповедника находится источник живой природной воды.</p>
                <p class="bottle-mount__changed-description-text">За 800 лет она прошла путь от кавказских ледников до
                    скважины в маленьком горном селе Архыз – чтобы попасть к вам в первозданном виде.</p>
            </div>
        </div>

        <div class="bottle-mount__clip-desc-wrapper">
            <a class="bottle-mount__link-desc popup-youtube" href="video/arkhis.mp4">

            </a>
            <a href="video/arkhis.mp4" class="bottle-mount__link-mob popup-youtube"><img src="img/play-clip-mob.png" alt=""
                                                            class="bottle-mount__clip-mob"></a>
        </div>

    </div>

    
</section>
<section class="bottle-descr">
    <div class="bottle-descr__wrapper">
        <p class="bottle-descr__text">Высоко в горах, близко к звёздам, в окружении
            Тебердинского заповедника находится источник живой природной воды.</p>
        <p class="bottle-descr__text-small">За 800 лет она прошла путь от кавказских ледников до
            скважины в маленьком горном селе Архыз – чтобы попасть к вам в первозданном виде.</p>
    </div>
</section>
<section class="history-slider">
    <div class=" history-slider__container">

        <div class="history-slider__item">
            <img src="/frontend/img/slider-mask-girl.png" alt="Title 1"/>
            <div class=" history-slider__slide">
                <div class="history-slide_content">
                    <div class="history-slide__inner">
                        <h3 class="history-slide__title title-txt">
                            Архыз: настоящее
                            <br> место силы
                        </h3>
                        <p class="history-slide__story txt-small">
                            Все, кто бывал в Архызе, почувствовал гармонию этого края,
                            удивительного по своей красоте. Здесь полнее ощущается связь
                            природы и её обитателей, живущих как единый организм в мягком
                            горном климате.
                        </p>
                        <img class="history-slide__illustration" src="/frontend/img/illustration.png"
                             alt="">
                    </div>
                </div>
                <div class="history-entity__wrapper">
                    <!--<img src="/frontend/img/girl.png" class="history-slide__entity" alt="">-->
                </div>
            </div>
        </div>

        <div class="history-slider__item">
            <img  src="/frontend/img/slider-mask2.png" alt="Title 1"/>
            <div class=" history-slider__slide">
                <div class="history-slide_content">
                    <div class="history-slide__inner">
                        <h3 class="history-slide__title title-txt">
                            Архыз: настоящее
                            <br> место силы
                        </h3>
                        <p class="history-slide__story txt-small">
                            Архыз иногда называют «страной озёр». Одно из самых известных – Суук-Джюрек,
                            или Озеро любви в форме сердца. Ледниковая вода дарит озёрам необычный лазурный
                            оттенок.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="history-slider__item">
            <img src="/frontend/img/slider-mask3.png" alt="Title 1"/>
            <div class=" history-slider__slide">
                <div class="history-slide_content">
                    <div class="history-slide__inner">
                        <h3 class="history-slide__title title-txt">
                            Архыз: настоящее
                            <br> место силы
                        </h3>
                        <p class="history-slide__story txt-small"><span
                                class="bottle-mount__description-num">300
                                                                                            <span class="bottle-mount__description-txt">ясных дней в году</span></span>
                            <br>
                            — заслуга особого климата: его создают высоких хребты вокруг Архыза.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="history-slider__item">
            <img src="/frontend/img/slider-mask4.png" alt="Title 1"/>
            <div class=" history-slider__slide">
                <div class="history-slide_content">
                    <div class="history-slide__inner">
                        <h3 class="history-slide__title title-txt">
                            Архыз: настоящее
                            <br> место силы
                        </h3>
                        <p class="history-slide__story txt-small"><span
                                class="bottle-mount__description-num">180
                                                                                            <span class="bottle-mount__description-txt">озёр</span></span>
                            <br>
                            насчитывается в Тебердинском заповеднике, включенном в число особо охраняемых
                            объектов ЮНЕСКО.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="history-slider__item">
            <img src="/frontend/img/slider-mask5.png" alt="Title 1"/>
            <div class=" history-slider__slide">
                <div class="history-slide_content">
                    <div class="history-slide__inner">
                        <h3 class="history-slide__title title-txt">
                            Архыз: настоящее
                            <br> место силы
                        </h3>
                        <p class="history-slide__story txt-small">
                            Звёзды в Архызе – будто у самой земли. Неудивительно, что здесь расположен
                            крупный астрономический центр с телескопом, зеркало которого диаметром 600
                            м включено в Книгу рекордов Гиннеса.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="history-slider__item">
            <img src="/frontend/img/slider-mask6.png" alt="Title 1"/>
            <div class=" history-slider__slide">
                <div class="history-slide_content">
                    <div class="history-slide__inner">
                        <h3 class="history-slide__title title-txt">
                            Архыз: настоящее
                            <br> место силы
                        </h3>
                        <p class="history-slide__story txt-small">
                            Склоны вокруг Архыза украшает пёстрый цветочный ковер. В альпийском
                            разнотравье – множество целебных растений: барбарис, боярышник, шиповник,
                            облепиха, кизил.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="history-slider__item">
            <img src="/frontend/img/slider-mask7.png" alt="Title 1"/>
            <div class=" history-slider__slide">
                <div class="history-slide_content">
                    <div class="history-slide__inner">
                        <h3 class="history-slide__title title-txt">
                            Архыз: настоящее
                            <br> место силы
                        </h3>
                        <p class="history-slide__story txt-small"><span
                                class="bottle-mount__description-num">526
                                                                                            <span class="bottle-mount__description-txt">ступеней</span></span>
                            <br>
                            ведут к наскальному лику Христа, который найден в Архызе в 1999 году.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="history-slider__item">
            <img src="/frontend/img/slider-mask8.png" alt="Title 1"/>
            <div class=" history-slider__slide">
                <div class="history-slide_content">
                    <div class="history-slide__inner">
                        <h3 class="history-slide__title title-txt">
                            Архыз: настоящее
                            <br> место силы
                        </h3>
                        <p class="history-slide__story txt-small">
                            Рядом с Архызом найдено древнее городище, где люди жили ещё во II тысячелетии
                            до нашей эры. К этому времени относятся и таинственные дольмены, привлекающие
                            внимание ученых всего мира.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="history-slider__item">
            <img src="/frontend/img/slider-mask9.png" alt="Title 1"/>
            <div class=" history-slider__slide">
                <div class="history-slide_content">
                    <div class="history-slide__inner">
                        <h3 class="history-slide__title title-txt">
                            Архыз: настоящее
                            <br> место силы
                        </h3>
                        <p class="history-slide__story txt-small">
                            Самые крупные животные архызского высокогорья – зубры, вес которых достигает
                            одной тонны, и туры, живущие стадами до 80 голов. Обитают эти редкие звери в
                            Тебердинском заповеднике, что через дорогу от источника.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="history-slider__item">
            <img src="/frontend/img/slider-mask10.png" alt="Title 1"/>
            <div class=" history-slider__slide">
                <div class="history-slide_content">
                    <div class="history-slide__inner">
                        <h3 class="history-slide__title title-txt">
                            Архыз: настоящее
                            <br> место силы
                        </h3>
                        <p class="history-slide__story txt-small">
                            В горных лесах Архыза можно встретить следы оленя и косули, рыси и куницы. Среди
                            обитателей леса есть и бурые медведи, которые ещё недавно приходили пить воду из
                            архызской скважины.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class=" my-a-slider-arrows-2 history-slide__arrows">

        <a href="#" class="uix-3d-slider--liquid-scrollspy__arrows--prev history-slide__arrows-prev">
            <img src="img/arrow-button.png" alt="" class="history-slide__arrows-prev-img">
        </a>
        <span class="history-slide__number"></span>
        <a href="#" class="uix-3d-slider--liquid-scrollspy__arrows--next history-slide__arrows-next">
            <img src="img/arrow-button.png" alt="" class="history-slide__arrows-next-img">
        </a>
    </div>
    <img src="img/lines.png" alt="" class="animate_line history-slider__lines-bot">

</section>
<section class="items-bottle">
    <h3 class="items-bottle__title title-txt">
        Природный путь
        <br>«Архыз Vita»
    </h3>
    <div class="items-bottle__charts">
        <div class="items-bottle__chart">
            <img src="img/ww.png" alt="" class="item-bottle__icon">
            <p class="item-bottle__text txt-small">Нашу воду мы добываем с глубины 150 метров, из скважины на высоте
                1465 м над уровнем моря. </p>
        </div>
        <div class="items-bottle__chart">
            <img src="img/D.png" alt="" class="item-bottle__icon">
            <p class="item-bottle__text txt-small">Каждая партия воды «Архыз Vita» проходит проверку по 40 показателям
                качества в собственной и независимых лабораториях.
            </p>
        </div>
        <div class="items-bottle__chart ">
            <img src="img/redcross.png" alt="" class="item-bottle__icon items-bottle__chart-second">
            <p class="item-bottle__text txt-small">Скважина расположена в 30 метрах от главного цеха, где вода
                разливается по бутылкам. </p>
        </div>
        <div class="items-bottle__chart">
            <img src="img/aMeansArhiz.png" alt="" class="item-bottle__icon items-bottle__chart-second">
            <p class="item-bottle__text txt-small">Воде, прошедшей естественный фильтр горных пород, не нужна
                дополнительная очистка. </p>
        </div>
    </div>
</section>
<section class="star-academy">
    <div class="star-academy__items">
        <h3 class="star-academy__title title-txt">Настоящая
            <br>польза
            <br>на каждый день</h3>

        <div class="star-academy__item"><img src="img/Vector.png" alt="" class="star-academy__icon">
            <p class="star-academy__text">«Архыз Vita» – вода естественного происхождения, <span
                    class="bold star-academy__bold"> без искусственной
                минерализации</span> и дополнительной обработки. Нашу воду очистила и насытила минералами сама природа,
                и к этой первозданной чистоте нечего добавить.
            </p>
        </div>
        <div class="star-academy__item"><img src="img/Vector.png" alt="" class="star-academy__icon">
            <p class="star-academy__text">Общая минерализация воды «Архыз Vita» соответствует уровню столовых вод.
                Такую <span class="bold star-academy__bold"> воду можно пить постоянно </span>, при этом в её составе
                присутствуют 18 важных микроэлементов,
                в том числе кальций, натрий, магний и фтор.
            </p>
        </div>
        <div class="star-academy__item"><img src="img/Vector.png" alt="" class="star-academy__icon">
            <p class="star-academy__text"><span
                    class="bold star-academy__bold">Отличное качество и высокая чистота</span> воды «Архыз Vita»
                подтверждены
                многочисленными независимыми исследования и испытаниями в лабораториях Роскачества.
            </p>
        </div>
        <div class="star-academy__item"><img src="img/Vector.png" alt="" class="star-academy__icon">
            <p class="star-academy__text">У воды «Архыз Vita» отсутствует специфический запах, она <span
                    class="bold star-academy__bold">
                гипоаллергенна.</span> Такая вода подходит как взрослым, так и детям с первых дней жизни. Эту воду можно
                использовать для
                приготовления блюд, пить при беременности.</p>
        </div>
        <div class="star-academy__item"><img src="img/Vector.png" alt="" class="star-academy__icon">
            <p class="star-academy__text">В нашей воде содержится <span
                    class="bold star-academy__bold"> природный йод </span>. Он относится к жизненно
                важным микроэлементам, влияет на скорость обмена веществ. «Архыз Vita» помогает восполнить
                потребность организма в природном йоде.</p>
        </div>
    </div>
    <div class="star-academy__bottom">
        <img src="img/obsrvation-night.png" alt="" class="star-academy__img">
        <p class="star-academy__bottom-text">Посмотрите онлайн астрофизичесую обсерваторию
            <br>Российской академии наук в Архызе.</p>
        <button class="star-academy-button">Посмотреть</button>
        <img src="img/lines.png" alt="" class="animate_line star-academy__lines-bot-mob">
    </div>
    <div class="star-academy__items star-academy__items-mob">
        <div class="star-academy__item star-academy__item-mob">
            <img src="img/Vector-blue.png" alt="" class="star-academy__icon">
            <p class="star-academy__text star-academy__text-mob">«Архыз Vita» – вода естественного происхождения, <span
                    class="bold"> без искусственной
                минерализации</span> и дополнительной обработки. Нашу воду очистила и насытила минералами сама природа,
                и к этой первозданной чистоте нечего добавить.
            </p>
        </div>
        <div class="star-academy__item star-academy__item-mob">
            <img src="img/Vector-blue.png" alt="" class="star-academy__icon">
            <p class="star-academy__text star-academy__text-mob">Общая минерализация воды «Архыз Vita» соответствует
                уровню столовых вод.
                Такую <span class="bold"> воду можно пить постоянно </span>, при этом в её составе присутствуют 18
                важных микроэлементов,
                в том числе кальций, натрий, магний и фтор.
            </p>
        </div>
        <div class="star-academy__item star-academy__item-mob">
            <img src="img/Vector-blue.png" alt="" class="star-academy__icon">
            <p class="star-academy__text star-academy__text-mob"><span
                    class="bold">Отличное качество и высокая чистота</span> воды «Архыз Vita» подтверждены
                многочисленными независимыми исследования и испытаниями в лабораториях Роскачества.
            </p>
        </div>
        <div class="star-academy__item star-academy__item-mob">
            <img src="img/Vector-blue.png" alt="" class="star-academy__icon">
            <p class="star-academy__text star-academy__text-mob">У воды «Архыз Vita» отсутствует специфический запах,
                она <span class="bold">
                гипоаллергенна.</span> Такая вода подходит как взрослым, так и детям с первых дней жизни. Эту воду можно
                использовать для
                приготовления блюд, пить при беременности.</p>
        </div>
        <div class="star-academy__item star-academy__item-mob">
            <img src="img/Vector-blue.png" alt="" class="star-academy__icon">
            <p class="star-academy__text star-academy__text-mob">В нашей воде содержится <span class="bold"> природный йод </span>.
                Он относится к жизненно
                важным микроэлементам, влияет на скорость обмена веществ. «Архыз Vita» помогает восполнить
                потребность организма в природном йоде.</p>
        </div>
    </div>
    <img src="img/lines.png" alt="" class="animate_line star-academy__lines-bot">
</section>
<section class="arkhyz-types">
    <div class="arkhyz-types__type">
        <img src="img/arkhyz-type1.png" alt="" class="arkhyz-types__image">
        <div class="arkhyz-types__text">
            <h3 class="arkhyz-types__title title-txt">Негазированная вода
                <br>«Архыз Vita»</h3>
            <p class="arkhyz-types__description">Природная питьевая минеральная вода на каждый день.
                Помогает восстановлению организма и мягкой перезагрузке, для более активной и насыщенной жизни.
            </p>
            <div class="arkhyz-types__buttons">
                <button class="arkhyz-types__button arkhyz-types__button-empty"><a href="https://www.ozon.ru/search/?from_global=true&text=%D0%B0%D1%80%D1%85%D1%8B%D0%B7" target="_blank">Купить на ozon.ru</a></button>
                <button class="arkhyz-types__button" onclick="window.open('https://shop.arkhis.ru/katalog/', '_blank');">Заказать воду</button>
            </div>
        </div>
    </div>
    <div class="arkhyz-types__type arkhyz-types__type-reverse">
        <img src="img/arkhyz-type2.png" alt="" class="arkhyz-types__image">
        <div class="arkhyz-types__text">
            <h3 class="arkhyz-types__title title-txt">Газированная вода
                <br>«Архыз Vita»
            </h3>
            <p class="arkhyz-types__description">Отличный вариант для утоления жажды. Наша вода умеренно газированная,
                пить её легко и приятно. Такая вода замечательно оттеняет вкус блюд, сочетается с любыми продуктами.</p>
            <div class="arkhyz-types__buttons">
                <button class="arkhyz-types__button arkhyz-types__button-empty"><a href="https://www.ozon.ru/search/?from_global=true&text=%D0%B0%D1%80%D1%85%D1%8B%D0%B7" target="_blank">Купить на ozon.ru</a></button>
                <button class="arkhyz-types__button" onclick="window.open('https://shop.arkhis.ru/katalog/', '_blank');">Заказать воду</button>
            </div>
        </div>
    </div>
    <div class="arkhyz-types__type">
        <img src="img/arkhyz-type3.png" alt="" class="arkhyz-types__image">
        <div class="arkhyz-types__text">
            <h3 class="arkhyz-types__title title-txt">«Архыз Vita»
                <br>для малышей</h3>
            <p class="arkhyz-types__description">Питьевая столовая вода для детей с момента рождения.
                Подходит для ежедневного питья, разведения сухих смесей и каш. Оптимальна по содержанию микроэлементов,
                необходимых для развития малыша,и абсолютно безопасна.
            </p>
            <div class="arkhyz-types__buttons">
                <button class="arkhyz-types__button arkhyz-types__button-empty"><a href="https://www.ozon.ru/search/?from_global=true&text=%D0%B0%D1%80%D1%85%D1%8B%D0%B7" target="_blank">Купить на ozon.ru</a></button>
                <button class="arkhyz-types__button" onclick="window.open('https://shop.arkhis.ru/katalog/', '_blank');">Заказать воду</button>
            </div>
        </div>
    </div>
    <button class="arkhyz-types__button-main" onclick="window.open('https://shop.arkhis.ru/katalog/', '_blank');">
        <span class="arkhyz-types__button-txt">Смотреть весь ассортимент</span>
        <img src="img/arrow-button.png" alt="" class="arkhyz-types__button-arrow">
    </button>
</section>
<section class="arkhyz-unique">
    <img src="img/lines-without-smoke.png" alt="" class="animate_line arkhyz-unique__lines arkhyz-unique__lines-top">

    <div class="arkhyz-unique__row arkhyz-unique__row-waterfall">
        <div class="arkhyz-unique__info-col ">
            <img src="img/cloud.png" alt="" class="arkhyz-unique__cloud">
            <div class="arkhyz-unique__top-info">
                <h3 class="arkhyz-title">В чём<br class="mob__br"> уникальность
                    <br>воды «Архыз Vita»?</h3>
                <p class="arkhyz-unique__text-blue">Она рождается в особенном месте, в сердце Кавказских гор,
                    на высоте 1465 м, и в первозданном виде попадает к вам...
                </p>
                <p class="arkhyz-unique__text">Архыз — место действительно уникальное. Расположенное высоко в горах –
                    выше,
                    чем другие посёлки Карачаево-Черкесии – селение окружено девственной кавказской природой
                    и чистейшими ледниковыми озёрами.
                </p>
            </div>
            <div class="arkhyz-unique__bot-info">
                <img src="img/stars.png" alt="" class="arkhyz-unique__stars">
                <div class="arkhyz-unique__bot-info-inner">
                    <p class="arkhyz-unique__bot-text">Сюда приезжают надышаться ароматом диких трав, насладиться
                        высотой звёздного неба, зарядиться энергией ручьёв и водопадов. </p>
                </div>
            </div>
        </div>
        <div class="arkhyz-unique__nature-col">
<!--
            <div class="arkhyz-unique__nature-col-video">
                <p class="arkhyz-unique__nature-text">Видео
                    <br>водопадов</p>
                <a href="" class="popup-youtube arkhyz-unique__nature-link">
                </a>

            </div>
-->
            <img src="img/waterfall-mob-lines.png" alt="" class="animate_line arkhyz-unique__mob-lines">
        </div>
    </div>
    <div class="arkhyz-unique__row arkhyz-unique__row-lakes">
        <div class="arkhyz-unique__nature-col">
<!--
            <div class="arkhyz-unique__nature-col-video">
                <a href="" class="popup-youtube arkhyz-unique__nature-link">
                </a>
                <p class="arkhyz-unique__nature-text">Видео
                    <br>озёр</p>

            </div>
-->
            <img src="img/waterfall-mob-lines.png" alt="" class="animate_line arkhyz-unique__mob-lines-bot arkhyz-unique__mob-lines">
        </div>
        <div class="arkhyz-unique__info-col">
            <div class="arkhyz-unique__top-info">
                <div class="arkhyz-unique__title-container">
                    <img src="img/cross-blue-single.png" alt="" class="arkhyz-unique__title-icon">
                    <h3 class="arkhyz-unique__title">800 лет</h3>
                </div>

                <p class="arkhyz-unique__text">Вода с ледяных шапок кавказских гор, просачиваясь сквозь горные породы,
                    насыщается полезными минералами и микроэлементами за 800 лет природной фильтрации.
                </p>
            </div>
            <div class="arkhyz-unique__bot-info">
                <img src="img/stars.png" alt="" class="arkhyz-unique__stars">
                <div class="arkhyz-unique__bot-info-inner">
                    <p class="arkhyz-unique__bot-text">Ни одна молекула, заботливо добавленная природой в этот эликсир
                        жизни,
                        не теряется по пути к вам. Это не заменитель жизни, это сама жизнь.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <img src="img/lines-without-smoke.png" alt="" class="animate_line arkhyz-unique__lines  arkhyz-unique__lines-bot">
</section>
<section class="socials">
    <div class="socials__container">
        <div class="socials__col socials__gallery socials__gallery-first">
           <img src="img/insta-photo1.png" alt="" class="socials__photo" onclick="window.open('https://www.instagram.com/p/CGZ_JKcleXT/', '_blank');"> 
            <img src="img/insta-photo2.png" alt="" class="socials__photo">
            <img src="img/insta-photo3.png" alt="" class="socials__photo" onclick="window.open('https://www.instagram.com/p/CE1avJMFakK/', '_blank');">
        </div>
        <div class="socials__col socials__title-container">
            <h2 class="socials__title">Ещё больше вдохновения –
                <br>в наших соцсетях</h2>
            <div class="socials__items">
                <div class="socials__item">
                    <a href="https://www.instagram.com/arkhis.vita/" class="socials__item-link" target="_blank">
                        <img src="img/insta-icon.png" alt="" class="socials__item-pic">
                        <span class="socials__item-text">Instagram</span>
                    </a>
                </div>
                <div class="socials__item">
                    <a href="https://www.facebook.com/arkhis.vita/" class="socials__item-link" target="_blank">
                        <img src="img/facebook-icon.png" alt="" class="socials__item-pic">
                        <span class="socials__item-text">Facebook</span>
                    </a>
                </div>

            </div>
        </div>
        <div class="socials__col socials__gallery socials__gallery-second">
           <img src="img/insta-photo4.png" alt="" class="socials__photo" onclick="window.open('https://www.instagram.com/p/CGhjj8hFWKI/', '_blank');">
            <img src="img/insta-photo5.png" alt="" class="socials__photo">
            <img src="img/insta-photo6.png" alt="" class="socials__photo" onclick="window.open('https://www.instagram.com/p/CGr3SeQl-7u/', '_blank');">
        </div>
        <p class="socials__col socials__hash">#АРХЫЗ_VITA</p>
    </div>
</section>
<section class="prefooter">
    <div class="prefooter__inner">
        <div class="prefooter__title-inner">
            <img src="img/cross-blue-single.png" alt="" class="prefooter__star">
            <h3 class="prefooter__title">Оцените жизнь <br class="mob__br">с истинной
                <br>высоты,
                <br class="mob__br">с высоты <br class="mob__br">«Архыз <br class="mob__br"> VITA»</h3>
        </div>
        <p class="prefooter__text">Для истинного обновления иногда достаточно одного глотка.</p>
    </div>
</section>
<section class="footer-desc footer">
    <div class="footer-desc__inner">
        <div class="footer__col footer-desc__col-socials">
            <div class="footer__soc-address footer-desc__soc-address">
                <div class="footer__soc-address-icons footer-desc__soc-address-icons">
                    <a class="footer__soc-address-link" href="https://www.facebook.com/%D0%90%D1%80%D1%85%D1%8B%D0%B7-%D1%87%D0%B8%D1%81%D1%82%D0%B0%D1%8F-%D0%B3%D0%BE%D1%80%D0%BD%D0%B0%D1%8F-%D0%B2%D0%BE%D0%B4%D0%B0-%D0%BC%D0%BD%D0%BE%D0%B3%D0%BE%D0%B2%D0%B5%D0%BA%D0%BE%D0%B2%D1%8B%D1%85-%D0%BB%D0%B5%D0%B4%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2-%D0%A1%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D0%BE%D0%B3%D0%BE-%D0%9A%D0%B0%D0%B2%D0%BA%D0%B0%D0%B7%D0%B0-552532621822452/" target="_blank">
                        <img src="img/Facebook-footer.png" alt="" class="footer__soc-address-icon">
                    </a>
                    <a class="footer__soc-address-link" href="https://www.instagram.com/arkhis.vita/" target="_blank">
                        <img src="img/Instagram-footer.png" alt="" class="footer__soc-address-icon">
                    </a>
                </div>
                <p class="footer__soc-address-adress footer-desc__soc-address-adress">Москва,
                    Выборгская улица, дом 16, строение 1, офис 202 «А» </p>
            </div>
            <p class="footer__copyright">
                © 2008–2020, «Архыз ВИТА»
            </p>
        </div>
        <div class="footer__col footer-desc__col-adress">
            <a href="mailto:doc@arkhis.ru" class="footer__link">doc@arkhis.ru</a>
        </div>
        <div class="footer__col footer-desc__col-phone">
            <a href="tel:84993222292" class="bottle-mount__phone">
                <img src="img/icon-phone.png" alt="" class="bottle-mount__phone-icon">
                <span class="bottle-mount__phone-number">8-499-322-22-92</span>
            </a>
        </div>
        <div class="footer__col footer-desc__col-socials-callback">
            <button class="bottle-mount__callback footer__callback">Обратный звонок</button>
            <p class="footer__text">Разработка сайта — <a href="" class="footer__hover-link">WEBPROFY</a></p>
        </div>
    </div>

</section>
<section class="footer-mob">
    <div class="footer-desc__inner">
        <div class="footer__col-mob footer-mob__col-socials">
            <div class="footer__soc-address footer-desc__soc-address">
                <p class="footer__soc-address-adress footer-desc__soc-address-adress">Москва,
                    Выборгская улица, дом 16, строение 1, офис 202 «А» </p>
            </div>

        </div>
        <div class="footer__col-mob footer-mob__col-adress">
            <a href="doc@arkhis.ru" class="footer__link">doc@arkhis.ru</a>
        </div>
        <div class="footer__col-mob footer-mob__col-phone">
            <a href="tel:+84993222292" class="bottle-mount__phone">
                <img src="img/icon-phone.png" alt="" class="bottle-mount__phone-icon">
                <span class="bottle-mount__phone-number">+8-499-322-22-92</span>
                <div class="footer__soc-address-icons footer-desc__soc-address-icons">
                    <a class="footer__soc-address-link" href="https://www.facebook.com/%D0%90%D1%80%D1%85%D1%8B%D0%B7-%D1%87%D0%B8%D1%81%D1%82%D0%B0%D1%8F-%D0%B3%D0%BE%D1%80%D0%BD%D0%B0%D1%8F-%D0%B2%D0%BE%D0%B4%D0%B0-%D0%BC%D0%BD%D0%BE%D0%B3%D0%BE%D0%B2%D0%B5%D0%BA%D0%BE%D0%B2%D1%8B%D1%85-%D0%BB%D0%B5%D0%B4%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2-%D0%A1%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D0%BE%D0%B3%D0%BE-%D0%9A%D0%B0%D0%B2%D0%BA%D0%B0%D0%B7%D0%B0-552532621822452/" target="_blank">
                        <img src="img/Facebook-footer.png" alt="" class="footer__soc-address-icon">
                    </a>
                    <a class="footer__soc-address-link" href="https://www.instagram.com/arkhis.vita/" target="_blank">
                        <img src="img/Instagram-footer.png" alt="" class="footer__soc-address-icon">
                    </a>
                </div>
            </a>
        </div>
        <div class="footer__col-mob footer-mob__col-socials-callback">
            <button class="bottle-mount__callback footer__callback">Обратный звонок</button>

            <p class="footer__copyright">
                © 2008–2020, «Архыз ВИТА»
            </p>
            <p class="footer__text">Разработка сайта — <a href="" class="footer__hover-link">WEBPROFY</a></p>
        </div>
    </div>
</section>


<script src="assets/js/min/modernizr.min.js?ver=3.5.0"></script>
<script  src="assets/js/min/TweenMax.min.js?ver=2.0.2"></script>
<script  src="assets/js/min/three.min.js?ver=r114"></script>
<script  src="assets/js/min/pixi.min.js?ver=5.2.0"></script>
<script  src="assets/js/min/jquery.waitforimages.min.js?ver=1.0"></script>
<script  src="assets/js/min/jquery.magnific-popup.min.js?ver=0.8.0"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>


<!-- Your Plugins & Theme Scripts
=============================================

<script>
    /*
    * Some global vars. DO NOT change these variables names.
    * These variables are being used in `uix-kit.min.js`.
    *

    var REVISION     = "4.4.4",
        APP_ROOTPATH = {
            "templateUrl" : "", //If the file is in the root directory, you can leave it empty. If in another directory, you can write: "/blog"
            "homeUrl"     : "",  //Eg. https://uiux.cc
            "ajaxUrl"     : ""   //Eg. https://uiux.cc/wp-admin/admin-ajax.php
        };

    */
    /*
    * Fixed a bug that Cannot read property 'fn' of undefined for jQuery 1.xx.x.
    *

    window.$ = window.jQuery;*/
</script>
<script src="dist/js/uix-kit.js?ver=3sMLB4yIKbbLZjo5jFPU"></script>
-->
<script>
    let isIOS = /iPad|iPhone|iPod/.test(navigator.platform) ||
        (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1);
    console.log(isIOS);
    var browser = '<?= $browser?>';
    var isTablet = '<?= $isTablet?>';
</script>
<script src="js/js.js"></script>
<script src="js/form.js"></script>
<script src="js/popup.js"></script>
<script>
    //for slider counter

    function updateSlideCount(found) {
        var total = $(".history-slider__item").length;
        $(".history-slide__number").html(found + " / " + total);
    }
    function updateSlickCount(found) {
        var total = $("li[role=presentation]").length;
        $(".history-slide__number").html(found + " / " + total);
    }
/*
    $(document).ready(function () {
        var start = "1";
        updateSlideCount(start);
        $(".history-slide__arrows").on('click', function () {
            var found = $(".history-slider__item.is-active").index() + 1;
            updateSlideCount(found);
        })
    })*/

</script>
<script type="text/javascript">
    $(document).ready(function(){

        $('.history-slider__container').slick({
            fade: true,
            dots: true,
            prevArrow: $(".history-slide__arrows-prev"),
            nextArrow: $(".history-slide__arrows-next"),
            cssEase: 'cubic-bezier(0.76, 0.26, 0, 0.61)'
        });
        var start = "1";
        updateSlickCount(start);
        $(".history-slider__container").on('afterChange', function () {
            var found = $("li[role=presentation].slick-active").index() +1;
            console.log(found)
            updateSlickCount(found);
        });
    });
</script>
</body>
</html>