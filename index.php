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
    <!--    <section class="promo section-offset">-->
    <!--        <div class="promo__container container">-->
    <!--            <div class="promo__slider swiper">-->
    <!--                <div class="swiper-wrapper">-->
    <!--                    <div class="promo__slide swiper-slide"-->
    <!--                         style="background-image: url('/assets/img/sections/promo/slide-1.png')"></div>-->
    <!--                    <div class="promo__slide swiper-slide"-->
    <!--                         style="background-image: url('/assets/img/sections/promo/slide-2.png')"></div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="promo__slider-pagination slider-pagination"></div>-->
    <!--            <div class="promo__decor"></div>-->
    <!--            <div class="promo__decor promo-decor_big"></div>-->
    <!--            <div class="promo__content">-->
    <!--                <h1 class="promo__title section-title">-->
    <!--                    Наркологическая клиника-->
    <!--                    «Свято» в Санкт-Петербурге-->
    <!--                </h1>-->
    <!--                <p class="promo__descr">-->
    <!--                    Мы поможем вам и вашим близким победить зависимость раз-->
    <!--                    и навсегда. Мы подберем лечение, основанное на новейших методиках и подходящее именно вам.-->
    <!--                </p>-->
    <!--                <ul class="promo__list list-decor">-->
    <!--                    <li class="promo__list-item">-->
    <!--                        Гарантируем терапию европейского качества-->
    <!--                    </li>-->
    <!--                    <li class="promo__list-item">-->
    <!--                        Обращение к нам анонимно, без постановки на учет-->
    <!--                    </li>-->
    <!--                    <li class="promo__list-item">-->
    <!--                        Приезд бригады через 30 минут после обращения-->
    <!--                    </li>-->
    <!--                    <li class="promo__list-item">-->
    <!--                        Если вы остались недовольны лечением, то вернем вам деньги-->
    <!--                    </li>-->
    <!--                </ul>-->
    <!--                <div class="promo__btn-group">-->
    <!--                    <button class="promo__btn btn">-->
    <!--                        <span class="btn__text">Записаться на прием</span>-->
    <!--                    </button>-->
    <!--                    <button class="promo__btn btn btn_bg-transparent">-->
    <!--                        <span class="btn__text">Узнать подробнее</span>-->
    <!--                    </button>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
    <!--    <section class="services section-offset">-->
    <!--        <div class="services__container container">-->
    <!--            <h2 class="services__title section-title">-->
    <!--                Предоставляемые услуги и направления-->
    <!--            </h2>-->
    <!--            <div class="services__row row">-->
    <!--                <div class="services__card col-33">-->
    <!--                    <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                        <rect opacity="0.15" width="72" height="72" rx="24" fill="#EB5553"/>-->
    <!--                        <path d="M41.7863 33.0629C42.2367 33.0629 42.848 32.695 43.2749 32.0639M43.2749 32.0639C43.6438 31.5186 43.8749 30.7767 43.7452 29.9061M43.2749 32.0639C43.8899 32.0639 45.1711 32.0473 46.3836 31.602M46.3836 31.602C47.8279 31.0714 49.1747 29.9325 49.182 27.4885M46.3836 31.602V33.0629C46.3836 34.1726 45.6906 36.2763 43.0634 36.7027C42.5182 36.7912 42.022 37.2428 41.7162 37.7027C41.2973 38.3327 40.5042 38.977 39.3475 38.977C37.5485 38.977 36.629 37.4985 36.629 37.0989L36.669 17.8781C36.669 17.4785 35.7495 16 33.9505 16C32.7938 16 32.0007 16.6443 31.5818 17.2743C31.2761 17.7342 30.7798 18.1858 30.2346 18.2743C27.6074 18.7007 26.9145 20.8044 26.9145 21.9141V23.3751M49.182 27.4885C49.182 27.4819 49.182 27.4752 49.182 27.4685M49.182 27.4885C49.1747 25.0445 47.8279 23.9056 46.3836 23.3751M49.182 27.4885C49.182 27.4952 49.182 27.5018 49.182 27.5085M41.7863 21.9141C42.2367 21.9141 42.848 22.282 43.2749 22.9131M43.2749 22.9131C43.6438 23.4584 43.8749 24.2003 43.7452 25.0709M43.2749 22.9131C43.8899 22.9131 45.1711 22.9297 46.3836 23.3751M46.3836 23.3751V21.9141C46.3836 20.8044 45.6906 18.7007 43.0634 18.2743C42.5182 18.1858 42.022 17.7342 41.7162 17.2743C41.2973 16.6443 40.5042 16 39.3475 16C37.5485 16 36.629 17.4785 36.629 17.8781M31.5117 33.0629C31.0614 33.0629 30.45 32.695 30.0232 32.0639M30.0232 32.0639C29.6543 31.5186 29.4231 30.7767 29.5528 29.9061M30.0232 32.0639C29.4081 32.0639 28.1269 32.0473 26.9145 31.602M26.9145 31.602C25.4702 31.0714 24.1233 29.9325 24.116 27.4885M26.9145 31.602V33.0629C26.9145 34.1726 27.6074 36.2763 30.2346 36.7027C30.7798 36.7912 31.2761 37.2428 31.5818 37.7027C32.0007 38.3327 32.7938 38.977 33.9505 38.977C35.7495 38.977 36.669 37.4985 36.669 37.0989M24.116 27.4885C24.116 27.4819 24.116 27.4752 24.116 27.4685M24.116 27.4885C24.1233 25.0445 25.4702 23.9056 26.9145 23.3751M24.116 27.4885C24.116 27.4952 24.116 27.5018 24.116 27.5085M31.5117 21.9141C31.0614 21.9141 30.45 22.282 30.0232 22.9131M30.0232 22.9131C29.6543 23.4584 29.4231 24.2003 29.5528 25.0709M30.0232 22.9131C29.4081 22.9131 28.1269 22.9297 26.9145 23.3751M20.7979 46.5694C22.0772 44.9044 25.8351 41.5744 30.6324 41.5744C33.2709 41.5744 33.6307 41.6543 34.2304 41.8541C34.7101 42.014 37.6018 43.1995 38.9877 43.7722C39.4808 44.0386 40.3629 44.8432 39.9472 45.9301M20.7979 46.5694L26.9544 51.6044M20.7979 46.5694L20.5131 46.3691C20.0706 46.0578 19.4607 46.1549 19.1368 46.5883L17.5698 48.6844C17.2506 49.1113 17.3224 49.7135 17.733 50.0534L24.1529 55.3686C24.5753 55.7183 25.2006 55.6626 25.5545 55.2437L27.2909 53.1884C27.6541 52.7584 27.5911 52.1135 27.1515 51.762L26.9544 51.6044M39.9472 45.9301C39.4275 47.2887 38.508 47.1688 38.0282 47.0889C37.6445 47.025 34.6968 46.2098 33.2709 45.8102M39.9472 45.9301L48.7023 43.4525C49.262 43.346 50.4853 43.4446 50.901 44.6913C51.4207 46.2498 49.7417 47.1688 49.3819 47.3287C49.094 47.4565 42.5724 50.4189 39.3475 51.8841C38.6546 52.1638 36.8289 52.5554 35.0699 51.8841C33.3109 51.2128 31.6984 50.5654 31.1121 50.3257C30.5924 50.1792 29.3851 49.974 28.7134 50.3257C28.0418 50.6773 27.2609 51.3247 26.9544 51.6044"-->
    <!--                              stroke="#EB5553" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
    <!--                    </svg>-->
    <!--                    <p class="services__card-title">-->
    <!--                        Психиатрия-->
    <!--                    </p>-->
    <!--                    <p class="services__card-descr">-->
    <!--                        Медицинский специалист в области психиатрии называется психиатром.-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--                <div class="services__card col-33">-->
    <!--                    <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                        <rect opacity="0.15" width="72" height="72" rx="24" fill="#F0D116"/>-->
    <!--                        <path d="M27.5755 28.273C31.4422 24.5026 35.0519 20.9982 36.4356 19.6977C39.7631 16.5701 43.6119 15.9055 47.3403 19.0722C52.055 23.8573 49.3048 28.4418 47.3403 30.1359L38.4401 38.7962M27.5755 28.273C24.003 31.7566 20.2111 35.4673 17.7532 37.8766C16.4302 39.4404 14.578 43.5297 17.7532 47.3766C21.7222 52.1852 27.1345 49.7971 28.698 48.2757L38.4401 38.7962M27.5755 28.273L38.4401 38.7962M47.0998 55C52.0152 55 56 51.1143 56 46.321C56 41.5278 52.0152 37.6421 47.0998 37.6421M47.0998 55C42.1844 55 38.1996 51.1143 38.1996 46.321C38.1996 41.5278 42.1844 37.6421 47.0998 37.6421M47.0998 55V37.6421"-->
    <!--                              stroke="#FFC531" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
    <!--                    </svg>-->
    <!--                    <p class="services__card-title">-->
    <!--                        Наркология-->
    <!--                    </p>-->
    <!--                    <p class="services__card-descr">-->
    <!--                        Наркология как область медицины сформировалась относительно-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--                <div class="services__card col-33">-->
    <!--                    <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                        <path d="M25.3526 20.1046V20.1046C25.0272 20.1046 24.7635 19.8409 24.7635 19.5155V17C24.7635 16.4477 25.2112 16 25.7635 16H29.5701C30.1224 16 30.5701 16.4477 30.5701 17V19.5997C30.5701 19.8786 30.3441 20.1046 30.0652 20.1046V20.1046M25.3526 20.1046V20.668C25.4199 22.2532 24.713 25.9113 21.4331 28.3086C21.1775 28.4955 21.0136 28.7808 21.0112 29.0974C21.0042 30.0191 21.001 32.1055 21.0002 34.7928M25.3526 20.1046H30.0652M30.0652 20.1046V20.668C30.0047 24.5705 32.3372 27.1859 33.87 28.2813C34.1623 28.4901 34.3571 28.8173 34.3571 29.1765V40.7887M21.0002 34.7928L34.3571 40.7887M21.0002 34.7928C20.9998 36.1865 21 37.742 21.0008 39.3803M34.3571 40.7887V45.2958M21.0008 39.3803C21.0032 44.5935 21.0105 50.6463 21.017 55.0029C21.0179 55.5545 21.4653 56 22.017 56H33.3571C33.9094 56 34.3571 55.5523 34.3571 55V45.2958M21.0008 39.3803L34.3571 45.2958M23.8378 52.8209H31.4538M40.2211 47.7103L40.0044 45.5928C39.944 45.0033 40.4066 44.4909 40.9992 44.4909H49.8964C50.4875 44.4909 50.9497 45.0009 50.8916 45.5892L50.6822 47.7103M40.2211 47.7103L40.9778 55.1018C41.03 55.612 41.4598 56 41.9726 56H48.9578C49.472 56 49.9024 55.61 49.9529 55.0982L50.6822 47.7103M40.2211 47.7103H50.6822"-->
    <!--                              stroke="#EB5553" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
    <!--                        <rect opacity="0.15" width="72" height="72" rx="24" fill="#EB5553"/>-->
    <!--                    </svg>-->
    <!--                    <p class="services__card-title">-->
    <!--                        Алкоголизм-->
    <!--                    </p>-->
    <!--                    <p class="services__card-descr">-->
    <!--                        Алкоголизм - это психическое и физическое заболевание.-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--                <div class="services__card col-33">-->
    <!--                    <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                        <rect opacity="0.15" width="72" height="72" rx="24" fill="#F0D116"/>-->
    <!--                        <path d="M22.0241 50.3064C25.6295 53.8291 30.5612 56 36 56C47.0457 56 56 47.0457 56 36C56 30.6015 53.8611 25.7026 50.3845 22.1044M22.0241 50.3064C18.3072 46.6749 16 41.6069 16 36C16 24.9543 24.9543 16 36 16C41.6472 16 46.7477 18.3405 50.3845 22.1044M22.0241 50.3064L30.8193 41.5604M50.3845 22.1044L30.8193 41.5604M30.8193 41.5604V36C30.6452 34.8755 31.0763 32.2329 34.1928 30.6586C34.1928 28.249 34.1928 25.0495 34.1928 23.751H37.9277V30.6586C39.0522 31.0067 41.3012 32.5622 41.3012 36C41.3012 39.4378 41.3012 45.6519 41.3012 48.3293H30.8193V41.5604Z"-->
    <!--                              stroke="#FFC531" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
    <!--                    </svg>-->
    <!--                    <p class="services__card-title">-->
    <!--                        Кодирование-->
    <!--                    </p>-->
    <!--                    <p class="services__card-descr">-->
    <!--                        Медицинский специалист в области психиатрии называется психиатром.-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--                <div class="services__card col-33">-->
    <!--                    <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                        <rect opacity="0.15" width="72" height="72" rx="24" fill="#EB5553"/>-->
    <!--                        <path d="M46.1647 40.745C48.6036 38.2243 50.1036 34.7951 50.1036 31.0167C50.1036 23.2755 43.807 17 36.0398 17C28.2726 17 21.9761 23.2755 21.9761 31.0167C21.9761 34.7951 23.4761 38.2243 25.915 40.745M46.1647 40.745C44.1579 42.8192 41.5154 44.2784 38.5498 44.8109L36.0398 49.2968L33.5299 44.8109C30.5643 44.2784 27.9218 42.8192 25.915 40.745M46.1647 40.745H51.9761L56 55H16L20.1434 40.745H25.915M41.8964 28.8328V33.3595H38.3108V36.9331H33.7689V33.3595H30.1833V28.8328H33.7689V25.2591H38.3108V28.8328H41.8964Z"-->
    <!--                              stroke="#EB5553" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
    <!--                    </svg>-->
    <!--                    <p class="services__card-title">-->
    <!--                        Реабилитация-->
    <!--                    </p>-->
    <!--                    <p class="services__card-descr">-->
    <!--                        Наркология как область медицины сформировалась относительно-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--                <div class="services__card col-33">-->
    <!--                    <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                        <rect opacity="0.15" width="72" height="72" rx="24" fill="#F0D116"/>-->
    <!--                        <path d="M47.1111 43.2121L56.0311 34.1047C56.4162 33.7116 56.4112 33.0812 56.0201 32.6942L45.9192 22.6996C45.5281 22.3126 44.8978 22.3143 44.5087 22.7034L40.9697 26.2424M47.1111 43.2121C47.2169 42.0333 46.9038 40.1169 45.5354 38.4903M47.1111 43.2121C47.1111 46.3232 44.3636 50 40.1616 50C37.1843 50 35.0014 48.2251 34.0172 47.0333C33.8043 46.7755 33.4961 46.6061 33.1618 46.6061H29.7701C29.4233 46.6061 29.1056 46.789 28.9001 47.0684C27.6689 48.7421 25.5876 50 23.0303 50C17.3737 50 16 44.4242 16 43.0505C16 37.7818 20.2559 35.9529 22.3838 35.697H24.4848M31.5152 35.697H40.0015C40.0543 35.697 40.107 35.7011 40.1591 35.7097C40.4398 35.7562 40.7099 35.8102 40.9697 35.871M31.5152 35.697L31.8788 35.3333M31.5152 35.697H24.4848M40.9697 35.871L40.5108 32.9527C40.4936 32.8436 40.4928 32.7323 40.5202 32.6253C40.7042 31.9056 41.3509 30.7273 42.7879 30.7273C44.2351 30.7273 44.8498 31.5372 45.0183 32.5527C45.114 33.1298 45.558 33.6239 46.1288 33.7522C47.0471 33.9587 48.0404 34.5051 48.0404 35.871C48.0404 37.4449 46.3704 38.273 45.5354 38.4903M40.9697 35.871C43.1371 36.3786 44.5887 37.3651 45.5354 38.4903M34.9495 32.2626C34.2492 31.5892 32.8485 29.9111 32.8485 28.5859C32.8485 29.596 30.7879 33.0707 29.0505 33.0707C29.697 33.0707 31.6364 34.9697 31.8788 35.3333M34.9495 32.2626L31.8788 35.3333M34.9495 32.2626L40.9697 26.2424M24.4848 35.697V23.2828C24.4848 22.7305 24.9326 22.2828 25.4848 22.2828H39.9697C40.522 22.2828 40.9697 22.7305 40.9697 23.2828V26.2424M40.7273 39.8586C40.7273 40.2602 40.4017 40.5859 40 40.5859C39.5983 40.5859 39.2727 40.2602 39.2727 39.8586C39.2727 39.4569 39.5983 39.1313 40 39.1313C40.4017 39.1313 40.7273 39.4569 40.7273 39.8586ZM40.7273 45.7576C40.7273 46.1592 40.4017 46.4848 40 46.4848C39.5983 46.4848 39.2727 46.1592 39.2727 45.7576C39.2727 45.3559 39.5983 45.0303 40 45.0303C40.4017 45.0303 40.7273 45.3559 40.7273 45.7576ZM43.6364 42.8485C43.6364 43.2501 43.3108 43.5758 42.9091 43.5758C42.5074 43.5758 42.1818 43.2501 42.1818 42.8485C42.1818 42.4468 42.5074 42.1212 42.9091 42.1212C43.3108 42.1212 43.6364 42.4468 43.6364 42.8485ZM37.8182 42.8485C37.8182 43.2501 37.4926 43.5758 37.0909 43.5758C36.6892 43.5758 36.3636 43.2501 36.3636 42.8485C36.3636 42.4468 36.6892 42.1212 37.0909 42.1212C37.4926 42.1212 37.8182 42.4468 37.8182 42.8485ZM21.899 40.5152V39.8889C21.899 39.3366 22.3467 38.8889 22.899 38.8889H23.2424C23.7947 38.8889 24.2424 39.3366 24.2424 39.8889V40.5152C24.2424 41.0674 24.6901 41.5152 25.2424 41.5152H25.8687C26.421 41.5152 26.8687 41.9629 26.8687 42.5152V42.8586C26.8687 43.4109 26.421 43.8586 25.8687 43.8586H25.2424C24.6901 43.8586 24.2424 44.3063 24.2424 44.8586V45.4848C24.2424 46.0371 23.7947 46.4848 23.2424 46.4848H22.899C22.3467 46.4848 21.899 46.0371 21.899 45.4848V44.8586C21.899 44.3063 21.4513 43.8586 20.899 43.8586H20.2727C19.7204 43.8586 19.2727 43.4109 19.2727 42.8586V42.5152C19.2727 41.9629 19.7204 41.5152 20.2727 41.5152H20.899C21.4513 41.5152 21.899 41.0674 21.899 40.5152Z"-->
    <!--                              stroke="#FFC531" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
    <!--                    </svg>-->
    <!--                    <p class="services__card-title">-->
    <!--                        Игромания-->
    <!--                    </p>-->
    <!--                    <p class="services__card-descr">-->
    <!--                        Алкоголизм - это психическое и физическое заболевание.-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
    <!--    <section class="prices section-offset">-->
    <!--        <div class="prices__container container">-->
    <!--            <h2 class="prices__title section-title">-->
    <!--                Прайс-лист с ценами на наши услуги-->
    <!--            </h2>-->
    <!--            <ul class="prices__wrapper accor-wrapper" data-accordion-list>-->
    <!--                <li class="faq__accor question accor">-->
    <!--                    <button class="question__title accor-open" data-accordion-button>-->
    <!--                        <span class="question__title-text">-->
    <!--                          Вывод из запоя-->
    <!--                        </span>-->
    <!--                        <span class="question__title-decor accor-open-decor"></span>-->
    <!--                    </button>-->
    <!--                    <div class="question__info accor-full">-->
    <!--                        <div class="question__info-wrapper accor-full-content" data-accordion-content>-->
    <!--                            <ul class="question__info-services">-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Капельница от запоя-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 2000 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Капельница от похмелья-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 3000 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Лечение от похмелья-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 2700 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Помощь при отравление алкоголем-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 2400 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="faq__accor question accor">-->
    <!--                    <button class="question__title accor-open" data-accordion-button>-->
    <!--                        <span class="question__title-text">-->
    <!--                          Вывод из запоя-->
    <!--                        </span>-->
    <!--                        <span class="question__title-decor accor-open-decor"></span>-->
    <!--                    </button>-->
    <!--                    <div class="question__info accor-full">-->
    <!--                        <div class="question__info-wrapper accor-full-content" data-accordion-content>-->
    <!--                            <ul class="question__info-services">-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Капельница от запоя-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 2000 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Капельница от похмелья-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 3000 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Лечение от похмелья-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 2700 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Помощь при отравление алкоголем-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 2400 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="faq__accor question accor">-->
    <!--                    <button class="question__title accor-open" data-accordion-button>-->
    <!--                        <span class="question__title-text">-->
    <!--                          Вывод из запоя-->
    <!--                        </span>-->
    <!--                        <span class="question__title-decor accor-open-decor"></span>-->
    <!--                    </button>-->
    <!--                    <div class="question__info accor-full">-->
    <!--                        <div class="question__info-wrapper accor-full-content" data-accordion-content>-->
    <!--                            <ul class="question__info-services">-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Капельница от запоя-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 2000 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Капельница от похмелья-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 3000 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Лечение от похмелья-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 2700 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Помощь при отравление алкоголем-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 2400 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="faq__accor question accor">-->
    <!--                    <button class="question__title accor-open" data-accordion-button>-->
    <!--                        <span class="question__title-text">-->
    <!--                          Вывод из запоя-->
    <!--                        </span>-->
    <!--                        <span class="question__title-decor accor-open-decor"></span>-->
    <!--                    </button>-->
    <!--                    <div class="question__info accor-full">-->
    <!--                        <div class="question__info-wrapper accor-full-content" data-accordion-content>-->
    <!--                            <ul class="question__info-services">-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Капельница от запоя-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 2000 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Капельница от похмелья-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 3000 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Лечение от похмелья-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 2700 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Помощь при отравление алкоголем-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 2400 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="faq__accor question accor">-->
    <!--                    <button class="question__title accor-open" data-accordion-button>-->
    <!--                        <span class="question__title-text">-->
    <!--                          Вывод из запоя-->
    <!--                        </span>-->
    <!--                        <span class="question__title-decor accor-open-decor"></span>-->
    <!--                    </button>-->
    <!--                    <div class="question__info accor-full">-->
    <!--                        <div class="question__info-wrapper accor-full-content" data-accordion-content>-->
    <!--                            <ul class="question__info-services">-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Капельница от запоя-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 2000 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Капельница от похмелья-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 3000 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Лечение от похмелья-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 2700 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Помощь при отравление алкоголем-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 2400 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="faq__accor question accor">-->
    <!--                    <button class="question__title accor-open" data-accordion-button>-->
    <!--                        <span class="question__title-text">-->
    <!--                          Вывод из запоя-->
    <!--                        </span>-->
    <!--                        <span class="question__title-decor accor-open-decor"></span>-->
    <!--                    </button>-->
    <!--                    <div class="question__info accor-full">-->
    <!--                        <div class="question__info-wrapper accor-full-content" data-accordion-content>-->
    <!--                            <ul class="question__info-services">-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Капельница от запоя-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 2000 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Капельница от похмелья-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 3000 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Лечение от похмелья-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 2700 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                                <li class="question__info-service">-->
    <!--                                    <p class="question__info-service-title">-->
    <!--                                        Помощь при отравление алкоголем-->
    <!--                                    </p>-->
    <!--                                    <p class="question__info-service-price">-->
    <!--                                        от 2400 ₽-->
    <!--                                    </p>-->
    <!--                                    <button class="question__info-service-btn btn btn_bg-transparent">-->
    <!--                                        <span class="btn__text">-->
    <!--                                            Заказать-->
    <!--                                        </span>-->
    <!--                                    </button>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </section>-->
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