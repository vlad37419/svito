<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="/assets/css/sections/reviews.css">
    <link rel="stylesheet" href="/assets/css/sections/gallery.css">
    <link rel="stylesheet" href="/assets/css/sections/articles.css">
    <link rel="stylesheet" href="/assets/css/sections/documents.css">
    <link rel="stylesheet" href="/assets/css/sections/centers.css">
    <link rel="stylesheet" href="/assets/css/sections/map.css">
    <link rel="stylesheet" href="/assets/css/sections/packages.css">
    <link rel="stylesheet" href="/assets/css/sections/steps.css">
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
                    myMap.behaviors.disable('scrollZoom');
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
                                            <div class="mobile-menu__sub-item-wrapper accor-full"
                                                 style="max-height: 0px;">
                                                <ul class="mobile-menu__sub-list accor-full-content"
                                                    data-accordion-content="">
                                                    <li class="mobile-menu__sub-item accor">
                                                        <a href="/nashi-uslugi/lechenie-alkogolizma/vyvod-iz-zapoya-na-domu/"
                                                           class="mobile-menu__sub-link">
                                                            Вывод из запоя на дому
                                                        </a>
                                                    </li>
                                                    <li class="mobile-menu__sub-item accor">
                                                        <a href="/nashi-uslugi/lechenie-alkogolizma/kapelnitsa-ot-pohmelya/"
                                                           class="mobile-menu__sub-link">
                                                            Капельница от похмелья
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="mobile-menu__sub-item accor"><a
                                                href="/nashi-uslugi/konsultatsiya-narkologa/"
                                                class="mobile-menu__sub-link">
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