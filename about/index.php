<?php require_once '../header.php'; ?>
<main class="main">
    <section class="promo">
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
    <div class="breadcrumbs">
        <div class="breadcrumbs__container container">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a href="/" class="breadcrumbs__link">
                        Главная страница
                    </a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="#" class="breadcrumbs__link disabled">
                        Вторичная страница
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <section class="packages section-offset">
        <div class="packages__container container">
            <h2 class="packages__title section-title">
                Варианты предоставляемой помощи
            </h2>
            <div class="packages__wrapper slider-container slider-container_for-cards">
                <div class="packages__slider slider3list swiper">
                    <div class="packages__slider-wrapper swiper-wrapper">
                        <div class="packages__card package swiper-slide">
                            <div class="package__icon">
                                <svg width="36" height="42" viewBox="0 0 36 42" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M34.2406 6.00695V35.8275C34.2406 36.3798 33.7929 36.8275 33.2406 36.8275H6.20028C5.64799 36.8275 5.20028 36.3798 5.20028 35.8275V2C5.20028 1.44772 5.64799 1 6.20028 1H29.178M34.2406 6.00695L29.178 1M34.2406 6.00695H30.178C29.6257 6.00695 29.178 5.55924 29.178 5.00696V1M3.61474 5.11683H2C1.44771 5.11683 1 5.56454 1 6.11683V40C1 40.5523 1.44772 41 2 41H29.0403C29.5926 41 30.0403 40.5523 30.0403 40V38.6912M29.9013 30.6523H9.37274M9.37274 25.8122H29.9013M12.1266 21.0835H27.1474M19.2211 7.9541H17.8832C17.3309 7.9541 16.8832 7.50639 16.8832 6.9541V5.67177C16.8832 5.11948 16.4355 4.67177 15.8832 4.67177H13.6829C13.1306 4.67177 12.6829 5.11948 12.6829 5.67177V6.9541C12.6829 7.50639 12.2352 7.9541 11.6829 7.9541H10.3727C9.82045 7.9541 9.37274 8.40182 9.37274 8.9541V11.21C9.37274 11.7623 9.82046 12.21 10.3727 12.21H11.6829C12.2352 12.21 12.6829 12.6577 12.6829 13.21V14.548C12.6829 15.1003 13.1306 15.548 13.6829 15.548H15.8832C16.4355 15.548 16.8832 15.1003 16.8832 14.548V13.21C16.8832 12.6577 17.3309 12.21 17.8832 12.21H19.2211C19.7734 12.21 20.2211 11.7623 20.2211 11.21V8.9541C20.2211 8.40182 19.7734 7.9541 19.2211 7.9541Z"
                                          stroke="#EB5553" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="package__name">
                                Эконом
                            </p>
                            <p class="package__price">
                                3 500 руб.
                            </p>
                            <ul class="package__list">
                                <li class="package__item">
                                    Осмотр, диагностика состояния, проверка работы сердца
                                </li>
                                <li class="package__item">
                                    Капельница-система в 1 этап, продолжительностью до 1 часа
                                </li>
                                <li class="package__item">
                                    Медикаменты, связывающие выводящие ядовитые вещества, токсины из организма,
                                    образующиеся вследствие употребления.
                                </li>
                                <li class="package__item">
                                    Седативные препараты (успокаивающие) снимающие симптомы: тревоги и депрессии.
                                    Вызывают медикаментозный сон длительностью от
                                    8 часов
                                </li>
                            </ul>
                            <button class="package__btn btn">
                                <span class="btn__text">Заказать услугу</span>
                            </button>
                        </div>
                        <div class="packages__card package swiper-slide">
                            <div class="package__icon">
                                <svg width="42" height="38" viewBox="0 0 42 38" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 15.8531V35.0364C1 36.1209 1.89543 37 3 37H39C40.1046 37 41 36.1209 41 35.0364V15.8531M1 15.8531V2.96363C1 1.87915 1.89543 1 3 1H7.82129C8.92586 1 9.82129 1.87915 9.82129 2.96364V3.02098C9.82129 3.57326 10.269 4.02098 10.8213 4.02098H39C40.1046 4.02098 41 4.90013 41 5.98462V15.8531M1 15.8531C1 15.2154 1.46641 13.9399 3.33207 13.9399H5.30925M41 15.8531C41 14.2017 39.4453 13.8895 38.6679 13.9399H36.488M5.30925 13.9399V10.0126C5.30925 8.9281 6.20468 8.04895 7.30925 8.04895H34.488C35.5925 8.04895 36.488 8.9281 36.488 10.0126V13.9399M5.30925 13.9399H36.488M26.5151 27.3698V25.1913C26.5151 24.639 26.0674 24.1913 25.5151 24.1913H24.1771C23.6248 24.1913 23.1771 23.7436 23.1771 23.1913V21.9686C23.1771 21.4163 22.7294 20.9686 22.1771 20.9686H19.9768C19.4245 20.9686 18.9768 21.4163 18.9768 21.9686V23.1913C18.9768 23.7436 18.5291 24.1913 17.9768 24.1913H16.6667C16.1144 24.1913 15.6667 24.639 15.6667 25.1913V27.3698C15.6667 27.9221 16.1144 28.3698 16.6667 28.3698H17.9768C18.5291 28.3698 18.9768 28.8175 18.9768 29.3698V30.6471C18.9768 31.1994 19.4245 31.6471 19.9768 31.6471H22.1771C22.7294 31.6471 23.1771 31.1994 23.1771 30.6471V29.3698C23.1771 28.8175 23.6248 28.3698 24.1771 28.3698H25.5151C26.0674 28.3698 26.5151 27.9221 26.5151 27.3698Z"
                                          stroke="#EB5553" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="package__name">
                                Стандарт
                            </p>
                            <p class="package__price">
                                5 500 руб.
                            </p>
                            <ul class="package__list">
                                <li class="package__item">
                                    Круглосуточный срочный вызов
                                </li>
                                <li class="package__item">
                                    Осмотр, диагности состояния, проверка работы сердца, печени, почек
                                </li>
                                <li class="package__item">
                                    Капельница-система в 2 этапа, продолжительностью до 1 часа
                                </li>
                                <li class="package__item">
                                    Сбалансированный комплекс питательных веществ и витаминов для головного мозга и
                                    центральной нервной системы
                                </li>
                                <li class="package__item">
                                    Медикаменты, связывающие и выводящие ядовитые вещества, токсины из организма,
                                    образующиеся вследствие употребления алкоголя
                                </li>
                                <li class="package__item">
                                    Седативные препараты (успокаивающие) снимающие симптомы: тревоги и депрессии.
                                    Вызывают медикаментозный сон длительностью от
                                    8 часов
                                </li>
                            </ul>
                            <button class="package__btn btn">
                                <span class="btn__text">Заказать услугу</span>
                            </button>
                        </div>
                        <div class="packages__card package swiper-slide">
                            <div class="package__icon">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M41 12.5726C25.379 12.5726 16.621 12.5726 1 12.5726M41 12.5726V39C41 40.1046 40.1028 41 38.996 41H3.00404C1.89724 41 1 40.1046 1 39V12.5726M41 12.5726L40.2579 10.5565L39.7864 9.27554C39.6416 8.88227 39.267 8.62097 38.8479 8.62097H33.3232M1 12.5726L1.70707 10.5968L2.17686 9.28403C2.31917 8.88635 2.696 8.62097 3.11838 8.62097H8.75758M33.3232 8.62097V3C33.3232 1.89543 32.426 1 31.3192 1H10.7616C9.65481 1 8.75758 1.89543 8.75758 3V8.62097M33.3232 8.62097V10.5565M8.75758 8.62097V10.5565M11.303 10.5565V5.62097C11.303 4.5164 12.2003 3.62097 13.3071 3.62097H28.6929C29.7997 3.62097 30.697 4.5164 30.697 5.62097V10.5565M26.9008 27.8767V25.6208C26.9008 25.0685 26.4531 24.6208 25.9008 24.6208H24.5561C24.0038 24.6208 23.5561 24.1731 23.5561 23.6208V22.3385C23.5561 21.7862 23.1083 21.3385 22.5561 21.3385H20.3473C19.795 21.3385 19.3473 21.7862 19.3473 22.3385V23.6208C19.3473 24.1731 18.8996 24.6208 18.3473 24.6208H17.0305C16.4782 24.6208 16.0305 25.0685 16.0305 25.6208V27.8767C16.0305 28.429 16.4782 28.8767 17.0305 28.8767H18.3473C18.8996 28.8767 19.3473 29.3244 19.3473 29.8767V31.2147C19.3473 31.767 19.795 32.2147 20.3473 32.2147H22.5561C23.1083 32.2147 23.5561 31.767 23.5561 31.2147V29.8767C23.5561 29.3244 24.0038 28.8767 24.5561 28.8767H25.9008C26.4531 28.8767 26.9008 28.429 26.9008 27.8767Z"
                                          stroke="#EB5553" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="package__name">
                                Премиум
                            </p>
                            <p class="package__price">
                                6 500 - 14 000 руб.
                            </p>
                            <ul class="package__list">
                                <li class="package__item">
                                    Прием врача-нарколога, консультация, осмотр
                                </li>
                                <li class="package__item">
                                    Подбор необходимой дозировки в зависимости от стадии алкоголизма, возраста,
                                    хронических болезней
                                </li>
                                <li class="package__item">
                                    Необходимый срок воздержание от алкоголя 3 дня
                                </li>
                                <li class="package__item">
                                    Осуществление процедуры медсестрой под наблюдением лечащего врача
                                </li>
                                <li class="package__item">
                                    Провокация реакции на алкоголь и разъяснение последствий употребления
                                    спиртосодержащих напитков
                                </li>
                                <li class="package__item">
                                    Сопровождение больного после процедуры в течении двух недель
                                </li>
                            </ul>
                            <button class="package__btn btn">
                                <span class="btn__text">Заказать услугу</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="packages__slider-pagination slider-pagination"></div>
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
    <section class="consultation section-offset">
        <div class="consultation__container container">
            <div class="consultation__decor"></div>
            <picture class="consultation__picture">
                <img src="/assets/img/sections/consultation/person.png" alt="" class="consultation__img">
            </picture>
            <div class="consultation__content">
                <h2 class="consultation__title">
                    Получите бесплатную консультацию врача прямо сейчас! Оставьте заявку
                </h2>
                <form action="" class="consultation__form form-consultation">
                    <label class="form-consultation__label">
                        <input placeholder="Ваше имя" type="text" class="form-consultation__input">
                    </label>
                    <label class="form-consultation__label">
                        <input placeholder="Номер телефона" type="tel" class="form-consultation__input">
                    </label>
                    <button class="form-consultation-btn btn">
                        <span class="btn__text">
                            Оставить заявку
                        </span>
                    </button>
                </form>
                <a href="tel:88005001160" class="consultation__link">
                    Или позвоните: 8-800-500-11-60
                </a>
            </div>
        </div>
    </section>
    <section class="promotions section-offset">
        <div class="promotions__container container">
            <h2 class="promotions__title section-title">
                Акции и спец. предложения
            </h2>
            <div class="promotions__wrapper slider-container slider-container_for-btn">
                <div class="promotions__slider slider3list swiper">
                    <div class="promotions__slider-wrapper swiper-wrapper">
                        <div class="promotions__slide promotion swiper-slide">
                            <picture class="promotion__picture">
                                <img src="/assets/img/sections/promotions/card-1.png" alt="" class="promotion__img">
                            </picture>
                            <div class="promotion__content">
                                <h3 class="promotion__title">
                                    Спецпредложение
                                    скидка 10%
                                </h3>
                                <p class="promotion__descr">
                                    При заказе услуги "Вывод из запоя на дому" через форму заявки на сайте.
                                </p>
                            </div>
                        </div>
                        <div class="promotions__slide promotion swiper-slide">
                            <picture class="promotion__picture">
                                <img src="/assets/img/sections/promotions/card-2.png" alt="" class="promotion__img">
                            </picture>
                            <div class="promotion__content">
                                <h3 class="promotion__title">
                                    Спецпредложение
                                    скидка 10%
                                </h3>
                                <p class="promotion__descr">
                                    При заказе услуги "Вывод из запоя на дому" через форму заявки на сайте.
                                </p>
                            </div>
                        </div>
                        <div class="promotions__slide promotion swiper-slide">
                            <picture class="promotion__picture">
                                <img src="/assets/img/sections/promotions/card-3.png" alt="" class="promotion__img">
                            </picture>
                            <div class="promotion__content">
                                <h3 class="promotion__title">
                                    Спецпредложение
                                    скидка 10%
                                </h3>
                                <p class="promotion__descr">
                                    При заказе услуги "Вывод из запоя на дому" через форму заявки на сайте.
                                    При заказе услуги.
                                </p>
                            </div>
                        </div>
                        <div class="promotions__slide promotion swiper-slide">
                            <picture class="promotion__picture">
                                <img src="/assets/img/sections/promotions/card-1.png" alt="" class="promotion__img">
                            </picture>
                            <div class="promotion__content">
                                <h3 class="promotion__title">
                                    Спецпредложение
                                    скидка 10%
                                </h3>
                                <p class="promotion__descr">
                                    При заказе услуги "Вывод из запоя на дому" через форму заявки на сайте.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="promotions__slider-pagination slider-pagination"></div>
                <button class="promotions__slider-button slider-button slider-button_prev">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 8H1M1 8L8 15M1 8L8 1" stroke="#63728C" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="promotions__slider-button slider-button slider-button_next">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 8H15M15 8L8 15M15 8L8 1" stroke="#63728C" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>
    <section class="steps section-offset">
        <div class="steps__container container">
            <h2 class="steps__title section-title">
                Этапы оказания помощи
            </h2>
            <div class="steps__wrapper slider-container">
                <div class="steps__slider slider5list swiper">
                    <div class="steps__slider-wrapper swiper-wrapper">
                        <div class="steps__slide step swiper-slide">
                            <div class="step__wrapper">
                                <img src="/assets/img/sections/steps/1.png" alt="" class="step__img">
                                <p class="step__num">
                                    1
                                </p>
                            </div>
                            <p class="step__text">
                                Вызов врача по телефону или в чате
                            </p>
                        </div>
                        <div class="steps__slide step swiper-slide">
                            <div class="step__wrapper">
                                <img src="/assets/img/sections/steps/2.png" alt="" class="step__img">
                                <p class="step__num">
                                    2
                                </p>
                            </div>
                            <p class="step__text">
                                Выезд бригады
                                в течении 15 минут
                            </p>
                        </div>
                        <div class="steps__slide step swiper-slide">
                            <div class="step__wrapper">
                                <img src="/assets/img/sections/steps/3.png" alt="" class="step__img">
                                <p class="step__num">
                                    3
                                </p>
                            </div>
                            <p class="step__text">
                                Сбор первичной информации о состоянии пациента
                            </p>
                        </div>
                        <div class="steps__slide step swiper-slide">
                            <div class="step__wrapper">
                                <img src="/assets/img/sections/steps/4.png" alt="" class="step__img">
                                <p class="step__num">
                                    4
                                </p>
                            </div>
                            <p class="step__text">
                                Оказание наркологической помощи
                            </p>
                        </div>
                        <div class="steps__slide step swiper-slide">
                            <div class="step__wrapper">
                                <img src="/assets/img/sections/steps/5.png" alt="" class="step__img">
                                <p class="step__num">
                                    5
                                </p>
                            </div>
                            <p class="step__text">
                                Составление рекомендаций и сон
                            </p>
                        </div>
                    </div>
                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    </section>
    <section class="about-section section-offset about-section_no-padding">
        <div class="about-section__container container">
            <h2 class="about-section__title section-title">
                Терапия в частном центре
            </h2>
            <div class="about-section__wrapper">
                <div class="about-section__content">
                    <div class="about-section__text">
                        <p>
                            Стационарное отделение оснащено всем, что требуется для комфортного пребывания: удобная
                            мебель,
                            чистые помещения, организованный досуг. Реабилитация не причиняет больным неприятных
                            моментов –
                            лечение проходит легко и практически безболезненно. Медицинский персонал отличается
                            тактичностью, относится к пациентам с пониманием. В трудную минуту они мгновенно приходят на
                            помощь, облегчая физические и психологические страдания.
                        </p>
                        <p>
                            Предлагаемые услуги оказываются на основе лицензии, дающей право на оказание врачебной
                            наркологической помощи. Врачи всех специализаций, средний медперсонал имеют допуски для
                            проведения медицинских процедур. Ксерокопии документов пациенты могут потребовать у
                            приехавшего
                            по вызову на дом врача-нарколога.
                        </p>
                        <p>
                            Работа наркологического центра ориентирована на положительный результат. Наркомания –
                            проблема,
                            с которой может столкнуться каждая семья. Мы понимаем, как важна профессиональная помощь в
                            этот
                            непростой период жизни.
                        </p>
                    </div>
                </div>
                <div class="about-section__preview">
                    <div class="about-section__img-wrapper">
                        <picture class="about-section__picture">
                            <img src="/assets/img/sections/about-section/preview.png" alt="" class="about-section__img">
                        </picture>
                        <p class="about-section__img-text">
                            Чтобы обратиться
                            к нам позвоните
                            по телефону
                        </p>
                        <a href="tel:88005001160" class="about-section__img-tel">8-800-500-11-60</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="guarantees guarantees_bg">
        <div class="guarantees__container container">
            <h2 class="guarantees__title section-title">
                Наши преимущества
            </h2>
            <div class="guarantees__wrapper slider-container">
                <div class="guarantees__slider slider5list swiper">
                    <div class="guarantees__slider-wrapper swiper-wrapper">
                        <div class="guarantees__card swiper-slide">
                            <img src="/assets/img/sections/advantages/speed.svg" alt="" class="guarantees__card-img"
                                 aria-label="presentation">
                            <p class="guarantees__card-descr">
                                Приезд бригады в течении 30 минут
                            </p>
                        </div>
                        <div class="guarantees__card swiper-slide">
                            <img src="/assets/img/sections/advantages/incognito.svg" alt=""
                                 class="guarantees__card-img"
                                 aria-label="presentation">
                            <p class="guarantees__card-descr">
                                Полностью
                                анонимное лечение
                            </p>
                        </div>
                        <div class="guarantees__card swiper-slide">
                            <img src="/assets/img/sections/advantages/qualification.svg" alt=""
                                 class="guarantees__card-img" aria-label="presentation">
                            <p class="guarantees__card-descr">
                                Квалифицированные врачи
                            </p>
                        </div>
                        <div class="guarantees__card swiper-slide">
                            <img src="/assets/img/sections/advantages/accounting.svg" alt=""
                                 class="guarantees__card-img"
                                 aria-label="presentation">
                            <p class="guarantees__card-descr">
                                Не ставим
                                на учет
                            </p>
                        </div>
                        <div class="guarantees__card swiper-slide">
                            <img src="/assets/img/sections/advantages/complexity.svg" alt=""
                                 class="guarantees__card-img" aria-label="presentation">
                            <p class="guarantees__card-descr">
                                Беремся за случаи любой сложности
                            </p>
                        </div>
                    </div>
                </div>
                <div class="guarantees__slider-pagination slider-pagination"></div>
            </div>
        </div>
    </section>
    <section class="guarantees section-offset">
        <div class="guarantees__container container">
            <h2 class="guarantees__title section-title">
                Наши гарантии
            </h2>
            <div class="guarantees__wrapper slider-container">
                <div class="guarantees__slider slider5list swiper">
                    <div class="guarantees__slider-wrapper swiper-wrapper">
                        <div class="guarantees__card swiper-slide">
                            <img src="/assets/img/sections/guarantees/terms.svg" alt="" class="guarantees__card-img"
                                 aria-label="presentation">
                            <p class="guarantees__card-descr">
                                Строгое соблюдение всех обязательств
                                и сроков
                            </p>
                        </div>
                        <div class="guarantees__card swiper-slide">
                            <img src="/assets/img/sections/guarantees/assistance.svg" alt=""
                                 class="guarantees__card-img"
                                 aria-label="presentation">
                            <p class="guarantees__card-descr">
                                Психологическая
                                помощь – круглосуточно
                            </p>
                        </div>
                        <div class="guarantees__card swiper-slide">
                            <img src="/assets/img/sections/guarantees/family-restoration.svg" alt=""
                                 class="guarantees__card-img" aria-label="presentation">
                            <p class="guarantees__card-descr">
                                Содействие в восстановлении семейных отношений
                            </p>
                        </div>
                        <div class="guarantees__card swiper-slide">
                            <img src="/assets/img/sections/guarantees/benefit.svg" alt="" class="guarantees__card-img"
                                 aria-label="presentation">
                            <p class="guarantees__card-descr">
                                Демократичные цены, выгодные условия расчета
                            </p>
                        </div>
                        <div class="guarantees__card swiper-slide">
                            <img src="/assets/img/sections/guarantees/psychological-help.svg" alt=""
                                 class="guarantees__card-img" aria-label="presentation">
                            <p class="guarantees__card-descr">
                                Психологическая помощь созависимым и их родственникам
                            </p>
                        </div>
                    </div>
                </div>
                <div class="guarantees__slider-pagination slider-pagination"></div>
            </div>
        </div>
    </section>
    <section class="faq section-offset">
        <div class="faq__container container">
            <h2 class="faq__title section-title">
                Ответы на частозадаваемые вопросы
            </h2>
            <ul class="faq__wrapper accor-wrapper" data-accordion-list>
                <li class="faq__accor question accor">
                    <button class="question__title accor-open" data-accordion-button>
                            <span class="question__title-text">
                              Что такое реабилитация 12 шагов
                            </span>
                        <span class="question__title-decor accor-open-decor"></span>
                    </button>
                    <div class="question__info accor-full">
                        <div class="question__info-wrapper accor-full-content" data-accordion-content>
                            <p>
                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится
                                на добровольной основе, с сохранением анонимности и без постановки на учет.
                            </p>
                            <p>
                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится
                                на добровольной основе, с сохранением анонимности и без постановки на учет.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="faq__accor question accor">
                    <button class="question__title accor-open" data-accordion-button>
                            <span class="question__title-text">
                              Что такое реабилитация 12 шагов
                            </span>
                        <span class="question__title-decor accor-open-decor"></span>
                    </button>
                    <div class="question__info accor-full">
                        <div class="question__info-wrapper accor-full-content" data-accordion-content>
                            <p>
                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится
                                на добровольной основе, с сохранением анонимности и без постановки на учет.
                            </p>
                            <p>
                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится
                                на добровольной основе, с сохранением анонимности и без постановки на учет.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="faq__accor question accor">
                    <button class="question__title accor-open" data-accordion-button>
                            <span class="question__title-text">
                              Что такое реабилитация 12 шагов
                            </span>
                        <span class="question__title-decor accor-open-decor"></span>
                    </button>
                    <div class="question__info accor-full">
                        <div class="question__info-wrapper accor-full-content" data-accordion-content>
                            <p>
                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится
                                на добровольной основе, с сохранением анонимности и без постановки на учет.
                            </p>
                            <p>
                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится
                                на добровольной основе, с сохранением анонимности и без постановки на учет.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="faq__accor question accor">
                    <button class="question__title accor-open" data-accordion-button>
                            <span class="question__title-text">
                              Что такое реабилитация 12 шагов
                            </span>
                        <span class="question__title-decor accor-open-decor"></span>
                    </button>
                    <div class="question__info accor-full">
                        <div class="question__info-wrapper accor-full-content" data-accordion-content>
                            <p>
                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится
                                на добровольной основе, с сохранением анонимности и без постановки на учет.
                            </p>
                            <p>
                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится
                                на добровольной основе, с сохранением анонимности и без постановки на учет.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="faq__accor question accor">
                    <button class="question__title accor-open" data-accordion-button>
                            <span class="question__title-text">
                              Что такое реабилитация 12 шагов
                            </span>
                        <span class="question__title-decor accor-open-decor"></span>
                    </button>
                    <div class="question__info accor-full">
                        <div class="question__info-wrapper accor-full-content" data-accordion-content>
                            <p>
                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится
                                на добровольной основе, с сохранением анонимности и без постановки на учет.
                            </p>
                            <p>
                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится
                                на добровольной основе, с сохранением анонимности и без постановки на учет.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="faq__accor question accor">
                    <button class="question__title accor-open" data-accordion-button>
                            <span class="question__title-text">
                              Что такое реабилитация 12 шагов
                            </span>
                        <span class="question__title-decor accor-open-decor"></span>
                    </button>
                    <div class="question__info accor-full">
                        <div class="question__info-wrapper accor-full-content" data-accordion-content>
                            <p>
                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится
                                на добровольной основе, с сохранением анонимности и без постановки на учет.
                            </p>
                            <p>
                                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                наркотической зависимостей. Лечение в нашей частной наркологической клинике проводится
                                на добровольной основе, с сохранением анонимности и без постановки на учет.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="specialists section-offset">
        <div class="specialists__container container">
            <h2 class="specialists__title section-title">
                Врачи нашей клиники
            </h2>
            <p class="specialists__descr section-descr">
                Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и наркотической зависимостей.
            </p>
            <div class="specialists__wrapper">
                <div class="specialists__slider swiper">
                    <div class="specialists__slider-wrapper swiper-wrapper">
                        <div class="specialists__slide specialist swiper-slide">
                            <picture class="specialist__picture">
                                <img src="/assets/img/sections/specialists/doctor-1.png" alt="" class="specialist__img">
                            </picture>
                            <p class="specialist__name">
                                Некрасов Олег Борисович
                            </p>
                            <p class="specialist__descr">
                                Стаж 39 лет, Врач нарколог
                                высшей категории
                            </p>
                            <button class="specialist__btn btn btn_bg-red-transparent">
                                <span class="btn__text">
                                    Обратиться
                                </span>
                            </button>
                        </div>
                        <div class="specialists__slide specialist swiper-slide">
                            <picture class="specialist__picture">
                                <img src="/assets/img/sections/specialists/doctor-2.png" alt="" class="specialist__img">
                            </picture>
                            <p class="specialist__name">
                                Косова Ольга Николаевна
                            </p>
                            <p class="specialist__descr">
                                Стаж 39 лет, Врач нарколог
                                высшей категории
                            </p>
                            <button class="specialist__btn btn btn_bg-red-transparent">
                                <span class="btn__text">
                                    Обратиться
                                </span>
                            </button>
                        </div>
                        <div class="specialists__slide specialist swiper-slide">
                            <picture class="specialist__picture">
                                <img src="/assets/img/sections/specialists/doctor-1.png" alt="" class="specialist__img">
                            </picture>
                            <p class="specialist__name">
                                Некрасов Олег Борисович
                            </p>
                            <p class="specialist__descr">
                                Стаж 39 лет, Врач нарколог
                                высшей категории
                            </p>
                            <button class="specialist__btn btn btn_bg-red-transparent">
                                <span class="btn__text">
                                    Обратиться
                                </span>
                            </button>
                        </div>
                        <div class="specialists__slide specialist swiper-slide">
                            <picture class="specialist__picture">
                                <img src="/assets/img/sections/specialists/doctor-2.png" alt="" class="specialist__img">
                            </picture>
                            <p class="specialist__name">
                                Косова Ольга Николаевна
                            </p>
                            <p class="specialist__descr">
                                Стаж 39 лет, Врач нарколог
                                высшей категории
                            </p>
                            <button class="specialist__btn btn btn_bg-red-transparent">
                                <span class="btn__text">
                                    Обратиться
                                </span>
                            </button>
                        </div>
                        <div class="specialists__slide specialist swiper-slide">
                            <picture class="specialist__picture">
                                <img src="/assets/img/sections/specialists/doctor-1.png" alt="" class="specialist__img">
                            </picture>
                            <p class="specialist__name">
                                Некрасов Олег Борисович
                            </p>
                            <p class="specialist__descr">
                                Стаж 39 лет, Врач нарколог
                                высшей категории
                            </p>
                            <button class="specialist__btn btn btn_bg-red-transparent">
                                <span class="btn__text">
                                    Обратиться
                                </span>
                            </button>
                        </div>
                        <div class="specialists__slide specialist swiper-slide">
                            <picture class="specialist__picture">
                                <img src="/assets/img/sections/specialists/doctor-1.png" alt="" class="specialist__img">
                            </picture>
                            <p class="specialist__name">
                                Некрасов Олег Борисович
                            </p>
                            <p class="specialist__descr">
                                Стаж 39 лет, Врач нарколог
                                высшей категории
                            </p>
                            <button class="specialist__btn btn btn_bg-red-transparent">
                                <span class="btn__text">
                                    Обратиться
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <button class="specialists__slider-button_prev slider-button slider-button_prev">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 8H1M1 8L8 15M1 8L8 1" stroke="#63728C" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="specialists__slider-button_next slider-button slider-button_next">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 8H15M15 8L8 15M15 8L8 1" stroke="#63728C" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>
    <section class="reviews section-offset">
        <div class="reviews__container container">
            <div class="reviews__top">
                <h2 class="reviews__title section-title">
                    Отзывы наших пациентов
                </h2>
                <button class="reviews__btn btn">
                        <span class="btn__text">
                            Оставить отзыв
                        </span>
                </button>
            </div>
            <div class="reviews__wrapper slider-container_for-btn">
                <div class="reviews__slider swiper">
                    <div class="reviews__slider-wrapper swiper-wrapper">
                        <div class="reviews__slide review swiper-slide">
                            <img src="/assets/img/sections/reviews/avatar-1.png" alt="" class="review__avatar">
                            <div class="review__content">
                                <p class="review__title">
                                    Аркадий, 23 года
                                </p>
                                <p class="review__text">
                                    Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                    наркотической зависимостей. Лечение в нашей частной наркологической клинике
                                    проводится на добровольной основе, с сохранением анонимности и без постановки на
                                    учет.
                                </p>
                            </div>
                        </div>
                        <div class="reviews__slide review swiper-slide">
                            <img src="/assets/img/sections/reviews/avatar-2.png" alt="" class="review__avatar">
                            <div class="review__content">
                                <p class="review__title">
                                    Андрей Иванович, 40 лет
                                </p>
                                <p class="review__text">
                                    Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                    наркотической зависимостей. Лечение в нашей частной наркологической клинике
                                    проводится на добровольной основе, с сохранением анонимности и без постановки на
                                    учет.
                                </p>
                            </div>
                        </div>
                        <div class="reviews__slide review swiper-slide">
                            <img src="/assets/img/sections/reviews/avatar-1.png" alt="" class="review__avatar">
                            <div class="review__content">
                                <p class="review__title">
                                    Аркадий, 23 года
                                </p>
                                <p class="review__text">
                                    Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                    наркотической зависимостей. Лечение в нашей частной наркологической клинике
                                    проводится на добровольной основе, с сохранением анонимности и без постановки на
                                    учет.
                                </p>
                            </div>
                        </div>
                        <div class="reviews__slide review swiper-slide">
                            <img src="/assets/img/sections/reviews/avatar-2.png" alt="" class="review__avatar">
                            <div class="review__content">
                                <p class="review__title">
                                    Андрей Иванович, 40 лет
                                </p>
                                <p class="review__text">
                                    Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                    наркотической зависимостей. Лечение в нашей частной наркологической клинике
                                    проводится на добровольной основе, с сохранением анонимности и без постановки на
                                    учет.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reviews__slider-pagination slider-pagination"></div>
                <button class="reviews__slider-button_prev slider-button slider-button_prev">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 8H1M1 8L8 15M1 8L8 1" stroke="#63728C" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="reviews__slider-button_next slider-button slider-button_next">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 8H15M15 8L8 15M15 8L8 1" stroke="#63728C" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>
    <section class="gallery section-offset">
        <div class="gallery__container container">
            <h2 class="gallery__title section-title">
                Фото нашей клиники
            </h2>
            <div class="gallery__wrapper slider-container">
                <div class="gallery__slider slider3list swiper">
                    <div class="gallery__slider-wrapper swiper-wrapper">
                        <div class="gallery__slide swiper-slide">
                            <img src="/assets/img/sections/gallery/1.png" alt="" class="gallery__slide-img">
                        </div>
                        <div class="gallery__slide swiper-slide">
                            <img src="/assets/img/sections/gallery/2.png" alt="" class="gallery__slide-img">
                        </div>
                        <div class="gallery__slide swiper-slide">
                            <img src="/assets/img/sections/gallery/3.png" alt="" class="gallery__slide-img">
                        </div>
                        <div class="gallery__slide swiper-slide">
                            <img src="/assets/img/sections/gallery/1.png" alt="" class="gallery__slide-img">
                        </div>
                        <div class="gallery__slide swiper-slide">
                            <img src="/assets/img/sections/gallery/2.png" alt="" class="gallery__slide-img">
                        </div>
                        <div class="gallery__slide swiper-slide">
                            <img src="/assets/img/sections/gallery/3.png" alt="" class="gallery__slide-img">
                        </div>
                    </div>
                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    </section>
    <section class="documents section-offset">
        <div class="documents__container container">
            <h2 class="documents__title section-title">
                Наши лицензии
            </h2>
            <div class="documents__wrapper">
                <div class="documents__slider swiper">
                    <div class="documents__slider-wrapper swiper-wrapper">
                        <picture class="documents__slide document swiper-slide">
                            <img src="/assets/img/sections/documents/1.png" alt="" class="document__img">
                        </picture>
                        <picture class="documents__slide document swiper-slide">
                            <img src="/assets/img/sections/documents/2.png" alt="" class="document__img">
                        </picture>
                        <picture class="documents__slide document swiper-slide">
                            <img src="/assets/img/sections/documents/3.png" alt="" class="document__img">
                        </picture>
                        <picture class="documents__slide document swiper-slide">
                            <img src="/assets/img/sections/documents/4.png" alt="" class="document__img">
                        </picture>
                        <picture class="documents__slide document swiper-slide">
                            <img src="/assets/img/sections/documents/1.png" alt="" class="document__img">
                        </picture>
                    </div>
                </div>
                <div class="documents__slider-pagination slider-pagination"></div>
            </div>
        </div>
    </section>
    <div class="map-section">
        <div id="map" style="width: 100%; height: 600px"></div>
        <div class="map__container container">
            <div class="map__contacts">
                <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.15" width="72" height="72" rx="24" fill="#EB5553"/>
                    <path d="M52 26.25C52 24.4625 50.56 23 48.8 23H23.2C21.44 23 20 24.4625 20 26.25M52 26.25V45.75C52 47.5375 50.56 49 48.8 49H23.2C21.44 49 20 47.5375 20 45.75V26.25M52 26.25L36 37.625L20 26.25"
                          stroke="#EB5553" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <p class="map__contacts-title">
                    Как нас найти
                </p>
                <p class="map__contacts-descr">
                    Не откладывайте свой визит!
                    Свяжитесь с нами — и мы вам поможем!
                </p>
                <ul class="map__contacts-list">
                    <li class="map__contacts-item">
                        <a href="tel:88005001160" class="map__contacts-link">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.388 4.82261C14.3232 5.00472 15.1827 5.46123 15.8565 6.1337C16.5302 6.80617 16.9876 7.66402 17.1701 8.59743M13.388 1C15.331 1.21544 17.1429 2.08388 18.5261 3.46272C19.9093 4.84157 20.7817 6.64887 21 8.58788M20.0425 16.214V19.0809C20.0436 19.3471 19.989 19.6105 19.8821 19.8544C19.7753 20.0983 19.6186 20.3172 19.4221 20.4971C19.2256 20.677 18.9937 20.814 18.7411 20.8993C18.4885 20.9845 18.2208 21.0162 17.9552 20.9922C15.0089 20.6727 12.1787 19.6678 9.69214 18.0584C7.37869 16.5911 5.4173 14.6335 3.94724 12.3245C2.32908 9.83138 1.32206 6.99289 1.00777 4.03897C0.983845 3.7747 1.01531 3.50836 1.10017 3.25689C1.18503 3.00543 1.32141 2.77435 1.50065 2.57838C1.67989 2.3824 1.89804 2.22582 2.14123 2.11861C2.38442 2.0114 2.64731 1.9559 2.91316 1.95565H5.78561C6.25028 1.95109 6.70076 2.11532 7.05309 2.41774C7.40541 2.72016 7.63554 3.14013 7.70057 3.59937C7.82181 4.51686 8.04665 5.41772 8.37081 6.28476C8.49963 6.62681 8.52751 6.99855 8.45115 7.35593C8.37478 7.71331 8.19737 8.04135 7.93994 8.30118L6.72394 9.51486C8.08697 11.9074 10.0717 13.8883 12.4688 15.2488L13.6848 14.0351C13.9452 13.7782 14.2738 13.6011 14.6319 13.5249C14.99 13.4486 15.3624 13.4765 15.7051 13.6051C16.5738 13.9286 17.4764 14.153 18.3956 14.274C18.8608 14.3395 19.2855 14.5733 19.5892 14.931C19.8928 15.2887 20.0542 15.7453 20.0425 16.214Z"
                                      stroke="#EB5553" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="map__contacts-link-text">8 (800) 500-11-60</span>
                        </a>
                    </li>
                    <li class="map__contacts-item">
                        <a href="#" class="map__contacts-link">
                            <svg width="22" height="18" viewBox="0 0 22 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.1171 17L21 1L1 8.82418L9.1982 11.8132L14.5135 6.8022L10.2793 12.2527L18.1171 17Z"
                                      stroke="#EB5553" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="map__contacts-link-text">@svyato_spb</span>
                        </a>
                    </li>
                    <li class="map__contacts-item">
                        <a href="mailto:info@svyato-klinik.ru" class="map__contacts-link">
                            <svg width="22" height="18" viewBox="0 0 22 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 3C21 1.9 20.1 1 19 1H3C1.9 1 1 1.9 1 3M21 3V15C21 16.1 20.1 17 19 17H3C1.9 17 1 16.1 1 15V3M21 3L11 10L1 3"
                                      stroke="#EB5553" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="map__contacts-link-text">info@svyato-klinik.ru</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="consultation consultation_reverse">
        <div class="consultation__container container">
            <div class="consultation__decor"></div>
            <picture class="consultation__picture">
                <img src="/assets/img/sections/consultation/person.png" alt="" class="consultation__img">
            </picture>
            <div class="consultation__content">
                <h2 class="consultation__title">
                    Получите бесплатную консультацию врача прямо сейчас! Оставьте заявку
                </h2>
                <form action="" class="consultation__form form-consultation">
                    <label class="form-consultation__label">
                        <input placeholder="Ваше имя" type="text" class="form-consultation__input">
                    </label>
                    <label class="form-consultation__label">
                        <input placeholder="Номер телефона" type="tel" class="form-consultation__input">
                    </label>
                    <button class="form-consultation-btn btn">
                        <span class="btn__text">
                            Оставить заявку
                        </span>
                    </button>
                </form>
                <a href="tel:88005001160" class="consultation__link">
                    Или позвоните: 8-800-500-11-60
                </a>
            </div>
        </div>
    </section>
</main>
<?php require_once '../footer.php'; ?>
