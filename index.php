<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/build/swiper.css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/headers/header.css">
    <link rel="stylesheet" href="/assets/css/sections/promo.css">
    <link rel="stylesheet" href="/assets/css/sections/services.css">
    <link rel="stylesheet" href="/assets/css/sections/consultation.css">
    <link rel="stylesheet" href="/assets/css/sections/about.css">
    <link rel="stylesheet" href="/assets/css/sections/guarantees.css">
    <link rel="stylesheet" href="/assets/css/sections/specialists.css">
    <link rel="stylesheet" href="/assets/css/sections/about-section.css">
    <link rel="stylesheet" href="/assets/css/sections/promotions.css">
    <link rel="stylesheet" href="/assets/css/sections/advantages.css">
    <link rel="stylesheet" href="/assets/css/sections/reviews.css">
    <link rel="stylesheet" href="/assets/css/sections/gallery.css">
    <link rel="stylesheet" href="/assets/css/sections/articles.css">
    <link rel="stylesheet" href="/assets/css/sections/documents.css">
    <link rel="stylesheet" href="/assets/css/sections/centers.css">
    <link rel="stylesheet" href="/assets/css/sections/map.css">
    <link rel="stylesheet" href="/assets/css/footers/footer.css">
    <script defer src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
    <script defer src="/assets/js/build/swiper.js"></script>
    <script defer src="/assets/js/main.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            ymaps.ready(init);

            function init() {
                const map = document.querySelector('#map');

                if (map) {
                    var myMap = new ymaps.Map("map", {
                        center: [55.758468, 37.601088],
                        zoom: 14,
                    });

                    var myPlacemark = new ymaps.Placemark([55.758468, 37.601088], {}, {
                        iconLayout: 'default#image',
                        iconImageHref: '/assets/img/map-marker.svg',
                        iconImageSize: [40, 48],
                    });

                    myMap.geoObjects.add(myPlacemark);
                }
            }
        });
    </script>
    <title>Свято - Наркологическая клиника</title>
</head>
<body>
<div class="contraindications">
    <div class="contraindications__container container">
        <p class="contraindications__text">
            Имеются противопоказания, необходимо проконсультироваться со специалистом&nbsp;18+
        </p>
    </div>
</div>
<header class="header">
    <div class="header__top">
        <div class="header__top-container container">
            <a href="/" class="header__logo logo">
                <picture class="logo__picture">
                    <img src="/assets/img/logo.svg" alt="" class="logo__img">
                </picture>
                <div class="logo__content">
                    <svg width="115" height="24" viewBox="0 0 115 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.3771 24C8.81809 24 5.85984 22.8571 3.5023 20.5714C1.16743 18.2637 0 15.4066 0 12C0 8.59341 1.16743 5.74725 3.5023 3.46154C5.85984 1.15385 8.81809 0 12.3771 0C14.5079 0 16.4801 0.483517 18.2936 1.45055C20.1071 2.3956 21.5352 3.69231 22.5779 5.34066L17.8855 7.97802C17.3642 7.07692 16.6161 6.38462 15.6413 5.9011C14.6666 5.3956 13.5785 5.14286 12.3771 5.14286C10.2689 5.14286 8.58007 5.76923 7.31063 7.02198C6.06385 8.27472 5.44047 9.93407 5.44047 12C5.44047 14.0659 6.06385 15.7253 7.31063 16.978C8.58007 18.2308 10.2689 18.8571 12.3771 18.8571C13.5785 18.8571 14.6666 18.6044 15.6413 18.0989C16.6388 17.5934 17.3868 16.9011 17.8855 16.022L22.5779 18.6593C21.5579 20.3077 20.1411 21.6154 18.3276 22.5824C16.5141 23.5275 14.5306 24 12.3771 24Z"
                              fill="#333333"/>
                        <path d="M41.9251 11.5714C43.8746 12.7802 44.8493 14.5165 44.8493 16.7802C44.8493 18.7802 44.1126 20.4066 42.6391 21.6593C41.1657 22.9121 39.3408 23.5385 37.1647 23.5385H27.1678V0.461538H36.4846C38.6155 0.461538 40.3949 1.07692 41.8231 2.30769C43.2738 3.51648 43.9992 5.0989 43.9992 7.05495C43.9992 8.9011 43.3079 10.4066 41.9251 11.5714ZM36.4846 5.40659H32.6083V9.49451H36.4846C37.0967 9.49451 37.5954 9.30769 37.9807 8.93407C38.3661 8.53846 38.5588 8.04396 38.5588 7.45055C38.5588 6.85714 38.3661 6.37363 37.9807 6C37.5954 5.6044 37.0967 5.40659 36.4846 5.40659ZM37.1647 18.5934C37.8447 18.5934 38.3888 18.3956 38.7968 18C39.2048 17.5824 39.4089 17.044 39.4089 16.3846C39.4089 15.7253 39.2048 15.1978 38.7968 14.8022C38.3888 14.3846 37.8447 14.1758 37.1647 14.1758H32.6083V18.5934H37.1647Z"
                              fill="#333333"/>
                        <path d="M66.1038 0.461538V23.5385H60.6633V15.956H58.9292L53.8628 23.5385H47.7422L53.3187 15.2967C51.8679 14.7033 50.6891 13.7802 49.7824 12.5275C48.8757 11.2527 48.4223 9.86813 48.4223 8.37363C48.4223 6.17583 49.2157 4.30769 50.8025 2.76923C52.3893 1.23077 54.3161 0.461538 56.583 0.461538H66.1038ZM56.583 11.3407H60.6633V5.40659H56.583C55.8349 5.40659 55.1889 5.69231 54.6448 6.26374C54.1234 6.83517 53.8628 7.53846 53.8628 8.37363C53.8628 9.20879 54.1234 9.91209 54.6448 10.4835C55.1889 11.0549 55.8349 11.3407 56.583 11.3407Z"
                              fill="#333333"/>
                        <path d="M88.2057 0.461538V5.53846H82.0852V23.5385H76.6447V5.53846H70.5242V0.461538H88.2057Z"
                              fill="#333333"/>
                        <path d="M111.396 20.5385C108.993 22.8462 106.069 24 102.623 24C99.1773 24 96.2531 22.8462 93.8502 20.5385C91.4473 18.2308 90.2459 15.3846 90.2459 12C90.2459 8.61539 91.4473 5.76923 93.8502 3.46154C96.2531 1.15385 99.1773 0 102.623 0C106.069 0 108.993 1.15385 111.396 3.46154C113.799 5.76923 115 8.61539 115 12C115 15.3846 113.799 18.2308 111.396 20.5385ZM97.6585 16.9451C98.996 18.2198 100.651 18.8571 102.623 18.8571C104.595 18.8571 106.239 18.2198 107.553 16.9451C108.891 15.6703 109.56 14.022 109.56 12C109.56 9.97802 108.891 8.32967 107.553 7.05495C106.239 5.78022 104.595 5.14286 102.623 5.14286C100.651 5.14286 98.996 5.78022 97.6585 7.05495C96.3437 8.32967 95.6863 9.97802 95.6863 12C95.6863 14.022 96.3437 15.6703 97.6585 16.9451Z"
                              fill="#333333"/>
                    </svg>
                    <p class="logo__descr">
                        Наркологическая
                        клиника
                    </p>
                </div>
            </a>
            <div class="header__wrapper">
                <div class="header__info">
                    <div class="header__address">
                        <div class="header__geo">
                            <img src="/assets/img/geo.svg" alt="" class="header__geo-icon" aria-label="presentation">
                            <p class="header__geo-text">
                                Город:
                            </p>
                            <button class="header__geo-btn">
                                <span class="header__geo-btn-text">Санкт-Петербург</span>
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 1L5 5L1 1" stroke="#EB5553" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <p class="header__address-text">
                            ул. Длиноназывная 45/6
                        </p>
                    </div>
                    <div class="header__connections-phones">
                        <img src="/assets/img/phone-icon.svg" alt="" class="header__connections-icon"
                             aria-label="presentation">
                        <a href="tel:88005001160" class="header__connections-link">
                            8 (800) 500-11-60
                        </a>
                        <a href="tel:89066561212" class="header__connections-link">
                            +7 (906) 656-12-12
                        </a>
                    </div>
                </div>
                <div class="header__connections">
                    <form action="" class="header__search search">
                        <label class="search__label">
                            <input placeholder="Поиск по сайту" type="text" class="search__input">
                        </label>
                        <button type="submit" class="search__btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 17L13.1333 13.1333M15.2222 8.11111C15.2222 12.0385 12.0385 15.2222 8.11111 15.2222C4.18375 15.2222 1 12.0385 1 8.11111C1 4.18375 4.18375 1 8.11111 1C12.0385 1 15.2222 4.18375 15.2222 8.11111Z"
                                      stroke="#63728C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </form>
                    <div class="header__connections-btn-group">
                        <button class="header__connections-btn btn">
                            <span class="btn__text">Вызвать врача</span>
                        </button>
                        <button class="header__connections-btn btn btn_bg-transparent">
                            <span class="btn__text">Записаться онлайн</span>
                        </button>
                    </div>
                </div>
            </div>
            <button class="header__menu-open open-menu">
                <span class="open-menu__line"></span>
            </button>
            <div class="mobile-menu">
                <div class="mobile-menu__background close-menu"></div>
                <div class="mobile-menu__content">
                    <div class="mobile-menu__top">
                        <form action="" class="mobile-menu__search search">
                            <label class="search__label">
                                <input placeholder="Поиск по сайту" type="text" class="search__input">
                            </label>
                            <button type="submit" class="search__btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 17L13.1333 13.1333M15.2222 8.11111C15.2222 12.0385 12.0385 15.2222 8.11111 15.2222C4.18375 15.2222 1 12.0385 1 8.11111C1 4.18375 4.18375 1 8.11111 1C12.0385 1 15.2222 4.18375 15.2222 8.11111Z"
                                          stroke="#63728C" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </form>
                        <div class="mobile-menu__close close-menu">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.6 9.4L9.4 16.6M9.4 9.4L16.6 16.6M25 13C25 19.6274 19.6274 25 13 25C6.37258 25 1 19.6274 1 13C1 6.37258 6.37258 1 13 1C19.6274 1 25 6.37258 25 13Z"
                                      stroke="#EB5553" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="mobile-menu__info">
                        <div class="mobile-menu__address header__address">
                            <div class="header__geo">
                                <img src="/assets/img/geo.svg" alt="" class="header__geo-icon"
                                     aria-label="presentation">
                                <p class="header__geo-text">
                                    Город:
                                </p>
                                <button class="header__geo-btn">
                                    <span class="header__geo-btn-text">Санкт-Петербург</span>
                                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 1L5 5L1 1" stroke="#EB5553" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            <p class="header__address-text">
                                ул. Длиноназывная 45/6
                            </p>
                        </div>
                        <ul class="header__socials">
                            <li class="header__socials-item">
                                <a href="" target="_blank" class="header__socials-link">
                                    <img src="/assets/img/socials/vk.svg" alt="" class="header__socials-img"
                                         aria-label="presentation">
                                </a>
                            </li>
                            <li class="header__socials-item">
                                <a href="" target="_blank" class="header__socials-link">
                                    <img src="/assets/img/socials/telegramm.svg" alt="" class="header__socials-img"
                                         aria-label="presentation">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <ul class="mobile-menu__list accor-wrapper" data-accordion-list="">
                        <li class="mobile-menu__item accor">
                            <button class="mobile-menu__btn accor-open" data-accordion-button="">
                                <span class="mobile-menu__btn-text">О клинике</span>
                                <img src="/assets/img/menu-arrow.svg" alt="" class="menu__link-arrow"
                                     aria-label="presentation">
                            </button>
                            <div class="mobile-menu__item-wrapper accor-full" style="max-height: 0px;">
                                <div class="mobile-menu__item-content" data-accordion-content="">
                                    <ul class="mobile-menu__sub-list accor-full-content" data-accordion-list="">
                                        <li class="mobile-menu__sub-item accor">
                                            <a href="/o-klinike/oplata/" class="mobile-menu__sub-link">
                                                Оплата
                                            </a>
                                        </li>
                                        <li class="mobile-menu__sub-item accor">
                                            <a href="/o-klinike/fotogalereya/" class="mobile-menu__sub-link">
                                                Фотогалерея
                                            </a>
                                        </li>
                                        <li class="mobile-menu__sub-item accor">
                                            <a href="/o-klinike/litsenzii-i-sertifikaty/" class="mobile-menu__sub-link">
                                                Лицензии и сертификаты
                                            </a>
                                        </li>
                                        <li class="mobile-menu__sub-item accor">
                                            <a href="/o-klinike/nashi-spetsialisty/" class="mobile-menu__sub-link">
                                                Наши специалисты
                                            </a>
                                        </li>
                                        <li class="mobile-menu__sub-item accor">
                                            <a href="/o-klinike/otzyvy/" class="mobile-menu__sub-link">
                                                Отзывы
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="mobile-menu__item accor">
                            <button class="mobile-menu__btn accor-open" data-accordion-button=""><span
                                        class="mobile-menu__btn-text">Услуги</span>
                                <img src="/assets/img/menu-arrow.svg" alt="" class="menu__link-arrow"
                                     aria-label="presentation">
                            </button>
                            <div class="mobile-menu__item-wrapper accor-full" style="max-height: 0px;">
                                <div class="mobile-menu__item-content" data-accordion-content="">
                                    <ul class="mobile-menu__sub-list accor-full-content" data-accordion-list="">
                                        <li class="mobile-menu__sub-item accor">
                                            <button class="mobile-menu__sub-link accor-open" data-accordion-button="">
                                                <span class="mobile-menu__sub-link-text">Лечение алкоголизма</span>
                                                <img src="/assets/img/menu-arrow.svg" alt="" class="menu__link-arrow"
                                                     aria-label="presentation">
                                            </button>
                                            <div class="mobile-menu__sub-item-wrapper accor-full" style="max-height: 0px;">
                                                <ul class="mobile-menu__sub-list accor-full-content" data-accordion-content="">
                                                    <li class="mobile-menu__sub-item accor">
                                                        <a href="/nashi-uslugi/lechenie-alkogolizma/vyvod-iz-zapoya-na-domu/" class="mobile-menu__sub-link">
                                                            Вывод из запоя на дому
                                                        </a>
                                                    </li>
                                                    <li class="mobile-menu__sub-item accor">
                                                        <a href="/nashi-uslugi/lechenie-alkogolizma/kapelnitsa-ot-pohmelya/" class="mobile-menu__sub-link">
                                                            Капельница от похмелья
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="mobile-menu__sub-item accor"><a href="/nashi-uslugi/konsultatsiya-narkologa/" class="mobile-menu__sub-link">
                                                Консультация нарколога
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="mobile-menu__item accor">
                            <a href="/aktsii/" class="mobile-menu__btn">
                                <span class="mobile-menu__btn-text">
                                    Акции
                                </span>
                            </a>
                        </li>
                        <li class="mobile-menu__item accor">
                            <a href="/faq/" class="mobile-menu__btn">
                                <span class="mobile-menu__btn-text">
                                    FAQ
                                </span>
                            </a>
                        </li>
                        <li class="mobile-menu__item accor">
                            <a href="/stati/" class="mobile-menu__btn">
                                <span class="mobile-menu__btn-text">
                                    Статьи
                                </span>
                            </a>
                        </li>
                        <li class="mobile-menu__item accor">
                            <a href="/kontakty/" class="mobile-menu__btn">
                                <span class="mobile-menu__btn-text">
                                    Контакты
                                </span>
                            </a>
                        </li>
                        <li class="mobile-menu__item accor">
                            <a href="/prays-list/" class="mobile-menu__btn">
                                <span class="mobile-menu__btn-text">
                                    Прайс лист
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="header__bottom-container container">
            <nav class="header__menu menu">
                <ul class="menu__list">
                    <li class="menu__item">
                        <a href="#" class="menu__link">
                            <span class="menu__link-text">
                                О клинике
                            </span>
                            <img src="/assets/img/menu-arrow.svg" alt="" class="menu__link-arrow"
                                 aria-label="presentation">
                        </a>
                        <ul class="menu__sub-list">
                            <li class="menu__sub-item">
                                <a href="#" class="menu__sub-link">
                                    <span class="menu__sub-link-text">
                                        Лицензии и сертификаты
                                    </span>
                                </a>
                            </li>
                            <li class="menu__sub-item">
                                <a href="#" class="menu__sub-link">
                                    <span class="menu__sub-link-text">
                                        Наши специалисты
                                    </span>
                                </a>
                            </li>
                            <li class="menu__sub-item">
                                <a href="#" class="menu__sub-link">
                                    <span class="menu__sub-link-text">
                                        Вопросы и ответы
                                    </span>
                                </a>
                            </li>
                            <li class="menu__sub-item">
                                <a href="#" class="menu__sub-link">
                                    <span class="menu__sub-link-text">
                                        Фотогалерея
                                    </span>
                                </a>
                            </li>
                            <li class="menu__sub-item">
                                <a href="#" class="menu__sub-link">
                                    <span class="menu__sub-link-text">
                                        Отзывы
                                    </span>
                                </a>
                            </li>
                            <li class="menu__sub-item">
                                <a href="#" class="menu__sub-link">
                                    <span class="menu__sub-link-text">
                                        Оплата
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">
                            <span class="menu__link-text">
                                Услуги
                            </span>
                            <img src="/assets/img/menu-arrow.svg" alt="" class="menu__link-arrow"
                                 aria-label="presentation">
                        </a>
                        <ul class="menu__sub-list">
                            <li class="menu__sub-item">
                                <a href="#" class="menu__sub-link">
                                    <span class="menu__sub-link-text">
                                        Вызов нарколога на дом
                                    </span>
                                </a>
                            </li>
                            <li class="menu__sub-item">
                                <a href="#" class="menu__sub-link">
                                    <span class="menu__sub-link-text">
                                        Консультация нарколога
                                    </span>
                                </a>
                            </li>
                            <li class="menu__sub-item">
                                <a href="#" class="menu__sub-link">
                                    <span class="menu__sub-link-text">
                                        Лечение алкоголизма
                                    </span>
                                    <img src="/assets/img/menu-arrow-white.svg" alt="" class="menu__link-arrow"
                                         aria-label="presentation">
                                </a>
                                <ul class="menu__sub-list">
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">
                                            <span class="menu__sub-link-text">
                                                Вызов нарколога на дом
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">
                                            <span class="menu__sub-link-text">
                                                Вызов нарколога на дом
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">
                                            <span class="menu__sub-link-text">
                                                Вызов нарколога на дом
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">
                                            <span class="menu__sub-link-text">
                                                Вызов нарколога на дом
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">
                                            <span class="menu__sub-link-text">
                                                Вызов нарколога на дом
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">
                                            <span class="menu__sub-link-text">
                                                Вызов нарколога на дом
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">
                                            <span class="menu__sub-link-text">
                                                Вызов нарколога на дом
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu__sub-item">
                                <a href="#" class="menu__sub-link">
                                    <span class="menu__sub-link-text">
                                        Лечение наркомании
                                    </span>
                                    <img src="/assets/img/menu-arrow-white.svg" alt="" class="menu__link-arrow"
                                         aria-label="presentation">
                                </a>
                                <ul class="menu__sub-list">
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">
                                            <span class="menu__sub-link-text">
                                                Вызов нарколога на дом
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">
                                            <span class="menu__sub-link-text">
                                                Вызов нарколога на дом
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">
                                            <span class="menu__sub-link-text">
                                                Вызов нарколога на дом
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">
                                            <span class="menu__sub-link-text">
                                                Вызов нарколога на дом
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">
                                            <span class="menu__sub-link-text">
                                                Вызов нарколога на дом
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">
                                            <span class="menu__sub-link-text">
                                                Вызов нарколога на дом
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">
                                            <span class="menu__sub-link-text">
                                                Вызов нарколога на дом
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">
                            <span class="menu__link-text">
                                Прайс лист
                            </span>
                        </a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">
                            <span class="menu__link-text">
                                Акции
                            </span>
                        </a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">
                            <span class="menu__link-text">
                                FAQ
                            </span>
                        </a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">
                            <span class="menu__link-text">
                                Статьи
                            </span>
                        </a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">
                            <span class="menu__link-text">
                                Контакты
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
            <ul class="header__socials">
                <li class="header__socials-item">
                    <a href="" target="_blank" class="header__socials-link">
                        <img src="/assets/img/socials/vk.svg" alt="" class="header__socials-img"
                             aria-label="presentation">
                    </a>
                </li>
                <li class="header__socials-item">
                    <a href="" target="_blank" class="header__socials-link">
                        <img src="/assets/img/socials/telegramm.svg" alt="" class="header__socials-img"
                             aria-label="presentation">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
<main class="main">
        <section class="promo section-offset">
            <div class="promo__container container">
                <div class="promo__slider swiper">
                    <div class="swiper-wrapper">
                        <div class="promo__slide swiper-slide"
                             style="background-image: url('/assets/img/sections/promo/slide-1.png')"></div>
                        <div class="promo__slide swiper-slide"
                             style="background-image: url('/assets/img/sections/promo/slide-2.png')"></div>
                    </div>
                </div>
                <div class="promo__slider-pagination slider-pagination"></div>
                <div class="promo__decor"></div>
                <div class="promo__decor promo-decor_big"></div>
                <div class="promo__content">
                    <h1 class="promo__title section-title">
                        Наркологическая клиника
                        «Свято» в Санкт-Петербурге
                    </h1>
                    <p class="promo__descr">
                        Мы поможем вам и вашим близким победить зависимость раз
                        и навсегда. Мы подберем лечение, основанное на новейших методиках и подходящее именно вам.
                    </p>
                    <ul class="promo__list list-decor">
                        <li class="promo__list-item">
                            Гарантируем терапию европейского качества
                        </li>
                        <li class="promo__list-item">
                            Обращение к нам анонимно, без постановки на учет
                        </li>
                        <li class="promo__list-item">
                            Приезд бригады через 30 минут после обращения
                        </li>
                        <li class="promo__list-item">
                            Если вы остались недовольны лечением, то вернем вам деньги
                        </li>
                    </ul>
                    <div class="promo__btn-group">
                        <button class="promo__btn btn">
                            <span class="btn__text">Записаться на прием</span>
                        </button>
                        <button class="promo__btn btn btn_bg-transparent">
                            <span class="btn__text">Узнать подробнее</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="services section-offset">
            <div class="services__container container">
                <h2 class="services__title section-title">
                    Предоставляемые услуги и направления
                </h2>
                <div class="services__row row">
                    <div class="services__card col-33">
                        <div class="services__card-top">
                            <div class="services__card-decor">
                                <svg width="30" height="34" viewBox="0 0 30 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.4123 14.6503C21.7831 14.6503 22.2866 14.356 22.6381 13.8511M22.6381 13.8511C22.9419 13.4149 23.1322 12.8214 23.0255 12.1249M22.6381 13.8511C23.1446 13.8511 24.1997 13.8379 25.1982 13.4816M25.1982 13.4816C26.3876 13.0572 27.4968 12.146 27.5028 10.1908M25.1982 13.4816V14.6503C25.1982 15.5367 24.6293 17.2159 22.4739 17.5606C22.0194 17.6333 21.6023 18.0105 21.3374 18.3868C20.9882 18.8828 20.3409 19.3816 19.4038 19.3816C17.9223 19.3816 17.1651 18.1988 17.1651 17.8791L17.198 2.5025C17.198 2.18282 16.4408 1 14.9593 1C14.0222 1 13.3749 1.49877 13.0257 1.99479C12.7607 2.37112 12.3436 2.74835 11.8892 2.82103C9.73374 3.16573 9.16484 4.84489 9.16484 5.73127V6.90004M27.5028 10.1908C27.5028 10.1855 27.5028 10.1802 27.5028 10.1748M27.5028 10.1908C27.4968 8.23561 26.3876 7.32446 25.1982 6.90004M27.5028 10.1908C27.5028 10.1961 27.5028 10.2015 27.5028 10.2068M21.4123 5.73127C21.7831 5.73127 22.2866 6.02563 22.6381 6.53047M22.6381 6.53047C22.9419 6.96675 23.1322 7.56022 23.0255 8.25674M22.6381 6.53047C23.1446 6.53047 24.1997 6.54375 25.1982 6.90004M25.1982 6.90004V5.73127C25.1982 4.84489 24.6293 3.16573 22.4739 2.82103C22.0194 2.74835 21.6023 2.37112 21.3374 1.99479C20.9882 1.49877 20.3409 1 19.4038 1C17.9223 1 17.1651 2.18282 17.1651 2.5025M12.9508 14.6503C12.5799 14.6503 12.0765 14.356 11.7249 13.8511M11.7249 13.8511C11.4212 13.4149 11.2308 12.8214 11.3376 12.1249M11.7249 13.8511C11.2184 13.8511 10.1634 13.8379 9.16484 13.4816M9.16484 13.4816C7.97543 13.0572 6.86629 12.146 6.86028 10.1908M9.16484 13.4816V14.6503C9.16484 15.5367 9.73374 17.2159 11.8892 17.5606C12.3436 17.6333 12.7607 18.0105 13.0257 18.3868C13.3749 18.8828 14.0222 19.3816 14.9593 19.3816C16.4408 19.3816 17.198 18.1988 17.198 17.8791M6.86028 10.1908C6.86026 10.1855 6.86025 10.1802 6.86025 10.1748M6.86028 10.1908C6.86629 8.23561 7.97543 7.32446 9.16484 6.90004M6.86028 10.1908C6.86026 10.1961 6.86025 10.2015 6.86025 10.2068M12.9508 5.73127C12.5799 5.73127 12.0765 6.02563 11.7249 6.53047M11.7249 6.53047C11.4212 6.96675 11.2308 7.56022 11.3376 8.25674M11.7249 6.53047C11.2184 6.53047 10.1634 6.54375 9.16484 6.90004M4.12766 25.4555C5.18119 24.1235 8.27593 21.4595 12.2267 21.4595C14.3996 21.4595 14.6959 21.5235 15.1897 21.6833C15.5848 21.8112 17.9662 22.7596 19.1075 23.2178C19.5136 23.4309 20.2401 24.0745 19.8977 24.9441M4.12766 25.4555L9.19777 29.4835M4.12766 25.4555L3.88899 25.2925C3.52408 25.0431 3.02798 25.122 2.75844 25.4723L1.49746 27.1108C1.22101 27.4701 1.28239 27.9844 1.6356 28.2684L6.89384 32.4974C7.24277 32.7781 7.75108 32.7328 8.04492 32.3949L9.44284 30.7875C9.75675 30.4265 9.70302 29.876 9.32525 29.5825L9.19777 29.4835M19.8977 24.9441C19.4697 26.031 18.7124 25.9351 18.3174 25.8711C18.0013 25.82 15.5738 25.1678 14.3996 24.8482M19.8977 24.9441L27.1077 22.962C27.5687 22.8768 28.5761 22.9556 28.9185 23.953C29.3465 25.1998 27.9637 25.9351 27.6674 26.0629C27.4304 26.1652 22.0596 28.5351 19.4038 29.7073C18.8332 29.9311 17.3297 30.2444 15.8811 29.7073C14.4325 29.1702 13.1046 28.6523 12.6217 28.4605C12.1937 28.3433 11.1995 28.1792 10.6464 28.4605C10.0933 28.7419 9.45017 29.2597 9.19777 29.4835" stroke="#EB5553" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="services__card-title">
                                Психиатрия
                            </p>
                        </div>
                        <p class="services__card-descr">
                            Медицинский специалист в области психиатрии называется психиатром.
                        </p>
                    </div>
                    <div class="services__card col-33">
                        <div class="services__card-top">
                            <div class="services__card-decor">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.2604 10.493C13.3537 7.31795 16.2416 4.36689 17.3485 3.27174C20.0105 0.63801 23.0895 0.0783417 26.0723 2.745C29.844 6.7746 27.6438 10.6352 26.0723 12.0618L18.9521 19.3547M10.2604 10.493C7.40237 13.4266 4.36892 16.5514 2.40256 18.5803C1.34415 19.8972 -0.137608 23.3408 2.40256 26.5803C5.57776 30.6296 9.90759 28.6187 11.1584 27.3375L18.9521 19.3547M10.2604 10.493L18.9521 19.3547M25.8798 33C29.8122 33 33 29.7278 33 25.6914C33 21.655 29.8122 18.3828 25.8798 18.3828M25.8798 33C21.9475 33 18.7597 29.7278 18.7597 25.6914C18.7597 21.655 21.9475 18.3828 25.8798 18.3828M25.8798 33V18.3828" stroke="#FFC531" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="services__card-title">
                                Наркология
                            </p>
                        </div>
                        <p class="services__card-descr">
                            Наркология как область медицины сформировалась относительно
                        </p>
                    </div>
                    <div class="services__card col-33">
                        <div class="services__card-top">
                            <div class="services__card-decor">
                                <svg width="26" height="34" viewBox="0 0 26 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.48204 4.2837V4.2837C4.22176 4.2837 4.01076 4.0727 4.01076 3.81243V1.83333C4.01076 1.3731 4.38386 1 4.8441 1H7.82277C8.28301 1 8.6561 1.3731 8.6561 1.83333V3.87976C8.6561 4.10285 8.47525 4.2837 8.25216 4.2837V4.2837M4.48204 4.2837V4.73441C4.53585 6.00038 3.97239 8.9189 1.36008 10.8369C1.14737 10.9931 1.01075 11.231 1.00881 11.4948C1.00332 12.2405 1.00077 13.9007 1.00015 16.0342M4.48204 4.2837H8.25216M8.25216 4.2837V4.73441C8.204 7.84317 10.054 9.93101 11.2804 10.8138C11.5234 10.9887 11.6857 11.2613 11.6857 11.5606V20.831M1.00015 16.0342L11.6857 20.831M1.00015 16.0342C0.999829 17.1492 1.00004 18.3936 1.00063 19.7042M11.6857 20.831V24.4366M1.00063 19.7042C1.00253 23.8616 1.00834 28.6864 1.01359 32.1691C1.01428 32.6288 1.38717 33 1.84689 33H10.8523C11.3126 33 11.6857 32.6269 11.6857 32.1667V24.4366M1.00063 19.7042L11.6857 24.4366M3.2702 30.4567H9.363M16.3769 26.3682L16.2073 24.711C16.157 24.2197 16.5425 23.7928 17.0363 23.7928H24.0804C24.573 23.7928 24.958 24.2177 24.9097 24.708L24.7458 26.3682M16.3769 26.3682L16.9792 32.2515C17.0227 32.6767 17.3808 33 17.8082 33H23.336C23.7645 33 24.1232 32.675 24.1653 32.2485L24.7458 26.3682M16.3769 26.3682H24.7458" stroke="#EB5553" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="services__card-title">
                                Алкоголизм
                            </p>
                        </div>
                        <p class="services__card-descr">
                            Алкоголизм - это психическое и физическое заболевание.
                        </p>
                    </div>
                    <div class="services__card col-33">
                        <div class="services__card-top">
                            <div class="services__card-decor">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.81928 28.4452C8.70359 31.2632 12.649 33 17 33C25.8366 33 33 25.8366 33 17C33 12.6812 31.2889 8.76205 28.5076 5.88353M5.81928 28.4452C2.8458 25.54 1 21.4855 1 17C1 8.16344 8.16344 1 17 1C21.5178 1 25.5982 2.87241 28.5076 5.88353M5.81928 28.4452L12.8554 21.4483M28.5076 5.88353L12.8554 21.4483M12.8554 21.4483V17C12.7162 16.1004 13.061 13.9863 15.5542 12.7269C15.5542 10.7992 15.5542 8.23962 15.5542 7.2008H18.5422V12.7269C19.4418 13.0054 21.241 14.2498 21.241 17C21.241 19.7502 21.241 24.7216 21.241 26.8635H12.8554V21.4483Z" stroke="#FFC531" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="services__card-title">
                                Кодирование
                            </p>
                        </div>
                        <p class="services__card-descr">
                            Медицинский специалист в области психиатрии называется психиатром.
                        </p>
                    </div>
                    <div class="services__card col-33">
                        <div class="services__card-top">
                            <div class="services__card-decor">
                                <svg width="34" height="32" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.1318 19.7461C27.0829 17.756 28.2829 15.0487 28.2829 12.0658C28.2829 5.95434 23.2456 1 17.0319 1C10.8181 1 5.78088 5.95434 5.78088 12.0658C5.78088 15.0487 6.98088 17.756 8.93197 19.7461M25.1318 19.7461C23.5263 21.3836 21.4123 22.5356 19.0398 22.9559L17.0319 26.4974L15.0239 22.9559C12.6514 22.5356 10.5374 21.3836 8.93197 19.7461M25.1318 19.7461H29.7809L33 31H1L4.31474 19.7461H8.93197M21.7171 10.3417V13.9154H18.8486V16.7367H15.2151V13.9154H12.3466V10.3417H15.2151V7.52038H18.8486V10.3417H21.7171Z" stroke="#EB5553" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="services__card-title">
                                Реабилитация
                            </p>
                        </div>
                        <p class="services__card-descr">
                            Наркология как область медицины сформировалась относительно
                        </p>
                    </div>
                    <div class="services__card col-33">
                        <div class="services__card-top">
                            <div class="services__card-decor">
                                <svg width="34" height="24" viewBox="0 0 34 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.4444 17.6667L32.4199 10.5447C32.7407 10.2171 32.7366 9.69178 32.4107 9.36923L24.5416 1.58304C24.2157 1.26054 23.6905 1.26193 23.3662 1.58615L20.619 4.33333M25.4444 17.6667C25.5276 16.7405 25.2816 15.2347 24.2064 13.9566M25.4444 17.6667C25.4444 20.1111 23.2857 23 19.9841 23C17.6613 23 15.9539 21.625 15.1729 20.6889C14.9944 20.475 14.7374 20.3333 14.4588 20.3333H11.846C11.5569 20.3333 11.2924 20.486 11.12 20.718C10.1507 22.0224 8.5222 23 6.52381 23C2.07937 23 1 18.619 1 17.5397C1 13.4 4.34392 11.963 6.01587 11.7619H7.66667M13.1905 11.7619H19.8546C19.8985 11.7619 19.9425 11.7653 19.9859 11.7725C20.2051 11.8089 20.4161 11.8511 20.619 11.8987M13.1905 11.7619L13.4762 11.4762M13.1905 11.7619H7.66667M20.619 11.8987L20.2597 9.61354C20.2454 9.5226 20.2447 9.42988 20.2678 9.34078C20.415 8.77465 20.9237 7.85714 22.0476 7.85714C23.1603 7.85714 23.6467 8.46654 23.7911 9.24034C23.8805 9.71961 24.2491 10.1312 24.723 10.2457C25.43 10.4164 26.1746 10.8504 26.1746 11.8987C26.1746 13.1353 24.8624 13.7859 24.2064 13.9566M20.619 11.8987C22.322 12.2975 23.4626 13.0726 24.2064 13.9566M15.8889 9.06349C15.3386 8.53439 14.2381 7.21587 14.2381 6.1746C14.2381 6.96825 12.619 9.69841 11.254 9.69841C11.7619 9.69841 13.2857 11.1905 13.4762 11.4762M15.8889 9.06349L13.4762 11.4762M15.8889 9.06349L20.619 4.33333M7.66667 11.7619V2.05556C7.66667 1.59532 8.03976 1.22222 8.5 1.22222H19.7857C20.246 1.22222 20.619 1.59532 20.619 2.05556V4.33333M20.4286 15.0317C20.4286 15.3473 20.1727 15.6032 19.8571 15.6032C19.5416 15.6032 19.2857 15.3473 19.2857 15.0317C19.2857 14.7162 19.5416 14.4603 19.8571 14.4603C20.1727 14.4603 20.4286 14.7162 20.4286 15.0317ZM20.4286 19.6667C20.4286 19.9823 20.1727 20.2381 19.8571 20.2381C19.5416 20.2381 19.2857 19.9823 19.2857 19.6667C19.2857 19.3511 19.5416 19.0952 19.8571 19.0952C20.1727 19.0952 20.4286 19.3511 20.4286 19.6667ZM22.7143 17.381C22.7143 17.6965 22.4584 17.9524 22.1429 17.9524C21.8273 17.9524 21.5714 17.6965 21.5714 17.381C21.5714 17.0654 21.8273 16.8095 22.1429 16.8095C22.4584 16.8095 22.7143 17.0654 22.7143 17.381ZM18.1429 17.381C18.1429 17.6965 17.887 17.9524 17.5714 17.9524C17.2558 17.9524 17 17.6965 17 17.381C17 17.0654 17.2558 16.8095 17.5714 16.8095C17.887 16.8095 18.1429 17.0654 18.1429 17.381ZM5.63492 15.5V15.1032C5.63492 14.6429 6.00802 14.2698 6.46825 14.2698H6.64286C7.1031 14.2698 7.47619 14.6429 7.47619 15.1032V15.5C7.47619 15.9602 7.84929 16.3333 8.30952 16.3333H8.70635C9.16659 16.3333 9.53968 16.7064 9.53968 17.1667V17.3413C9.53968 17.8015 9.16659 18.1746 8.70635 18.1746H8.30952C7.84929 18.1746 7.47619 18.5477 7.47619 19.0079V19.4048C7.47619 19.865 7.10309 20.2381 6.64286 20.2381H6.46825C6.00802 20.2381 5.63492 19.865 5.63492 19.4048V19.0079C5.63492 18.5477 5.26182 18.1746 4.80159 18.1746H4.40476C3.94452 18.1746 3.57143 17.8015 3.57143 17.3413V17.1667C3.57143 16.7064 3.94452 16.3333 4.40476 16.3333H4.80159C5.26182 16.3333 5.63492 15.9602 5.63492 15.5Z" stroke="#FFC531" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="services__card-title">
                                Игромания
                            </p>
                        </div>
                        <p class="services__card-descr">
                            Алкоголизм - это психическое и физическое заболевание.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="prices section-offset">
            <div class="prices__container container">
                <h2 class="prices__title section-title">
                    Прайс-лист с ценами на наши услуги
                </h2>
                <ul class="prices__wrapper accor-wrapper" data-accordion-list>
                    <li class="faq__accor question accor">
                        <button class="question__title accor-open" data-accordion-button>
                            <span class="question__title-text">
                              Вывод из запоя
                            </span>
                            <span class="question__title-decor accor-open-decor"></span>
                        </button>
                        <div class="question__info accor-full">
                            <div class="question__info-wrapper accor-full-content" data-accordion-content>
                                <ul class="question__info-services">
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Капельница от запоя
                                        </p>
                                        <p class="question__info-service-price">
                                            от 2000 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Капельница от похмелья
                                        </p>
                                        <p class="question__info-service-price">
                                            от 3000 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Лечение от похмелья
                                        </p>
                                        <p class="question__info-service-price">
                                            от 2700 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Помощь при отравление алкоголем
                                        </p>
                                        <p class="question__info-service-price">
                                            от 2400 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="faq__accor question accor">
                        <button class="question__title accor-open" data-accordion-button>
                            <span class="question__title-text">
                              Вывод из запоя
                            </span>
                            <span class="question__title-decor accor-open-decor"></span>
                        </button>
                        <div class="question__info accor-full">
                            <div class="question__info-wrapper accor-full-content" data-accordion-content>
                                <ul class="question__info-services">
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Капельница от запоя
                                        </p>
                                        <p class="question__info-service-price">
                                            от 2000 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Капельница от похмелья
                                        </p>
                                        <p class="question__info-service-price">
                                            от 3000 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Лечение от похмелья
                                        </p>
                                        <p class="question__info-service-price">
                                            от 2700 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Помощь при отравление алкоголем
                                        </p>
                                        <p class="question__info-service-price">
                                            от 2400 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="faq__accor question accor">
                        <button class="question__title accor-open" data-accordion-button>
                            <span class="question__title-text">
                              Вывод из запоя
                            </span>
                            <span class="question__title-decor accor-open-decor"></span>
                        </button>
                        <div class="question__info accor-full">
                            <div class="question__info-wrapper accor-full-content" data-accordion-content>
                                <ul class="question__info-services">
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Капельница от запоя
                                        </p>
                                        <p class="question__info-service-price">
                                            от 2000 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Капельница от похмелья
                                        </p>
                                        <p class="question__info-service-price">
                                            от 3000 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Лечение от похмелья
                                        </p>
                                        <p class="question__info-service-price">
                                            от 2700 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Помощь при отравление алкоголем
                                        </p>
                                        <p class="question__info-service-price">
                                            от 2400 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="faq__accor question accor">
                        <button class="question__title accor-open" data-accordion-button>
                            <span class="question__title-text">
                              Вывод из запоя
                            </span>
                            <span class="question__title-decor accor-open-decor"></span>
                        </button>
                        <div class="question__info accor-full">
                            <div class="question__info-wrapper accor-full-content" data-accordion-content>
                                <ul class="question__info-services">
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Капельница от запоя
                                        </p>
                                        <p class="question__info-service-price">
                                            от 2000 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Капельница от похмелья
                                        </p>
                                        <p class="question__info-service-price">
                                            от 3000 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Лечение от похмелья
                                        </p>
                                        <p class="question__info-service-price">
                                            от 2700 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Помощь при отравление алкоголем
                                        </p>
                                        <p class="question__info-service-price">
                                            от 2400 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="faq__accor question accor">
                        <button class="question__title accor-open" data-accordion-button>
                            <span class="question__title-text">
                              Вывод из запоя
                            </span>
                            <span class="question__title-decor accor-open-decor"></span>
                        </button>
                        <div class="question__info accor-full">
                            <div class="question__info-wrapper accor-full-content" data-accordion-content>
                                <ul class="question__info-services">
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Капельница от запоя
                                        </p>
                                        <p class="question__info-service-price">
                                            от 2000 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Капельница от похмелья
                                        </p>
                                        <p class="question__info-service-price">
                                            от 3000 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Лечение от похмелья
                                        </p>
                                        <p class="question__info-service-price">
                                            от 2700 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Помощь при отравление алкоголем
                                        </p>
                                        <p class="question__info-service-price">
                                            от 2400 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="faq__accor question accor">
                        <button class="question__title accor-open" data-accordion-button>
                            <span class="question__title-text">
                              Вывод из запоя
                            </span>
                            <span class="question__title-decor accor-open-decor"></span>
                        </button>
                        <div class="question__info accor-full">
                            <div class="question__info-wrapper accor-full-content" data-accordion-content>
                                <ul class="question__info-services">
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Капельница от запоя
                                        </p>
                                        <p class="question__info-service-price">
                                            от 2000 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Капельница от похмелья
                                        </p>
                                        <p class="question__info-service-price">
                                            от 3000 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Лечение от похмелья
                                        </p>
                                        <p class="question__info-service-price">
                                            от 2700 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                    <li class="question__info-service">
                                        <p class="question__info-service-title">
                                            Помощь при отравление алкоголем
                                        </p>
                                        <p class="question__info-service-price">
                                            от 2400 ₽
                                        </p>
                                        <button class="question__info-service-btn btn btn_bg-transparent">
                                            <span class="btn__text">
                                                Заказать
                                            </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    <!--    <section class="consultation section-offset">-->
    <!--        <div class="consultation__container container">-->
    <!--            <div class="consultation__decor"></div>-->
    <!--            <picture class="consultation__picture">-->
    <!--                <img src="/assets/img/sections/consultation/person.png" alt="" class="consultation__img">-->
    <!--            </picture>-->
    <!--            <div class="consultation__content">-->
    <!--                <h2 class="consultation__title">-->
    <!--                    Получите бесплатную консультацию врача прямо сейчас! Оставьте заявку-->
    <!--                </h2>-->
    <!--                <form action="" class="consultation__form form-consultation">-->
    <!--                    <label class="form-consultation__label">-->
    <!--                        <input placeholder="Ваше имя" type="text" class="form-consultation__input">-->
    <!--                    </label>-->
    <!--                    <label class="form-consultation__label">-->
    <!--                        <input placeholder="Номер телефона" type="tel" class="form-consultation__input">-->
    <!--                    </label>-->
    <!--                    <button class="form-consultation-btn btn">-->
    <!--                    <span class="btn__text">-->
    <!--                        Оставить заявку-->
    <!--                    </span>-->
    <!--                    </button>-->
    <!--                </form>-->
    <!--                <a href="tel:88005001160" class="consultation__link">-->
    <!--                    Или позвоните: 8-800-500-11-60-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
    <!--    <section class="about section-offset">-->
    <!--        <div class="about__container container">-->
    <!--            <div class="about__content">-->
    <!--                <h2 class="about__title section-title">-->
    <!--                    Частный наркологический-->
    <!--                    и психиатрический стационар-->
    <!--                    в Санкт-Петербурге-->
    <!--                </h2>-->
    <!--                <p class="about__descr section-descr">-->
    <!--                    Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и наркотической-->
    <!--                    зависимостей.-->
    <!--                    Лечение в нашей частной наркологической клинике проводится на добровольной основе, с сохранением-->
    <!--                    анонимности и без постановки на учет.-->
    <!--                </p>-->
    <!--                <h3 class="about__sub-title">-->
    <!--                    Круглосуточная помощь-->
    <!--                </h3>-->
    <!--                <p class="about__sub-descr section-descr">-->
    <!--                    Врачи выездной службы работают во всех районах Санкт-Петербурга. Вызов врача и госпитализация в-->
    <!--                    стационар проводятся круглосуточно.-->
    <!--                </p>-->
    <!--                <ul class="about__list list-decor">-->
    <!--                    <li class="about__list-item">-->
    <!--                        Выведение из запоя-->
    <!--                    </li>-->
    <!--                    <li class="about__list-item">-->
    <!--                        Алкогольная зависимость-->
    <!--                    </li>-->
    <!--                    <li class="about__list-item">-->
    <!--                        Наркотическая зависимость-->
    <!--                    </li>-->
    <!--                </ul>-->
    <!--            </div>-->
    <!--            <div class="about__img-wrapper">-->
    <!--                <picture class="about__picture">-->
    <!--                    <img src="/assets/img/sections/about/doctor.png" alt="" class="about__img">-->
    <!--                </picture>-->
    <!--                <div class="about__img-badge">-->
    <!--                    <p class="about__img-badge-name">-->
    <!--                        Олег Борисович-->
    <!--                    </p>-->
    <!--                    <p class="about__img-badge-role">-->
    <!--                        Глав. врач нарколог клиники «Свято»-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
    <!--    <section class="guarantees section-offset">-->
    <!--        <div class="guarantees__container container">-->
    <!--            <h2 class="guarantees__title section-title">-->
    <!--                Наши гарантии-->
    <!--            </h2>-->
    <!--            <div class="guarantees__cards row">-->
    <!--                <div class="guarantees__card col-20">-->
    <!--                    <img src="/assets/img/sections/guarantees/terms.svg" alt="" class="guarantees__card-img"-->
    <!--                         aria-label="presentation">-->
    <!--                    <p class="guarantees__card-descr">-->
    <!--                        Строгое соблюдение всех обязательств-->
    <!--                        и сроков-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--                <div class="guarantees__card col-20">-->
    <!--                    <img src="/assets/img/sections/guarantees/assistance.svg" alt="" class="guarantees__card-img"-->
    <!--                         aria-label="presentation">-->
    <!--                    <p class="guarantees__card-descr">-->
    <!--                        Психологическая-->
    <!--                        помощь – круглосуточно-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--                <div class="guarantees__card col-20">-->
    <!--                    <img src="/assets/img/sections/guarantees/family-restoration.svg" alt=""-->
    <!--                         class="guarantees__card-img" aria-label="presentation">-->
    <!--                    <p class="guarantees__card-descr">-->
    <!--                        Содействие в восстановлении семейных отношений-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--                <div class="guarantees__card col-20">-->
    <!--                    <img src="/assets/img/sections/guarantees/benefit.svg" alt="" class="guarantees__card-img"-->
    <!--                         aria-label="presentation">-->
    <!--                    <p class="guarantees__card-descr">-->
    <!--                        Демократичные цены, выгодные условия расчета-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--                <div class="guarantees__card col-20">-->
    <!--                    <img src="/assets/img/sections/guarantees/psychological-help.svg" alt=""-->
    <!--                         class="guarantees__card-img" aria-label="presentation">-->
    <!--                    <p class="guarantees__card-descr">-->
    <!--                        Психологическая помощь созависимым и их родственникам-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
    <!--    <section class="specialists section-offset">-->
    <!--        <div class="specialists__container container">-->
    <!--            <h2 class="specialists__title section-title">-->
    <!--                Врачи нашей клиники-->
    <!--            </h2>-->
    <!--            <p class="specialists__descr section-descr">-->
    <!--                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и наркотической зависимостей.-->
    <!--            </p>-->
    <!--            <div class="specialists__wrapper">-->
    <!--                <div class="specialists__slider swiper">-->
    <!--                    <div class="specialists__slider-wrapper swiper-wrapper">-->
    <!--                        <div class="specialists__slide specialist swiper-slide">-->
    <!--                            <picture class="specialist__picture">-->
    <!--                                <img src="/assets/img/sections/specialists/doctor-1.png" alt="" class="specialist__img">-->
    <!--                            </picture>-->
    <!--                            <p class="specialist__name">-->
    <!--                                Некрасов Олег Борисович-->
    <!--                            </p>-->
    <!--                            <p class="specialist__descr">-->
    <!--                                Стаж 39 лет, Врач нарколог-->
    <!--                                высшей категории-->
    <!--                            </p>-->
    <!--                            <button class="specialist__btn btn btn_bg-red-transparent">-->
    <!--                            <span class="btn__text">-->
    <!--                                Обратиться-->
    <!--                            </span>-->
    <!--                            </button>-->
    <!--                        </div>-->
    <!--                        <div class="specialists__slide specialist swiper-slide">-->
    <!--                            <picture class="specialist__picture">-->
    <!--                                <img src="/assets/img/sections/specialists/doctor-2.png" alt="" class="specialist__img">-->
    <!--                            </picture>-->
    <!--                            <p class="specialist__name">-->
    <!--                                Косова Ольга Николаевна-->
    <!--                            </p>-->
    <!--                            <p class="specialist__descr">-->
    <!--                                Стаж 39 лет, Врач нарколог-->
    <!--                                высшей категории Стаж 39 лет, Врач нарколог-->
    <!--                                высшей категории-->
    <!--                            </p>-->
    <!--                            <button class="specialist__btn btn btn_bg-red-transparent">-->
    <!--                            <span class="btn__text">-->
    <!--                                Обратиться-->
    <!--                            </span>-->
    <!--                            </button>-->
    <!--                        </div>-->
    <!--                        <div class="specialists__slide specialist swiper-slide">-->
    <!--                            <picture class="specialist__picture">-->
    <!--                                <img src="/assets/img/sections/specialists/doctor-1.png" alt="" class="specialist__img">-->
    <!--                            </picture>-->
    <!--                            <p class="specialist__name">-->
    <!--                                Некрасов Олег Борисович-->
    <!--                            </p>-->
    <!--                            <p class="specialist__descr">-->
    <!--                                Стаж 39 лет, Врач нарколог-->
    <!--                                высшей категории-->
    <!--                            </p>-->
    <!--                            <button class="specialist__btn btn btn_bg-red-transparent">-->
    <!--                            <span class="btn__text">-->
    <!--                                Обратиться-->
    <!--                            </span>-->
    <!--                            </button>-->
    <!--                        </div>-->
    <!--                        <div class="specialists__slide specialist swiper-slide">-->
    <!--                            <picture class="specialist__picture">-->
    <!--                                <img src="/assets/img/sections/specialists/doctor-2.png" alt="" class="specialist__img">-->
    <!--                            </picture>-->
    <!--                            <p class="specialist__name">-->
    <!--                                Косова Ольга Николаевна-->
    <!--                            </p>-->
    <!--                            <p class="specialist__descr">-->
    <!--                                Стаж 39 лет, Врач нарколог-->
    <!--                                высшей категории-->
    <!--                            </p>-->
    <!--                            <button class="specialist__btn btn btn_bg-red-transparent">-->
    <!--                            <span class="btn__text">-->
    <!--                                Обратиться-->
    <!--                            </span>-->
    <!--                            </button>-->
    <!--                        </div>-->
    <!--                        <div class="specialists__slide specialist swiper-slide">-->
    <!--                            <picture class="specialist__picture">-->
    <!--                                <img src="/assets/img/sections/specialists/doctor-1.png" alt="" class="specialist__img">-->
    <!--                            </picture>-->
    <!--                            <p class="specialist__name">-->
    <!--                                Некрасов Олег Борисович-->
    <!--                            </p>-->
    <!--                            <p class="specialist__descr">-->
    <!--                                Стаж 39 лет, Врач нарколог-->
    <!--                                высшей категории-->
    <!--                            </p>-->
    <!--                            <button class="specialist__btn btn btn_bg-red-transparent">-->
    <!--                            <span class="btn__text">-->
    <!--                                Обратиться-->
    <!--                            </span>-->
    <!--                            </button>-->
    <!--                        </div>-->
    <!--                        <div class="specialists__slide specialist swiper-slide">-->
    <!--                            <picture class="specialist__picture">-->
    <!--                                <img src="/assets/img/sections/specialists/doctor-1.png" alt="" class="specialist__img">-->
    <!--                            </picture>-->
    <!--                            <p class="specialist__name">-->
    <!--                                Некрасов Олег Борисович-->
    <!--                            </p>-->
    <!--                            <p class="specialist__descr">-->
    <!--                                Стаж 39 лет, Врач нарколог-->
    <!--                                высшей категории-->
    <!--                            </p>-->
    <!--                            <button class="specialist__btn btn btn_bg-red-transparent">-->
    <!--                            <span class="btn__text">-->
    <!--                                Обратиться-->
    <!--                            </span>-->
    <!--                            </button>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <button class="specialists__slider-button_prev slider-button slider-button_prev">-->
    <!--                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                        <path d="M15 8H1M1 8L8 15M1 8L8 1" stroke="#63728C" stroke-width="2" stroke-linecap="round"-->
    <!--                              stroke-linejoin="round"/>-->
    <!--                    </svg>-->
    <!--                </button>-->
    <!--                <button class="specialists__slider-button_next slider-button slider-button_next">-->
    <!--                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                        <path d="M1 8H15M15 8L8 15M15 8L8 1" stroke="#63728C" stroke-width="2" stroke-linecap="round"-->
    <!--                              stroke-linejoin="round"/>-->
    <!--                    </svg>-->
    <!--                </button>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
    <!--    <section class="faq section-offset">-->
    <!--        <div class="faq__container container">-->
    <!--            <h2 class="faq__title section-title">-->
    <!--                Ответы на частозадаваемые вопросы-->
    <!--            </h2>-->
    <!--            <ul class="faq__wrapper accor-wrapper" data-accordion-list>-->
    <!--                <li class="faq__accor question accor">-->
    <!--                    <button class="question__title accor-open" data-accordion-button>-->
    <!--                        <span class="question__title-text">-->
    <!--                          Что такое реабилитация 12 шагов-->
    <!--                        </span>-->
    <!--                        <span class="question__title-decor accor-open-decor"></span>-->
    <!--                    </button>-->
    <!--                    <div class="question__info accor-full">-->
    <!--                        <div class="question__info-wrapper accor-full-content" data-accordion-content>-->
    <!--                            <p>-->
    <!--                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится-->
    <!--                                на добровольной основе, с сохранением анонимности и без постановки на учет.-->
    <!--                            </p>-->
    <!--                            <p>-->
    <!--                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится-->
    <!--                                на добровольной основе, с сохранением анонимности и без постановки на учет.-->
    <!--                            </p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="faq__accor question accor">-->
    <!--                    <button class="question__title accor-open" data-accordion-button>-->
    <!--                        <span class="question__title-text">-->
    <!--                          Что такое реабилитация 12 шагов-->
    <!--                        </span>-->
    <!--                        <span class="question__title-decor accor-open-decor"></span>-->
    <!--                    </button>-->
    <!--                    <div class="question__info accor-full">-->
    <!--                        <div class="question__info-wrapper accor-full-content" data-accordion-content>-->
    <!--                            <p>-->
    <!--                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится-->
    <!--                                на добровольной основе, с сохранением анонимности и без постановки на учет.-->
    <!--                            </p>-->
    <!--                            <p>-->
    <!--                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится-->
    <!--                                на добровольной основе, с сохранением анонимности и без постановки на учет.-->
    <!--                            </p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="faq__accor question accor">-->
    <!--                    <button class="question__title accor-open" data-accordion-button>-->
    <!--                        <span class="question__title-text">-->
    <!--                          Что такое реабилитация 12 шагов-->
    <!--                        </span>-->
    <!--                        <span class="question__title-decor accor-open-decor"></span>-->
    <!--                    </button>-->
    <!--                    <div class="question__info accor-full">-->
    <!--                        <div class="question__info-wrapper accor-full-content" data-accordion-content>-->
    <!--                            <p>-->
    <!--                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится-->
    <!--                                на добровольной основе, с сохранением анонимности и без постановки на учет.-->
    <!--                            </p>-->
    <!--                            <p>-->
    <!--                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится-->
    <!--                                на добровольной основе, с сохранением анонимности и без постановки на учет.-->
    <!--                            </p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="faq__accor question accor">-->
    <!--                    <button class="question__title accor-open" data-accordion-button>-->
    <!--                        <span class="question__title-text">-->
    <!--                          Что такое реабилитация 12 шагов-->
    <!--                        </span>-->
    <!--                        <span class="question__title-decor accor-open-decor"></span>-->
    <!--                    </button>-->
    <!--                    <div class="question__info accor-full">-->
    <!--                        <div class="question__info-wrapper accor-full-content" data-accordion-content>-->
    <!--                            <p>-->
    <!--                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится-->
    <!--                                на добровольной основе, с сохранением анонимности и без постановки на учет.-->
    <!--                            </p>-->
    <!--                            <p>-->
    <!--                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится-->
    <!--                                на добровольной основе, с сохранением анонимности и без постановки на учет.-->
    <!--                            </p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="faq__accor question accor">-->
    <!--                    <button class="question__title accor-open" data-accordion-button>-->
    <!--                        <span class="question__title-text">-->
    <!--                          Что такое реабилитация 12 шагов-->
    <!--                        </span>-->
    <!--                        <span class="question__title-decor accor-open-decor"></span>-->
    <!--                    </button>-->
    <!--                    <div class="question__info accor-full">-->
    <!--                        <div class="question__info-wrapper accor-full-content" data-accordion-content>-->
    <!--                            <p>-->
    <!--                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится-->
    <!--                                на добровольной основе, с сохранением анонимности и без постановки на учет.-->
    <!--                            </p>-->
    <!--                            <p>-->
    <!--                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится-->
    <!--                                на добровольной основе, с сохранением анонимности и без постановки на учет.-->
    <!--                            </p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="faq__accor question accor">-->
    <!--                    <button class="question__title accor-open" data-accordion-button>-->
    <!--                        <span class="question__title-text">-->
    <!--                          Что такое реабилитация 12 шагов-->
    <!--                        </span>-->
    <!--                        <span class="question__title-decor accor-open-decor"></span>-->
    <!--                    </button>-->
    <!--                    <div class="question__info accor-full">-->
    <!--                        <div class="question__info-wrapper accor-full-content" data-accordion-content>-->
    <!--                            <p>-->
    <!--                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится-->
    <!--                                на добровольной основе, с сохранением анонимности и без постановки на учет.-->
    <!--                            </p>-->
    <!--                            <p>-->
    <!--                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится-->
    <!--                                на добровольной основе, с сохранением анонимности и без постановки на учет.-->
    <!--                            </p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </section>-->
    <!--    <section class="about-section section-offset">-->
    <!--        <div class="about-section__container container">-->
    <!--            <h2 class="about-section__title section-title">-->
    <!--                Наша наркологическая-->
    <!--                клиника «Свято» в Санкт-Петербурге-->
    <!--            </h2>-->
    <!--            <div class="about-section__wrapper">-->
    <!--                <div class="about-section__content">-->
    <!--                    <div class="about-section__text">-->
    <!--                        <p>-->
    <!--                            Стационарное отделение оснащено всем, что требуется для комфортного пребывания: удобная-->
    <!--                            мебель,-->
    <!--                            чистые помещения, организованный досуг. Реабилитация не причиняет больным неприятных-->
    <!--                            моментов –-->
    <!--                            лечение проходит легко и практически безболезненно. Медицинский персонал отличается-->
    <!--                            тактичностью, относится к пациентам с пониманием. В трудную минуту они мгновенно приходят на-->
    <!--                            помощь, облегчая физические и психологические страдания.-->
    <!--                        </p>-->
    <!--                        <p>-->
    <!--                            Предлагаемые услуги оказываются на основе лицензии, дающей право на оказание врачебной-->
    <!--                            наркологической помощи. Врачи всех специализаций, средний медперсонал имеют допуски для-->
    <!--                            проведения медицинских процедур. Ксерокопии документов пациенты могут потребовать у-->
    <!--                            приехавшего-->
    <!--                            по вызову на дом врача-нарколога.-->
    <!--                        </p>-->
    <!--                        <p>-->
    <!--                            Работа наркологического центра ориентирована на положительный результат. Наркомания –-->
    <!--                            проблема,-->
    <!--                            с которой может столкнуться каждая семья. Мы понимаем, как важна профессиональная помощь в-->
    <!--                            этот-->
    <!--                            непростой период жизни.-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                    <a href="#" class="about-section__btn btn">-->
    <!--                        <span class="btn__text">-->
    <!--                            Подробнее о клинике-->
    <!--                        </span>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--                <div class="about-section__preview">-->
    <!--                    <div class="about-section__img-wrapper">-->
    <!--                        <picture class="about-section__picture">-->
    <!--                            <img src="/assets/img/sections/about-section/preview.png" alt="" class="about-section__img">-->
    <!--                        </picture>-->
    <!--                        <p class="about-section__img-text">-->
    <!--                            Чтобы обратиться-->
    <!--                            к нам позвоните-->
    <!--                            по телефону-->
    <!--                        </p>-->
    <!--                        <a href="tel:88005001160" class="about-section__img-tel">8-800-500-11-60</a>-->
    <!--                    </div>-->
    <!--                    <p class="about-section__preview-text">-->
    <!--                        Наркологическая-->
    <!--                        клиника «Свято» Санкт-Петербург-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
    <!--    <section class="promotions section-offset">-->
    <!--        <div class="promotions__container container">-->
    <!--            <h2 class="promotions__title section-title">-->
    <!--                Акции и спец. предложения-->
    <!--            </h2>-->
    <!--            <div class="promotions__wrapper slider-container">-->
    <!--                <div class="promotions__slider slider3list swiper">-->
    <!--                    <div class="promotions__slider-wrapper swiper-wrapper">-->
    <!--                        <div class="promotions__slide promotion swiper-slide">-->
    <!--                            <picture class="promotion__picture">-->
    <!--                                <img src="/assets/img/sections/promotions/card-1.png" alt="" class="promotion__img">-->
    <!--                            </picture>-->
    <!--                            <div class="promotion__content">-->
    <!--                                <h3 class="promotion__title">-->
    <!--                                    Спецпредложение-->
    <!--                                    скидка 10%-->
    <!--                                </h3>-->
    <!--                                <p class="promotion__descr">-->
    <!--                                    При заказе услуги "Вывод из запоя на дому" через форму заявки на сайте.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="promotions__slide promotion swiper-slide">-->
    <!--                            <picture class="promotion__picture">-->
    <!--                                <img src="/assets/img/sections/promotions/card-2.png" alt="" class="promotion__img">-->
    <!--                            </picture>-->
    <!--                            <div class="promotion__content">-->
    <!--                                <h3 class="promotion__title">-->
    <!--                                    Спецпредложение-->
    <!--                                    скидка 10%-->
    <!--                                </h3>-->
    <!--                                <p class="promotion__descr">-->
    <!--                                    При заказе услуги "Вывод из запоя на дому" через форму заявки на сайте.-->
    <!--                                    При заказе услуги "Вывод из запоя на дому" через форму заявки на сайте.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="promotions__slide promotion swiper-slide">-->
    <!--                            <picture class="promotion__picture">-->
    <!--                                <img src="/assets/img/sections/promotions/card-3.png" alt="" class="promotion__img">-->
    <!--                            </picture>-->
    <!--                            <div class="promotion__content">-->
    <!--                                <h3 class="promotion__title">-->
    <!--                                    Спецпредложение-->
    <!--                                    скидка 10%-->
    <!--                                </h3>-->
    <!--                                <p class="promotion__descr">-->
    <!--                                    При заказе услуги "Вывод из запоя на дому" через форму заявки на сайте.-->
    <!--                                    При заказе услуги.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="promotions__slide promotion swiper-slide">-->
    <!--                            <picture class="promotion__picture">-->
    <!--                                <img src="/assets/img/sections/promotions/card-1.png" alt="" class="promotion__img">-->
    <!--                            </picture>-->
    <!--                            <div class="promotion__content">-->
    <!--                                <h3 class="promotion__title">-->
    <!--                                    Спецпредложение-->
    <!--                                    скидка 10%-->
    <!--                                </h3>-->
    <!--                                <p class="promotion__descr">-->
    <!--                                    При заказе услуги "Вывод из запоя на дому" через форму заявки на сайте.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="promotions__slider-pagination slider-pagination"></div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
    <!--    <section class="advantages section-offset">-->
    <!--        <div class="advantages__container container">-->
    <!--            <h2 class="advantages__title section-title">-->
    <!--                Наши преимущества-->
    <!--            </h2>-->
    <!--            <div class="advantages__cards row">-->
    <!--                <div class="advantages__card advantage col-20">-->
    <!--                    <img src="/assets/img/sections/advantages/speed.svg" alt="" class="advantage__img">-->
    <!--                    <p class="advantage__descr">-->
    <!--                        Приезд бригады в течении 30 минут-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--                <div class="advantages__card advantage col-20">-->
    <!--                    <img src="/assets/img/sections/advantages/incognito.svg" alt="" class="advantage__img">-->
    <!--                    <p class="advantage__descr">-->
    <!--                        Полностью-->
    <!--                        анонимное лечение-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--                <div class="advantages__card advantage col-20">-->
    <!--                    <img src="/assets/img/sections/advantages/qualification.svg" alt="" class="advantage__img">-->
    <!--                    <p class="advantage__descr">-->
    <!--                        Квалифицированные врачи-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--                <div class="advantages__card advantage col-20">-->
    <!--                    <img src="/assets/img/sections/advantages/accounting.svg" alt="" class="advantage__img">-->
    <!--                    <p class="advantage__descr">-->
    <!--                        Не ставим-->
    <!--                        на учет-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--                <div class="advantages__card advantage col-20">-->
    <!--                    <img src="/assets/img/sections/advantages/complexity.svg" alt="" class="advantage__img">-->
    <!--                    <p class="advantage__descr">-->
    <!--                        Беремся за случаи любой сложности-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
    <!--    <section class="reviews section-offset">-->
    <!--        <div class="reviews__container container">-->
    <!--            <div class="reviews__top">-->
    <!--                <h2 class="reviews__title section-title">-->
    <!--                    Отзывы наших пациентов-->
    <!--                </h2>-->
    <!--                <button class="reviews__btn btn">-->
    <!--                    <span class="btn__text">-->
    <!--                        Оставить отзыв-->
    <!--                    </span>-->
    <!--                </button>-->
    <!--            </div>-->
    <!--            <div class="reviews__wrapper">-->
    <!--                <div class="reviews__slider swiper">-->
    <!--                    <div class="reviews__slider-wrapper swiper-wrapper">-->
    <!--                        <div class="reviews__slide review swiper-slide">-->
    <!--                            <img src="/assets/img/sections/reviews/avatar-1.png" alt="" class="review__avatar">-->
    <!--                            <div class="review__content">-->
    <!--                                <p class="review__title">-->
    <!--                                    Аркадий, 23 года-->
    <!--                                </p>-->
    <!--                                <p class="review__text">-->
    <!--                                    Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                    наркотической зависимостей. Лечение в нашей частной наркологической клинике-->
    <!--                                    проводится на добровольной основе, с сохранением анонимности и без постановки на-->
    <!--                                    учет.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="reviews__slide review swiper-slide">-->
    <!--                            <img src="/assets/img/sections/reviews/avatar-2.png" alt="" class="review__avatar">-->
    <!--                            <div class="review__content">-->
    <!--                                <p class="review__title">-->
    <!--                                    Андрей Иванович, 40 лет-->
    <!--                                </p>-->
    <!--                                <p class="review__text">-->
    <!--                                    Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                    наркотической зависимостей. Лечение в нашей частной наркологической клинике-->
    <!--                                    проводится на добровольной основе, с сохранением анонимности и без постановки на-->
    <!--                                    учет. Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                    наркотической зависимостей. Лечение в нашей частной наркологической клинике-->
    <!--                                    проводится на добровольной основе, с сохранением анонимности и без постановки на-->
    <!--                                    учет.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="reviews__slide review swiper-slide">-->
    <!--                            <img src="/assets/img/sections/reviews/avatar-1.png" alt="" class="review__avatar">-->
    <!--                            <div class="review__content">-->
    <!--                                <p class="review__title">-->
    <!--                                    Аркадий, 23 года-->
    <!--                                </p>-->
    <!--                                <p class="review__text">-->
    <!--                                    Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                    наркотической зависимостей. Лечение в нашей частной наркологической клинике-->
    <!--                                    проводится на добровольной основе, с сохранением анонимности и без постановки на-->
    <!--                                    учет.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="reviews__slide review swiper-slide">-->
    <!--                            <img src="/assets/img/sections/reviews/avatar-2.png" alt="" class="review__avatar">-->
    <!--                            <div class="review__content">-->
    <!--                                <p class="review__title">-->
    <!--                                    Андрей Иванович, 40 лет-->
    <!--                                </p>-->
    <!--                                <p class="review__text">-->
    <!--                                    Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                    наркотической зависимостей. Лечение в нашей частной наркологической клинике-->
    <!--                                    проводится на добровольной основе, с сохранением анонимности и без постановки на-->
    <!--                                    учет. Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                    наркотической зависимостей. Лечение в нашей частной наркологической клинике-->
    <!--                                    проводится на добровольной основе, с сохранением анонимности и без постановки на-->
    <!--                                    учет.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="reviews__slider-pagination slider-pagination"></div>-->
    <!--                <button class="reviews__slider-button_prev slider-button slider-button_prev">-->
    <!--                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                        <path d="M15 8H1M1 8L8 15M1 8L8 1" stroke="#63728C" stroke-width="2" stroke-linecap="round"-->
    <!--                              stroke-linejoin="round"/>-->
    <!--                    </svg>-->
    <!--                </button>-->
    <!--                <button class="reviews__slider-button_next slider-button slider-button_next">-->
    <!--                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                        <path d="M1 8H15M15 8L8 15M15 8L8 1" stroke="#63728C" stroke-width="2" stroke-linecap="round"-->
    <!--                              stroke-linejoin="round"/>-->
    <!--                    </svg>-->
    <!--                </button>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
    <!--    <section class="gallery section-offset">-->
    <!--        <div class="gallery__container container">-->
    <!--            <h2 class="gallery__title section-title">-->
    <!--                Фото нашей клиники-->
    <!--            </h2>-->
    <!--            <div class="gallery__wrapper slider-container">-->
    <!--                <div class="gallery__slider slider3list swiper">-->
    <!--                    <div class="gallery__slider-wrapper swiper-wrapper">-->
    <!--                        <div class="gallery__slide swiper-slide">-->
    <!--                            <img src="/assets/img/sections/gallery/1.png" alt="" class="gallery__slide-img">-->
    <!--                        </div>-->
    <!--                        <div class="gallery__slide swiper-slide">-->
    <!--                            <img src="/assets/img/sections/gallery/2.png" alt="" class="gallery__slide-img">-->
    <!--                        </div>-->
    <!--                        <div class="gallery__slide swiper-slide">-->
    <!--                            <img src="/assets/img/sections/gallery/3.png" alt="" class="gallery__slide-img">-->
    <!--                        </div>-->
    <!--                        <div class="gallery__slide swiper-slide">-->
    <!--                            <img src="/assets/img/sections/gallery/1.png" alt="" class="gallery__slide-img">-->
    <!--                        </div>-->
    <!--                        <div class="gallery__slide swiper-slide">-->
    <!--                            <img src="/assets/img/sections/gallery/2.png" alt="" class="gallery__slide-img">-->
    <!--                        </div>-->
    <!--                        <div class="gallery__slide swiper-slide">-->
    <!--                            <img src="/assets/img/sections/gallery/3.png" alt="" class="gallery__slide-img">-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="slider-pagination"></div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
    <!--    <section class="articles section-offset">-->
    <!--        <div class="articles__container container">-->
    <!--            <h2 class="articles__title section-title">-->
    <!--                Наши статьи-->
    <!--            </h2>-->
    <!--            <div class="articles__wrapper slider-container">-->
    <!--                <div class="articles__slider slider3list swiper">-->
    <!--                    <div class="articles__slider-wrapper swiper-wrapper">-->
    <!--                        <div class="articles__slide article-card swiper-slide">-->
    <!--                            <div class="article-card__img-wrapper">-->
    <!--                                <picture class="article-card__picture">-->
    <!--                                    <img src="/assets/img/sections/articles/1.png" alt="" class="article-card__img">-->
    <!--                                </picture>-->
    <!--                                <p class="article-card__date">-->
    <!--                                    12.12.2022-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                            <div class="article-card__content">-->
    <!--                                <p class="article-card__title">-->
    <!--                                    Алкогольный делирий-->
    <!--                                </p>-->
    <!--                                <p class="article-card__descr">-->
    <!--                                    Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                    наркотической.-->
    <!--                                </p>-->
    <!--                                <a href="#" class="article-card__btn btn btn_bg-red-transparent">-->
    <!--                                    <span class="btn__text">Подробнее</span>-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="articles__slide article-card swiper-slide">-->
    <!--                            <div class="article-card__img-wrapper">-->
    <!--                                <picture class="article-card__picture">-->
    <!--                                    <img src="/assets/img/sections/articles/1.png" alt="" class="article-card__img">-->
    <!--                                </picture>-->
    <!--                                <p class="article-card__date">-->
    <!--                                    12.12.2022-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                            <div class="article-card__content">-->
    <!--                                <p class="article-card__title">-->
    <!--                                    Алкогольный делирий-->
    <!--                                </p>-->
    <!--                                <p class="article-card__descr">-->
    <!--                                    Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                    наркотической. Мы проводим амбулаторное и стационарное лечение алкогольной,-->
    <!--                                    лекарственной и-->
    <!--                                    наркотической.-->
    <!--                                </p>-->
    <!--                                <a href="#" class="article-card__btn btn btn_bg-red-transparent">-->
    <!--                                    <span class="btn__text">Подробнее</span>-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="articles__slide article-card swiper-slide">-->
    <!--                            <div class="article-card__img-wrapper">-->
    <!--                                <picture class="article-card__picture">-->
    <!--                                    <img src="/assets/img/sections/articles/1.png" alt="" class="article-card__img">-->
    <!--                                </picture>-->
    <!--                                <p class="article-card__date">-->
    <!--                                    12.12.2022-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                            <div class="article-card__content">-->
    <!--                                <p class="article-card__title">-->
    <!--                                    Алкогольный делирий-->
    <!--                                </p>-->
    <!--                                <p class="article-card__descr">-->
    <!--                                    Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                    наркотической.-->
    <!--                                </p>-->
    <!--                                <a href="#" class="article-card__btn btn btn_bg-red-transparent">-->
    <!--                                    <span class="btn__text">Подробнее</span>-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="articles__slide article-card swiper-slide">-->
    <!--                            <div class="article-card__img-wrapper">-->
    <!--                                <picture class="article-card__picture">-->
    <!--                                    <img src="/assets/img/sections/articles/1.png" alt="" class="article-card__img">-->
    <!--                                </picture>-->
    <!--                                <p class="article-card__date">-->
    <!--                                    12.12.2022-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                            <div class="article-card__content">-->
    <!--                                <p class="article-card__title">-->
    <!--                                    Алкогольный делирий-->
    <!--                                </p>-->
    <!--                                <p class="article-card__descr">-->
    <!--                                    Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и-->
    <!--                                    наркотической.-->
    <!--                                </p>-->
    <!--                                <a href="#" class="article-card__btn btn btn_bg-red-transparent">-->
    <!--                                    <span class="btn__text">Подробнее</span>-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="slider-pagination"></div>-->
    <!--                <button class="slider-button slider-button_prev">-->
    <!--                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                        <path d="M15 8H1M1 8L8 15M1 8L8 1" stroke="#63728C" stroke-width="2" stroke-linecap="round"-->
    <!--                              stroke-linejoin="round"/>-->
    <!--                    </svg>-->
    <!--                </button>-->
    <!--                <button class="slider-button slider-button_next">-->
    <!--                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                        <path d="M1 8H15M15 8L8 15M15 8L8 1" stroke="#63728C" stroke-width="2" stroke-linecap="round"-->
    <!--                              stroke-linejoin="round"/>-->
    <!--                    </svg>-->
    <!--                </button>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
    <!--    <section class="documents section-offset">-->
    <!--        <div class="documents__container container">-->
    <!--            <h2 class="documents__title section-title">-->
    <!--                Наши лицензии-->
    <!--            </h2>-->
    <!--            <div class="documents__wrapper">-->
    <!--                <div class="documents__slider swiper">-->
    <!--                    <div class="documents__slider-wrapper swiper-wrapper">-->
    <!--                        <picture class="documents__slide document swiper-slide">-->
    <!--                            <img src="/assets/img/sections/documents/1.png" alt="" class="document__img">-->
    <!--                        </picture>-->
    <!--                        <picture class="documents__slide document swiper-slide">-->
    <!--                            <img src="/assets/img/sections/documents/2.png" alt="" class="document__img">-->
    <!--                        </picture>-->
    <!--                        <picture class="documents__slide document swiper-slide">-->
    <!--                            <img src="/assets/img/sections/documents/3.png" alt="" class="document__img">-->
    <!--                        </picture>-->
    <!--                        <picture class="documents__slide document swiper-slide">-->
    <!--                            <img src="/assets/img/sections/documents/4.png" alt="" class="document__img">-->
    <!--                        </picture>-->
    <!--                        <picture class="documents__slide document swiper-slide">-->
    <!--                            <img src="/assets/img/sections/documents/1.png" alt="" class="document__img">-->
    <!--                        </picture>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="documents__slider-pagination slider-pagination"></div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
    <!--    <section class="centers">-->
    <!--        <div class="centers__container container">-->
    <!--            <h2 class="centers__title section-title">-->
    <!--                Наши реабилитационные центры-->
    <!--            </h2>-->
    <!--            <div class="centers__wrapper slider-container">-->
    <!--                <div class="centers__slider slider3list swiper">-->
    <!--                    <div class="centers__slider-wrapper swiper-wrapper">-->
    <!--                        <div class="centers__slide center swiper-slide">-->
    <!--                            <picture class="center__picture">-->
    <!--                                <img src="/assets/img/sections/centers/1.png" alt="" class="center__img">-->
    <!--                            </picture>-->
    <!--                            <div class="center__content">-->
    <!--                                <p class="center__title">90 000 руб./мес</p>-->
    <!--                                <p class="center__city">Москва</p>-->
    <!--                                <p class="center__address">ул. Зеленая, д. 10</p>-->
    <!--                                <button class="center__btn btn">-->
    <!--                                    <span class="btn__text">Записаться на прием </span>-->
    <!--                                </button>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="centers__slide center swiper-slide">-->
    <!--                            <picture class="center__picture">-->
    <!--                                <img src="/assets/img/sections/centers/2.png" alt="" class="center__img">-->
    <!--                            </picture>-->
    <!--                            <div class="center__content">-->
    <!--                                <p class="center__title">90 000 руб./мес</p>-->
    <!--                                <p class="center__city">Москва</p>-->
    <!--                                <p class="center__address">ул. Зеленая, д. 10 ул. Зеленая, д. 10 ул. Зеленая, д. 10 ул.-->
    <!--                                    Зеленая, д. 10 ул. Зеленая, д. 10 ул. Зеленая, д. 10</p>-->
    <!--                                <button class="center__btn btn">-->
    <!--                                    <span class="btn__text">Записаться на прием </span>-->
    <!--                                </button>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="centers__slide center swiper-slide">-->
    <!--                            <picture class="center__picture">-->
    <!--                                <img src="/assets/img/sections/centers/3.png" alt="" class="center__img">-->
    <!--                            </picture>-->
    <!--                            <div class="center__content">-->
    <!--                                <p class="center__title">90 000 руб./мес</p>-->
    <!--                                <p class="center__city">Москва</p>-->
    <!--                                <p class="center__address">ул. Зеленая, д. 10</p>-->
    <!--                                <button class="center__btn btn">-->
    <!--                                    <span class="btn__text">Записаться на прием </span>-->
    <!--                                </button>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="centers__slide center swiper-slide">-->
    <!--                            <picture class="center__picture">-->
    <!--                                <img src="/assets/img/sections/centers/1.png" alt="" class="center__img">-->
    <!--                            </picture>-->
    <!--                            <div class="center__content">-->
    <!--                                <p class="center__title">90 000 руб./мес</p>-->
    <!--                                <p class="center__city">Москва</p>-->
    <!--                                <p class="center__address">ул. Зеленая, д. 10</p>-->
    <!--                                <button class="center__btn btn">-->
    <!--                                    <span class="btn__text">Записаться на прием </span>-->
    <!--                                </button>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <button class="slider-button slider-button_prev">-->
    <!--                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                        <path d="M15 8H1M1 8L8 15M1 8L8 1" stroke="#63728C" stroke-width="2" stroke-linecap="round"-->
    <!--                              stroke-linejoin="round"/>-->
    <!--                    </svg>-->
    <!--                </button>-->
    <!--                <button class="slider-button slider-button_next">-->
    <!--                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                        <path d="M1 8H15M15 8L8 15M15 8L8 1" stroke="#63728C" stroke-width="2" stroke-linecap="round"-->
    <!--                              stroke-linejoin="round"/>-->
    <!--                    </svg>-->
    <!--                </button>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
    <!--    <div class="map-section">-->
    <!--        <div id="map" style="width: 100%; height: 600px"></div>-->
    <!--        <div class="map__container container">-->
    <!--            <div class="map__contacts">-->
    <!--                <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                    <rect opacity="0.15" width="72" height="72" rx="24" fill="#EB5553"/>-->
    <!--                    <path d="M52 26.25C52 24.4625 50.56 23 48.8 23H23.2C21.44 23 20 24.4625 20 26.25M52 26.25V45.75C52 47.5375 50.56 49 48.8 49H23.2C21.44 49 20 47.5375 20 45.75V26.25M52 26.25L36 37.625L20 26.25"-->
    <!--                          stroke="#EB5553" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
    <!--                </svg>-->
    <!--                <p class="map__contacts-title">-->
    <!--                    Как нас найти-->
    <!--                </p>-->
    <!--                <p class="map__contacts-descr">-->
    <!--                    Не откладывайте свой визит!-->
    <!--                    Свяжитесь с нами — и мы вам поможем!-->
    <!--                </p>-->
    <!--                <ul class="map__contacts-list">-->
    <!--                    <li class="map__contacts-item">-->
    <!--                        <a href="tel:88005001160" class="map__contacts-link">-->
    <!--                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"-->
    <!--                                 xmlns="http://www.w3.org/2000/svg">-->
    <!--                                <path d="M13.388 4.82261C14.3232 5.00472 15.1827 5.46123 15.8565 6.1337C16.5302 6.80617 16.9876 7.66402 17.1701 8.59743M13.388 1C15.331 1.21544 17.1429 2.08388 18.5261 3.46272C19.9093 4.84157 20.7817 6.64887 21 8.58788M20.0425 16.214V19.0809C20.0436 19.3471 19.989 19.6105 19.8821 19.8544C19.7753 20.0983 19.6186 20.3172 19.4221 20.4971C19.2256 20.677 18.9937 20.814 18.7411 20.8993C18.4885 20.9845 18.2208 21.0162 17.9552 20.9922C15.0089 20.6727 12.1787 19.6678 9.69214 18.0584C7.37869 16.5911 5.4173 14.6335 3.94724 12.3245C2.32908 9.83138 1.32206 6.99289 1.00777 4.03897C0.983845 3.7747 1.01531 3.50836 1.10017 3.25689C1.18503 3.00543 1.32141 2.77435 1.50065 2.57838C1.67989 2.3824 1.89804 2.22582 2.14123 2.11861C2.38442 2.0114 2.64731 1.9559 2.91316 1.95565H5.78561C6.25028 1.95109 6.70076 2.11532 7.05309 2.41774C7.40541 2.72016 7.63554 3.14013 7.70057 3.59937C7.82181 4.51686 8.04665 5.41772 8.37081 6.28476C8.49963 6.62681 8.52751 6.99855 8.45115 7.35593C8.37478 7.71331 8.19737 8.04135 7.93994 8.30118L6.72394 9.51486C8.08697 11.9074 10.0717 13.8883 12.4688 15.2488L13.6848 14.0351C13.9452 13.7782 14.2738 13.6011 14.6319 13.5249C14.99 13.4486 15.3624 13.4765 15.7051 13.6051C16.5738 13.9286 17.4764 14.153 18.3956 14.274C18.8608 14.3395 19.2855 14.5733 19.5892 14.931C19.8928 15.2887 20.0542 15.7453 20.0425 16.214Z"-->
    <!--                                      stroke="#EB5553" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
    <!--                            </svg>-->
    <!--                            <span class="map__contacts-link-text">8 (800) 500-11-60</span>-->
    <!--                        </a>-->
    <!--                    </li>-->
    <!--                    <li class="map__contacts-item">-->
    <!--                        <a href="#" class="map__contacts-link">-->
    <!--                            <svg width="22" height="18" viewBox="0 0 22 18" fill="none"-->
    <!--                                 xmlns="http://www.w3.org/2000/svg">-->
    <!--                                <path d="M18.1171 17L21 1L1 8.82418L9.1982 11.8132L14.5135 6.8022L10.2793 12.2527L18.1171 17Z"-->
    <!--                                      stroke="#EB5553" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
    <!--                            </svg>-->
    <!--                            <span class="map__contacts-link-text">@svyato_spb</span>-->
    <!--                        </a>-->
    <!--                    </li>-->
    <!--                    <li class="map__contacts-item">-->
    <!--                        <a href="mailto:info@svyato-klinik.ru" class="map__contacts-link">-->
    <!--                            <svg width="22" height="18" viewBox="0 0 22 18" fill="none"-->
    <!--                                 xmlns="http://www.w3.org/2000/svg">-->
    <!--                                <path d="M21 3C21 1.9 20.1 1 19 1H3C1.9 1 1 1.9 1 3M21 3V15C21 16.1 20.1 17 19 17H3C1.9 17 1 16.1 1 15V3M21 3L11 10L1 3"-->
    <!--                                      stroke="#EB5553" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
    <!--                            </svg>-->
    <!--                            <span class="map__contacts-link-text">info@svyato-klinik.ru</span>-->
    <!--                        </a>-->
    <!--                    </li>-->
    <!--                </ul>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <section class="consultation consultation_reverse">-->
    <!--        <div class="consultation__container container">-->
    <!--            <div class="consultation__decor"></div>-->
    <!--            <picture class="consultation__picture">-->
    <!--                <img src="/assets/img/sections/consultation/person.png" alt="" class="consultation__img">-->
    <!--            </picture>-->
    <!--            <div class="consultation__content">-->
    <!--                <h2 class="consultation__title">-->
    <!--                    Получите бесплатную консультацию врача прямо сейчас! Оставьте заявку-->
    <!--                </h2>-->
    <!--                <form action="" class="consultation__form form-consultation">-->
    <!--                    <label class="form-consultation__label">-->
    <!--                        <input placeholder="Ваше имя" type="text" class="form-consultation__input">-->
    <!--                    </label>-->
    <!--                    <label class="form-consultation__label">-->
    <!--                        <input placeholder="Номер телефона" type="tel" class="form-consultation__input">-->
    <!--                    </label>-->
    <!--                    <button class="form-consultation-btn btn">-->
    <!--                    <span class="btn__text">-->
    <!--                        Оставить заявку-->
    <!--                    </span>-->
    <!--                    </button>-->
    <!--                </form>-->
    <!--                <a href="tel:88005001160" class="consultation__link">-->
    <!--                    Или позвоните: 8-800-500-11-60-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
</main>
<!--<footer class="footer">-->
<!--    <div class="footer__top">-->
<!--        <div class="footer__top-container container">-->
<!--            <div class="footer__top-wrapper">-->
<!--                <div class="footer__block">-->
<!--                    <a href="/" class="footer__logo logo">-->
<!--                        <picture class="logo__picture">-->
<!--                            <img src="/assets/img/logo.svg" alt="" class="logo__img">-->
<!--                        </picture>-->
<!--                    </a>-->
<!--                    <ul class="footer__list footer__list_margin">-->
<!--                        <li class="footer__list-item">-->
<!--                            <a href="#" class="footer__list-link">-->
<!--                                Политика конфиденциальности-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="footer__list-item">-->
<!--                            <a href="#" class="footer__list-link">-->
<!--                                Пользовательское соглашение-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="footer__block">-->
<!--                    <p class="footer__block-title">-->
<!--                        Услуги-->
<!--                    </p>-->
<!--                    <ul class="footer__list">-->
<!--                        <li class="footer__list-item">-->
<!--                            <a href="#" class="footer__list-link">-->
<!--                                Вывод из запоя-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="footer__list-item">-->
<!--                            <a href="#" class="footer__list-link">-->
<!--                                Лечение алкоголизма-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="footer__list-item">-->
<!--                            <a href="#" class="footer__list-link">-->
<!--                                Лечение наркомании-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="footer__list-item">-->
<!--                            <a href="#" class="footer__list-link">-->
<!--                                Кодирование от алкоголизма-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="footer__list-item">-->
<!--                            <a href="#" class="footer__list-link">-->
<!--                                Наркологическая помощь-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="footer__list-item">-->
<!--                            <a href="#" class="footer__list-link">-->
<!--                                Реабилитационный центр-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="footer__block">-->
<!--                    <p class="footer__block-title">-->
<!--                        О клинике-->
<!--                    </p>-->
<!--                    <ul class="footer__list footer__list_col-2">-->
<!--                        <li class="footer__list-item">-->
<!--                            <a href="#" class="footer__list-link">-->
<!--                                Цены-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="footer__list-item">-->
<!--                            <a href="#" class="footer__list-link">-->
<!--                                Отзывы-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="footer__list-item">-->
<!--                            <a href="#" class="footer__list-link">-->
<!--                                Акции и скидки-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="footer__list-item">-->
<!--                            <a href="#" class="footer__list-link">-->
<!--                                Вопрос-ответ-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="footer__list-item">-->
<!--                            <a href="#" class="footer__list-link">-->
<!--                                Фотографии-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="footer__list-item">-->
<!--                            <a href="#" class="footer__list-link">-->
<!--                                Врачи-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="footer__list-item">-->
<!--                            <a href="#" class="footer__list-link">-->
<!--                                Лицензии-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="footer__list-item">-->
<!--                            <a href="#" class="footer__list-link">-->
<!--                                Карта сайта-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="footer__block">-->
<!--                    <ul class="footer__contacts">-->
<!--                        <li class="footer__contacts-item">-->
<!--                            <a href="" class="footer__contacts-link">-->
<!--                                <svg width="22" height="26" viewBox="0 0 22 26" fill="none"-->
<!--                                     xmlns="http://www.w3.org/2000/svg">-->
<!--                                    <path d="M21 10.8182C21 18.4545 11 25 11 25C11 25 1 18.4545 1 10.8182C1 8.21424 2.05357 5.71695 3.92893 3.87568C5.8043 2.03441 8.34784 1 11 1C13.6522 1 16.1957 2.03441 18.0711 3.87568C19.9464 5.71695 21 8.21424 21 10.8182Z"-->
<!--                                          stroke="#EB5553" stroke-width="2" stroke-linecap="round"-->
<!--                                          stroke-linejoin="round"/>-->
<!--                                    <path d="M11 14.0909C12.8409 14.0909 14.3333 12.6257 14.3333 10.8182C14.3333 9.0107 12.8409 7.54545 11 7.54545C9.15905 7.54545 7.66667 9.0107 7.66667 10.8182C7.66667 12.6257 9.15905 14.0909 11 14.0909Z"-->
<!--                                          stroke="#EB5553" stroke-width="2" stroke-linecap="round"-->
<!--                                          stroke-linejoin="round"/>-->
<!--                                </svg>-->
<!--                                <span class="footer__contacts-text">-->
<!--                                г. Санкт-Питербург-->
<!--                                ул. Пушкина 45/6-->
<!--                            </span>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="footer__contacts-item">-->
<!--                            <a href="tel:88005001160" class="footer__contacts-link">-->
<!--                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"-->
<!--                                     xmlns="http://www.w3.org/2000/svg">-->
<!--                                    <path d="M15.8656 5.58713C16.9879 5.80567 18.0192 6.35348 18.8278 7.16044C19.6363 7.96741 20.1851 8.99682 20.4041 10.1169M15.8656 1C18.1972 1.25853 20.3714 2.30065 22.0313 3.95527C23.6912 5.60988 24.738 7.77864 25 10.1055M23.851 19.2568V22.6971C23.8523 23.0165 23.7868 23.3326 23.6586 23.6253C23.5304 23.9179 23.3424 24.1806 23.1066 24.3965C22.8708 24.6124 22.5924 24.7768 22.2893 24.8791C21.9861 24.9814 21.6649 25.0194 21.3462 24.9907C17.8106 24.6073 14.4145 23.4014 11.4306 21.4701C8.65443 19.7094 6.30076 17.3602 4.53669 14.5894C2.59489 11.5977 1.38647 8.19147 1.00933 4.64677C0.980614 4.32965 1.01837 4.01003 1.1202 3.70827C1.22203 3.40651 1.3857 3.12922 1.60078 2.89405C1.81586 2.65888 2.07765 2.47099 2.36948 2.34233C2.6613 2.21368 2.97677 2.14708 3.29579 2.14678H6.74273C7.30034 2.1413 7.84091 2.33839 8.2637 2.70129C8.68649 3.06419 8.96264 3.56816 9.04069 4.11925C9.18617 5.22024 9.45598 6.30126 9.84497 7.34171C9.99956 7.75217 10.033 8.19826 9.94138 8.62711C9.84974 9.05597 9.63685 9.44962 9.32793 9.76142L7.86873 11.2178C9.50436 14.0889 11.8861 16.466 14.7626 18.0985L16.2218 16.6421C16.5342 16.3338 16.9286 16.1213 17.3583 16.0298C17.788 15.9384 18.2349 15.9718 18.6461 16.1261C19.6886 16.5143 20.7717 16.7836 21.8748 16.9288C22.4329 17.0074 22.9426 17.288 23.307 17.7172C23.6714 18.1464 23.865 18.6944 23.851 19.2568Z"-->
<!--                                          stroke="#EB5553" stroke-width="2" stroke-linecap="round"-->
<!--                                          stroke-linejoin="round"/>-->
<!--                                </svg>-->
<!--                                <span class="footer__contacts-text footer__contacts-text_size">-->
<!--                                8 (800) 500-11-60-->
<!--                            </span>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="footer__contacts-item">-->
<!--                            <a href="tel:89066561212" class="footer__contacts-link">-->
<!--                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"-->
<!--                                     xmlns="http://www.w3.org/2000/svg">-->
<!--                                    <path d="M15.8656 5.58713C16.9879 5.80567 18.0192 6.35348 18.8278 7.16044C19.6363 7.96741 20.1851 8.99682 20.4041 10.1169M15.8656 1C18.1972 1.25853 20.3714 2.30065 22.0313 3.95527C23.6912 5.60988 24.738 7.77864 25 10.1055M23.851 19.2568V22.6971C23.8523 23.0165 23.7868 23.3326 23.6586 23.6253C23.5304 23.9179 23.3424 24.1806 23.1066 24.3965C22.8708 24.6124 22.5924 24.7768 22.2893 24.8791C21.9861 24.9814 21.6649 25.0194 21.3462 24.9907C17.8106 24.6073 14.4145 23.4014 11.4306 21.4701C8.65443 19.7094 6.30076 17.3602 4.53669 14.5894C2.59489 11.5977 1.38647 8.19147 1.00933 4.64677C0.980614 4.32965 1.01837 4.01003 1.1202 3.70827C1.22203 3.40651 1.3857 3.12922 1.60078 2.89405C1.81586 2.65888 2.07765 2.47099 2.36948 2.34233C2.6613 2.21368 2.97677 2.14708 3.29579 2.14678H6.74273C7.30034 2.1413 7.84091 2.33839 8.2637 2.70129C8.68649 3.06419 8.96264 3.56816 9.04069 4.11925C9.18617 5.22024 9.45598 6.30126 9.84497 7.34171C9.99956 7.75217 10.033 8.19826 9.94138 8.62711C9.84974 9.05597 9.63685 9.44962 9.32793 9.76142L7.86873 11.2178C9.50436 14.0889 11.8861 16.466 14.7626 18.0985L16.2218 16.6421C16.5342 16.3338 16.9286 16.1213 17.3583 16.0298C17.788 15.9384 18.2349 15.9718 18.6461 16.1261C19.6886 16.5143 20.7717 16.7836 21.8748 16.9288C22.4329 17.0074 22.9426 17.288 23.307 17.7172C23.6714 18.1464 23.865 18.6944 23.851 19.2568Z"-->
<!--                                          stroke="#EB5553" stroke-width="2" stroke-linecap="round"-->
<!--                                          stroke-linejoin="round"/>-->
<!--                                </svg>-->
<!--                                <span class="footer__contacts-text footer__contacts-text_size">-->
<!--                                +7 (906) 656-12-12-->
<!--                            </span>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="footer__contacts-item">-->
<!--                            <a href="#" class="footer__contacts-link">-->
<!--                                <svg width="22" height="18" viewBox="0 0 22 18" fill="none"-->
<!--                                     xmlns="http://www.w3.org/2000/svg">-->
<!--                                    <path d="M18.1171 17L21 1L1 8.82418L9.1982 11.8132L14.5135 6.8022L10.2793 12.2527L18.1171 17Z"-->
<!--                                          stroke="#EB5553" stroke-width="2" stroke-linecap="round"-->
<!--                                          stroke-linejoin="round"/>-->
<!--                                </svg>-->
<!--                                <span class="footer__contacts-text footer__contacts-text">-->
<!--                                info@svyato-klinik.ru-->
<!--                            </span>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="footer__top-info">-->
<!--                <form action="" class="footer__search search">-->
<!--                    <label class="search__label">-->
<!--                        <input placeholder="Поиск по сайту" type="text" class="search__input">-->
<!--                    </label>-->
<!--                    <button type="submit" class="search__btn">-->
<!--                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                            <path d="M17 17L13.1333 13.1333M15.2222 8.11111C15.2222 12.0385 12.0385 15.2222 8.11111 15.2222C4.18375 15.2222 1 12.0385 1 8.11111C1 4.18375 4.18375 1 8.11111 1C12.0385 1 15.2222 4.18375 15.2222 8.11111Z"-->
<!--                                  stroke="#63728C" stroke-width="2" stroke-linecap="round"-->
<!--                                  stroke-linejoin="round"></path>-->
<!--                        </svg>-->
<!--                    </button>-->
<!--                </form>-->
<!--                <div class="footer__payments">-->
<!--                    <p class="footer__payments-title footer__block-title">-->
<!--                        Способы оплаты:-->
<!--                    </p>-->
<!--                    <div class="footer__payments-cards">-->
<!--                        <div class="footer__payments-card">-->
<!--                            <svg width="56" height="18" viewBox="0 0 56 18" fill="none"-->
<!--                                 xmlns="http://www.w3.org/2000/svg">-->
<!--                                <path d="M24.2668 17.5436H19.7305L22.5677 0.506348H27.1039L24.2668 17.5436Z"-->
<!--                                      fill="#63728C"/>-->
<!--                                <path d="M40.7096 0.925539C39.8148 0.580815 38.3956 0.200195 36.6408 0.200195C32.1609 0.200195 29.0064 2.52004 28.987 5.83672C28.9497 8.28376 31.2456 9.64292 32.9627 10.4588C34.7177 11.2926 35.3144 11.8368 35.3144 12.5799C35.2964 13.7213 33.8961 14.2474 32.59 14.2474C30.779 14.2474 29.8086 13.9762 28.3337 13.3412L27.7364 13.069L27.1016 16.8935C28.1656 17.3642 30.1259 17.782 32.1609 17.8002C36.9209 17.8002 40.0196 15.5162 40.0564 11.9818C40.0745 10.0423 38.8622 8.55623 36.2486 7.34186C34.6619 6.56231 33.6904 6.03668 33.6904 5.23906C33.7089 4.51396 34.5121 3.77127 36.3032 3.77127C37.7779 3.73488 38.8616 4.07914 39.6824 4.42362L40.0926 4.60453L40.7096 0.925539Z"-->
<!--                                      fill="#63728C"/>-->
<!--                                <path d="M46.7412 11.5079C47.1148 10.5291 48.5523 6.74103 48.5523 6.74103C48.5334 6.77739 48.9251 5.74419 49.1492 5.10991L49.4662 6.57794C49.4662 6.57794 50.3252 10.6561 50.5118 11.5079C49.8028 11.5079 47.6372 11.5079 46.7412 11.5079ZM52.3407 0.506348H48.8319C47.7499 0.506348 46.9278 0.814215 46.4609 1.91994L39.7227 17.5433H44.4825C44.4825 17.5433 45.2662 15.4406 45.4347 14.9877C45.9567 14.9877 50.5871 14.9877 51.259 14.9877C51.3892 15.5858 51.8003 17.5433 51.8003 17.5433H56.0004L52.3407 0.506348Z"-->
<!--                                      fill="#63728C"/>-->
<!--                                <path d="M15.9421 0.506348L11.4995 12.1241L11.014 9.76791C10.1927 7.04914 7.61678 4.09525 4.74219 2.6265L8.81147 17.5255H13.6086L20.739 0.506348H15.9421Z"-->
<!--                                      fill="#63728C"/>-->
<!--                                <path d="M7.37328 0.506348H0.0746677L0 0.850591C5.69338 2.26442 9.46398 5.6724 11.0132 9.76864L9.42653 1.93848C9.16531 0.850351 8.36258 0.542242 7.37328 0.506348Z"-->
<!--                                      fill="#63728C"/>-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                        <div class="footer__payments-card">-->
<!--                            <svg width="53" height="32" viewBox="0 0 53 32" fill="none"-->
<!--                                 xmlns="http://www.w3.org/2000/svg">-->
<!--                                <g clip-path="url(#clip0_14_645)">-->
<!--                                    <path d="M33.3429 28.1373H19.2305V3.36963H33.3429V28.1373Z" fill="#8F9AAE"/>-->
<!--                                    <path d="M20.1347 15.7541C20.1347 10.7299 22.5436 6.25446 26.2948 3.3703C23.5516 1.26126 20.0896 0.00244141 16.3271 0.00244141C7.41968 0.00244141 0.199219 7.05462 0.199219 15.7541C0.199219 24.4538 7.41968 31.506 16.3271 31.506C20.0896 31.506 23.5516 30.2471 26.2948 28.1381C22.5436 25.2539 20.1347 20.7784 20.1347 15.7541Z"-->
<!--                                          fill="#63728C"/>-->
<!--                                    <path d="M52.3779 15.7541C52.3779 24.4538 45.1574 31.506 36.25 31.506C32.4875 31.506 29.0253 30.2471 26.2812 28.1381C30.0335 25.2539 32.4424 20.7784 32.4424 15.7541C32.4424 10.7299 30.0335 6.25446 26.2812 3.3703C29.0253 1.26126 32.4875 0.00244141 36.25 0.00244141C45.1574 0.00244141 52.3779 7.05462 52.3779 15.7541Z"-->
<!--                                          fill="#E0E3E8"/>-->
<!--                                </g>-->
<!--                                <defs>-->
<!--                                    <clipPath id="clip0_14_645">-->
<!--                                        <rect width="52.8" height="32" fill="white" transform="translate(0.199219)"/>-->
<!--                                    </clipPath>-->
<!--                                </defs>-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                        <div class="footer__payments-card">-->
<!--                            <svg width="61" height="16" viewBox="0 0 61 16" fill="none"-->
<!--                                 xmlns="http://www.w3.org/2000/svg">-->
<!--                                <g clip-path="url(#clip0_14_649)">-->
<!--                                    <path fill-rule="evenodd" clip-rule="evenodd"-->
<!--                                          d="M44.0547 7.229V16.0006H49.2961V10.8026H55.2362C57.7363 10.7853 59.8601 9.30052 60.6609 7.229H44.0547Z"-->
<!--                                          fill="#8F9AAE"/>-->
<!--                                    <path fill-rule="evenodd" clip-rule="evenodd"-->
<!--                                          d="M43.3516 0C43.6569 3.58533 47.3052 6.41624 51.7608 6.41624C51.7754 6.41624 60.8744 6.41624 60.8744 6.41624C60.9417 6.08743 60.9769 5.74804 60.9769 5.40101C60.9769 2.43101 58.3996 0.0219715 55.2115 0.000149436L43.3516 0Z"-->
<!--                                          fill="#63728C"/>-->
<!--                                    <path fill-rule="evenodd" clip-rule="evenodd"-->
<!--                                          d="M35.5975 6.33092L35.6017 6.32275L35.6021 6.32287C35.6558 6.23323 35.7589 6.17259 35.877 6.17259C36.0479 6.17259 36.1868 6.29911 36.1915 6.45683L36.1916 6.45685V15.9188H41.433V0H36.1916C35.5269 0.0205687 34.776 0.474037 34.4967 1.03068L30.3257 9.34717C30.3153 9.38117 30.2992 9.41291 30.2784 9.4414L30.2769 9.44417L30.2765 9.44401C30.2134 9.52847 30.1083 9.58376 29.9893 9.58376C29.7963 9.58376 29.6398 9.43831 29.6398 9.25888V0H24.3984V15.9188H29.6398V15.9169C30.2972 15.8851 31.0306 15.4367 31.3058 14.8881L35.5868 6.35237C35.5901 6.34507 35.5936 6.33792 35.5975 6.33092Z"-->
<!--                                          fill="#8F9AAE"/>-->
<!--                                    <path fill-rule="evenodd" clip-rule="evenodd"-->
<!--                                          d="M16.0242 6.60304L12.9607 15.9188H9.19021L6.125 6.59739C6.09544 6.44812 5.95475 6.33503 5.78565 6.33503C5.59509 6.33503 5.4406 6.47865 5.4406 6.65584C5.4406 6.65719 5.44061 6.65855 5.44063 6.65989L5.4406 15.9188H0.199219V0H4.69807H6.03791C7.00235 0 8.013 0.695863 8.29483 1.55292L10.8457 9.31011C10.9726 9.69607 11.1785 9.69565 11.3053 9.31011L13.8561 1.55292C14.1382 0.695264 15.1485 0 16.113 0H17.4525H21.951V15.9188H16.7096V6.65989C16.7096 6.65855 16.7096 6.65719 16.7096 6.65584C16.7096 6.47865 16.5551 6.33503 16.3645 6.33503C16.1932 6.33503 16.0512 6.45097 16.0242 6.60304Z"-->
<!--                                          fill="#8F9AAE"/>-->
<!--                                </g>-->
<!--                                <defs>-->
<!--                                    <clipPath id="clip0_14_649">-->
<!--                                        <rect width="60.8" height="16" fill="white" transform="translate(0.199219)"/>-->
<!--                                    </clipPath>-->
<!--                                </defs>-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <ul class="footer__socials">-->
<!--                        <li class="footer__socials-item">-->
<!--                            <a href="" class="footer__socials-link">-->
<!--                                <svg width="20" height="12" viewBox="0 0 20 12" fill="none"-->
<!--                                     xmlns="http://www.w3.org/2000/svg">-->
<!--                                    <path d="M12.1106 5.77219C11.7449 5.63034 11.7449 5.08859 11.7222 4.71133C11.6308 3.36753 12.0879 1.31598 11.5394 0.443753C11.151 -0.0753584 9.27636 -0.0278235 8.13388 0.0431016C7.81352 0.0906365 7.42513 0.160808 7.15085 0.302658C6.87657 0.444508 6.60229 0.679919 6.60229 0.89194C6.60229 1.19828 7.28836 1.1515 7.53923 1.55215C7.81352 1.97694 7.81352 2.89595 7.81352 3.65047C7.81352 4.5227 7.67601 5.67863 7.33371 5.72541C6.80782 5.7488 6.51086 5.2063 6.23658 4.80565C5.68801 4.02774 5.13945 3.06044 4.72766 2.11728C4.52213 1.62232 4.4073 1.07982 4.11034 0.867795C3.6532 0.537314 2.83036 0.513924 2.03018 0.537314C1.29876 0.560705 0.246983 0.466389 0.0414545 0.914576C-0.118726 1.40954 0.224309 1.88112 0.407164 2.28253C1.34411 4.38085 2.34981 6.22038 3.58445 7.96483C4.72766 9.59159 5.80138 10.8886 7.90421 11.5722C8.49886 11.7608 11.1042 12.3033 11.6301 11.5722C11.8129 11.2893 11.7676 10.6524 11.859 10.1809C11.9504 9.70929 12.0645 9.23771 12.499 9.21432C12.8647 9.19093 13.0702 9.52066 13.2992 9.75683C13.5508 10.0164 13.7563 10.2284 13.9392 10.4646C14.3736 10.9128 14.8308 11.5254 15.3793 11.7616C16.1334 12.0921 17.2993 11.9978 18.3964 11.9502C19.288 11.9268 19.928 11.7382 19.9968 11.1957C20.0429 10.7709 19.585 10.1582 19.3107 9.80436C18.6246 8.93213 18.305 8.67258 17.5275 7.87052C17.1845 7.51665 16.75 7.13939 16.75 6.71535C16.7273 6.45579 16.9329 6.22038 17.1157 5.96082C17.9159 4.73472 18.7161 3.8625 19.4475 2.58886C19.653 2.2116 20.1335 1.33937 19.9507 0.914576C19.7452 0.442999 18.602 0.584094 17.8932 0.584094C16.9789 0.584094 15.7904 0.513169 15.5614 0.7018C15.127 1.00814 14.9441 1.50386 14.7386 1.97543C14.2815 3.06044 13.6641 4.16808 13.0241 4.99353C12.7952 5.27647 12.3615 5.86575 12.1099 5.77144L12.1106 5.77219Z"-->
<!--                                          fill="#0077FF"/>-->
<!--                                </svg>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="footer__socials-item">-->
<!--                            <a href="" class="footer__socials-link">-->
<!--                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none"-->
<!--                                     xmlns="http://www.w3.org/2000/svg">-->
<!--                                    <path d="M18.2949 0.141253C18.2949 0.141253 20.1451 -0.551318 19.9909 1.13064C19.9395 1.82322 19.477 4.24722 19.1172 6.86912L17.8838 14.6358C17.8838 14.6358 17.781 15.7736 16.8559 15.9715C15.9308 16.1694 14.5432 15.2789 14.2862 15.081C14.0807 14.9327 10.4318 12.7065 9.14696 11.6182C8.7872 11.3214 8.37605 10.7277 9.19834 10.0351L14.5946 5.08823C15.2113 4.49458 15.8281 3.10944 13.2584 4.7914L6.06339 9.49101C6.06339 9.49101 5.2411 9.98568 3.69934 9.54047L0.358772 8.55108C0.358772 8.55108 -0.874662 7.80905 1.23245 7.06697C6.37177 4.74189 12.6931 2.36736 18.2949 0.141253Z"-->
<!--                                          fill="#40A7E3"/>-->
<!--                                </svg>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="footer__bottom">-->
<!--        <div class="footer__bottom-container container">-->
<!--            <div class="footer__copyright">-->
<!--                <p>-->
<!--                    Основная миссия частной наркологической клиники «Свято» в Москве состоитт в оказании всесторонней-->
<!--                    медицинской помощи алкозависимым и наркоманам.-->
<!--                </p>-->
<!--                <p>-->
<!--                    Лицензия № ЛО-77-01-020824 от 7 декабря 2020,-->
<!--                    выдана Департаментом здравоохранения города Москвы-->
<!--                </p>-->
<!--                <p>-->
<!--                    2018-2022 Наркологическая клиника “Свято” Все права защищены.-->
<!--                    Сайт использует cookies. Все права на сайт принадлежат частной коммерческой компании.-->
<!--                    На сайте не размещается реклама-->
<!--                </p>-->
<!--            </div>-->
<!--            <div class="footer__bottom-info">-->
<!--                <p>-->
<!--                    Информация, предоставляемая на сайте-->
<!--                    <a href="svyato-klinik.ru">svyato-klinik.ru</a> предназначена для поддержки, а не для замещения существующих отношений между пациентом и ее/его лечащим врачом-->
<!--                </p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->
</body>
</html>