<?php require_once 'header.php'; ?>
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
            <div class="promo__content content-body">
                <h1 class="promo__title section-title">
                    Наркологическая клиника
                    «Свято» в Санкт-Петербурге
                </h1>
                <p>
                    Мы поможем вам и вашим близким победить зависимость раз
                    и навсегда. Мы подберем лечение, основанное на новейших методиках и подходящее именно вам.
                </p>
                <ul>
                    <li>
                        Гарантируем терапию европейского качества
                    </li>
                    <li>
                        Обращение к нам анонимно, без постановки на учет
                    </li>
                    <li>
                        Приезд бригады через 30 минут после обращения
                    </li>
                    <li>
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
                            <svg width="30" height="34" viewBox="0 0 30 34" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.4123 14.6503C21.7831 14.6503 22.2866 14.356 22.6381 13.8511M22.6381 13.8511C22.9419 13.4149 23.1322 12.8214 23.0255 12.1249M22.6381 13.8511C23.1446 13.8511 24.1997 13.8379 25.1982 13.4816M25.1982 13.4816C26.3876 13.0572 27.4968 12.146 27.5028 10.1908M25.1982 13.4816V14.6503C25.1982 15.5367 24.6293 17.2159 22.4739 17.5606C22.0194 17.6333 21.6023 18.0105 21.3374 18.3868C20.9882 18.8828 20.3409 19.3816 19.4038 19.3816C17.9223 19.3816 17.1651 18.1988 17.1651 17.8791L17.198 2.5025C17.198 2.18282 16.4408 1 14.9593 1C14.0222 1 13.3749 1.49877 13.0257 1.99479C12.7607 2.37112 12.3436 2.74835 11.8892 2.82103C9.73374 3.16573 9.16484 4.84489 9.16484 5.73127V6.90004M27.5028 10.1908C27.5028 10.1855 27.5028 10.1802 27.5028 10.1748M27.5028 10.1908C27.4968 8.23561 26.3876 7.32446 25.1982 6.90004M27.5028 10.1908C27.5028 10.1961 27.5028 10.2015 27.5028 10.2068M21.4123 5.73127C21.7831 5.73127 22.2866 6.02563 22.6381 6.53047M22.6381 6.53047C22.9419 6.96675 23.1322 7.56022 23.0255 8.25674M22.6381 6.53047C23.1446 6.53047 24.1997 6.54375 25.1982 6.90004M25.1982 6.90004V5.73127C25.1982 4.84489 24.6293 3.16573 22.4739 2.82103C22.0194 2.74835 21.6023 2.37112 21.3374 1.99479C20.9882 1.49877 20.3409 1 19.4038 1C17.9223 1 17.1651 2.18282 17.1651 2.5025M12.9508 14.6503C12.5799 14.6503 12.0765 14.356 11.7249 13.8511M11.7249 13.8511C11.4212 13.4149 11.2308 12.8214 11.3376 12.1249M11.7249 13.8511C11.2184 13.8511 10.1634 13.8379 9.16484 13.4816M9.16484 13.4816C7.97543 13.0572 6.86629 12.146 6.86028 10.1908M9.16484 13.4816V14.6503C9.16484 15.5367 9.73374 17.2159 11.8892 17.5606C12.3436 17.6333 12.7607 18.0105 13.0257 18.3868C13.3749 18.8828 14.0222 19.3816 14.9593 19.3816C16.4408 19.3816 17.198 18.1988 17.198 17.8791M6.86028 10.1908C6.86026 10.1855 6.86025 10.1802 6.86025 10.1748M6.86028 10.1908C6.86629 8.23561 7.97543 7.32446 9.16484 6.90004M6.86028 10.1908C6.86026 10.1961 6.86025 10.2015 6.86025 10.2068M12.9508 5.73127C12.5799 5.73127 12.0765 6.02563 11.7249 6.53047M11.7249 6.53047C11.4212 6.96675 11.2308 7.56022 11.3376 8.25674M11.7249 6.53047C11.2184 6.53047 10.1634 6.54375 9.16484 6.90004M4.12766 25.4555C5.18119 24.1235 8.27593 21.4595 12.2267 21.4595C14.3996 21.4595 14.6959 21.5235 15.1897 21.6833C15.5848 21.8112 17.9662 22.7596 19.1075 23.2178C19.5136 23.4309 20.2401 24.0745 19.8977 24.9441M4.12766 25.4555L9.19777 29.4835M4.12766 25.4555L3.88899 25.2925C3.52408 25.0431 3.02798 25.122 2.75844 25.4723L1.49746 27.1108C1.22101 27.4701 1.28239 27.9844 1.6356 28.2684L6.89384 32.4974C7.24277 32.7781 7.75108 32.7328 8.04492 32.3949L9.44284 30.7875C9.75675 30.4265 9.70302 29.876 9.32525 29.5825L9.19777 29.4835M19.8977 24.9441C19.4697 26.031 18.7124 25.9351 18.3174 25.8711C18.0013 25.82 15.5738 25.1678 14.3996 24.8482M19.8977 24.9441L27.1077 22.962C27.5687 22.8768 28.5761 22.9556 28.9185 23.953C29.3465 25.1998 27.9637 25.9351 27.6674 26.0629C27.4304 26.1652 22.0596 28.5351 19.4038 29.7073C18.8332 29.9311 17.3297 30.2444 15.8811 29.7073C14.4325 29.1702 13.1046 28.6523 12.6217 28.4605C12.1937 28.3433 11.1995 28.1792 10.6464 28.4605C10.0933 28.7419 9.45017 29.2597 9.19777 29.4835"
                                      stroke="#EB5553" stroke-width="1.66667" stroke-linecap="round"
                                      stroke-linejoin="round"/>
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
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.2604 10.493C13.3537 7.31795 16.2416 4.36689 17.3485 3.27174C20.0105 0.63801 23.0895 0.0783417 26.0723 2.745C29.844 6.7746 27.6438 10.6352 26.0723 12.0618L18.9521 19.3547M10.2604 10.493C7.40237 13.4266 4.36892 16.5514 2.40256 18.5803C1.34415 19.8972 -0.137608 23.3408 2.40256 26.5803C5.57776 30.6296 9.90759 28.6187 11.1584 27.3375L18.9521 19.3547M10.2604 10.493L18.9521 19.3547M25.8798 33C29.8122 33 33 29.7278 33 25.6914C33 21.655 29.8122 18.3828 25.8798 18.3828M25.8798 33C21.9475 33 18.7597 29.7278 18.7597 25.6914C18.7597 21.655 21.9475 18.3828 25.8798 18.3828M25.8798 33V18.3828"
                                      stroke="#FFC531" stroke-width="1.66667" stroke-linecap="round"
                                      stroke-linejoin="round"/>
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
                            <svg width="26" height="34" viewBox="0 0 26 34" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.48204 4.2837V4.2837C4.22176 4.2837 4.01076 4.0727 4.01076 3.81243V1.83333C4.01076 1.3731 4.38386 1 4.8441 1H7.82277C8.28301 1 8.6561 1.3731 8.6561 1.83333V3.87976C8.6561 4.10285 8.47525 4.2837 8.25216 4.2837V4.2837M4.48204 4.2837V4.73441C4.53585 6.00038 3.97239 8.9189 1.36008 10.8369C1.14737 10.9931 1.01075 11.231 1.00881 11.4948C1.00332 12.2405 1.00077 13.9007 1.00015 16.0342M4.48204 4.2837H8.25216M8.25216 4.2837V4.73441C8.204 7.84317 10.054 9.93101 11.2804 10.8138C11.5234 10.9887 11.6857 11.2613 11.6857 11.5606V20.831M1.00015 16.0342L11.6857 20.831M1.00015 16.0342C0.999829 17.1492 1.00004 18.3936 1.00063 19.7042M11.6857 20.831V24.4366M1.00063 19.7042C1.00253 23.8616 1.00834 28.6864 1.01359 32.1691C1.01428 32.6288 1.38717 33 1.84689 33H10.8523C11.3126 33 11.6857 32.6269 11.6857 32.1667V24.4366M1.00063 19.7042L11.6857 24.4366M3.2702 30.4567H9.363M16.3769 26.3682L16.2073 24.711C16.157 24.2197 16.5425 23.7928 17.0363 23.7928H24.0804C24.573 23.7928 24.958 24.2177 24.9097 24.708L24.7458 26.3682M16.3769 26.3682L16.9792 32.2515C17.0227 32.6767 17.3808 33 17.8082 33H23.336C23.7645 33 24.1232 32.675 24.1653 32.2485L24.7458 26.3682M16.3769 26.3682H24.7458"
                                      stroke="#EB5553" stroke-width="1.66667" stroke-linecap="round"
                                      stroke-linejoin="round"/>
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
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.81928 28.4452C8.70359 31.2632 12.649 33 17 33C25.8366 33 33 25.8366 33 17C33 12.6812 31.2889 8.76205 28.5076 5.88353M5.81928 28.4452C2.8458 25.54 1 21.4855 1 17C1 8.16344 8.16344 1 17 1C21.5178 1 25.5982 2.87241 28.5076 5.88353M5.81928 28.4452L12.8554 21.4483M28.5076 5.88353L12.8554 21.4483M12.8554 21.4483V17C12.7162 16.1004 13.061 13.9863 15.5542 12.7269C15.5542 10.7992 15.5542 8.23962 15.5542 7.2008H18.5422V12.7269C19.4418 13.0054 21.241 14.2498 21.241 17C21.241 19.7502 21.241 24.7216 21.241 26.8635H12.8554V21.4483Z"
                                      stroke="#FFC531" stroke-width="1.66667" stroke-linecap="round"
                                      stroke-linejoin="round"/>
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
                            <svg width="34" height="32" viewBox="0 0 34 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.1318 19.7461C27.0829 17.756 28.2829 15.0487 28.2829 12.0658C28.2829 5.95434 23.2456 1 17.0319 1C10.8181 1 5.78088 5.95434 5.78088 12.0658C5.78088 15.0487 6.98088 17.756 8.93197 19.7461M25.1318 19.7461C23.5263 21.3836 21.4123 22.5356 19.0398 22.9559L17.0319 26.4974L15.0239 22.9559C12.6514 22.5356 10.5374 21.3836 8.93197 19.7461M25.1318 19.7461H29.7809L33 31H1L4.31474 19.7461H8.93197M21.7171 10.3417V13.9154H18.8486V16.7367H15.2151V13.9154H12.3466V10.3417H15.2151V7.52038H18.8486V10.3417H21.7171Z"
                                      stroke="#EB5553" stroke-width="1.66667" stroke-linecap="round"
                                      stroke-linejoin="round"/>
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
                            <svg width="34" height="24" viewBox="0 0 34 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.4444 17.6667L32.4199 10.5447C32.7407 10.2171 32.7366 9.69178 32.4107 9.36923L24.5416 1.58304C24.2157 1.26054 23.6905 1.26193 23.3662 1.58615L20.619 4.33333M25.4444 17.6667C25.5276 16.7405 25.2816 15.2347 24.2064 13.9566M25.4444 17.6667C25.4444 20.1111 23.2857 23 19.9841 23C17.6613 23 15.9539 21.625 15.1729 20.6889C14.9944 20.475 14.7374 20.3333 14.4588 20.3333H11.846C11.5569 20.3333 11.2924 20.486 11.12 20.718C10.1507 22.0224 8.5222 23 6.52381 23C2.07937 23 1 18.619 1 17.5397C1 13.4 4.34392 11.963 6.01587 11.7619H7.66667M13.1905 11.7619H19.8546C19.8985 11.7619 19.9425 11.7653 19.9859 11.7725C20.2051 11.8089 20.4161 11.8511 20.619 11.8987M13.1905 11.7619L13.4762 11.4762M13.1905 11.7619H7.66667M20.619 11.8987L20.2597 9.61354C20.2454 9.5226 20.2447 9.42988 20.2678 9.34078C20.415 8.77465 20.9237 7.85714 22.0476 7.85714C23.1603 7.85714 23.6467 8.46654 23.7911 9.24034C23.8805 9.71961 24.2491 10.1312 24.723 10.2457C25.43 10.4164 26.1746 10.8504 26.1746 11.8987C26.1746 13.1353 24.8624 13.7859 24.2064 13.9566M20.619 11.8987C22.322 12.2975 23.4626 13.0726 24.2064 13.9566M15.8889 9.06349C15.3386 8.53439 14.2381 7.21587 14.2381 6.1746C14.2381 6.96825 12.619 9.69841 11.254 9.69841C11.7619 9.69841 13.2857 11.1905 13.4762 11.4762M15.8889 9.06349L13.4762 11.4762M15.8889 9.06349L20.619 4.33333M7.66667 11.7619V2.05556C7.66667 1.59532 8.03976 1.22222 8.5 1.22222H19.7857C20.246 1.22222 20.619 1.59532 20.619 2.05556V4.33333M20.4286 15.0317C20.4286 15.3473 20.1727 15.6032 19.8571 15.6032C19.5416 15.6032 19.2857 15.3473 19.2857 15.0317C19.2857 14.7162 19.5416 14.4603 19.8571 14.4603C20.1727 14.4603 20.4286 14.7162 20.4286 15.0317ZM20.4286 19.6667C20.4286 19.9823 20.1727 20.2381 19.8571 20.2381C19.5416 20.2381 19.2857 19.9823 19.2857 19.6667C19.2857 19.3511 19.5416 19.0952 19.8571 19.0952C20.1727 19.0952 20.4286 19.3511 20.4286 19.6667ZM22.7143 17.381C22.7143 17.6965 22.4584 17.9524 22.1429 17.9524C21.8273 17.9524 21.5714 17.6965 21.5714 17.381C21.5714 17.0654 21.8273 16.8095 22.1429 16.8095C22.4584 16.8095 22.7143 17.0654 22.7143 17.381ZM18.1429 17.381C18.1429 17.6965 17.887 17.9524 17.5714 17.9524C17.2558 17.9524 17 17.6965 17 17.381C17 17.0654 17.2558 16.8095 17.5714 16.8095C17.887 16.8095 18.1429 17.0654 18.1429 17.381ZM5.63492 15.5V15.1032C5.63492 14.6429 6.00802 14.2698 6.46825 14.2698H6.64286C7.1031 14.2698 7.47619 14.6429 7.47619 15.1032V15.5C7.47619 15.9602 7.84929 16.3333 8.30952 16.3333H8.70635C9.16659 16.3333 9.53968 16.7064 9.53968 17.1667V17.3413C9.53968 17.8015 9.16659 18.1746 8.70635 18.1746H8.30952C7.84929 18.1746 7.47619 18.5477 7.47619 19.0079V19.4048C7.47619 19.865 7.10309 20.2381 6.64286 20.2381H6.46825C6.00802 20.2381 5.63492 19.865 5.63492 19.4048V19.0079C5.63492 18.5477 5.26182 18.1746 4.80159 18.1746H4.40476C3.94452 18.1746 3.57143 17.8015 3.57143 17.3413V17.1667C3.57143 16.7064 3.94452 16.3333 4.40476 16.3333H4.80159C5.26182 16.3333 5.63492 15.9602 5.63492 15.5Z"
                                      stroke="#FFC531" stroke-width="1.66667" stroke-linecap="round"
                                      stroke-linejoin="round"/>
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
    <section class="about section-offset">
        <div class="about__container container">
            <div class="about__content">
                <h2>
                    Частный наркологический
                    и психиатрический стационар
                    в Санкт-Петербурге
                </h2>
                <p>
                    Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и наркотической
                    зависимостей.
                    Лечение в нашей частной наркологической клинике проводится на добровольной основе, с сохранением
                    анонимности и без постановки на учет.
                </p>
                <h3>
                    Круглосуточная помощь
                </h3>
                <p>
                    Врачи выездной службы работают во всех районах Санкт-Петербурга. Вызов врача и госпитализация в
                    стационар проводятся круглосуточно.
                </p>
                <ul>
                    <li>
                        Выведение из запоя
                    </li>
                    <li>
                        Алкогольная зависимость
                    </li>
                    <li>
                        Наркотическая зависимость
                    </li>
                </ul>
            </div>
            <div class="about__img-wrapper">
                <picture class="about__picture">
                    <img src="/assets/img/sections/about/doctor.png" alt="" class="about__img">
                </picture>
                <div class="about__img-badge">
                    <p class="about__img-badge-name">
                        Олег Борисович
                    </p>
                    <p class="about__img-badge-role">
                        Глав. врач нарколог клиники «Свято»
                    </p>
                </div>
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
    <section class="about-section section-offset">
        <div class="about-section__container container">
            <h2 class="about-section__title section-title">
                Наша наркологическая
                клиника «Свято» в Санкт-Петербурге
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
                    <p class="about-section__preview-text">
                        Наркологическая
                        клиника «Свято» Санкт-Петербург
                    </p>
                </div>
            </div>
            <a href="#" class="about-section__btn btn">
                <span class="btn__text">
                    Подробнее о клинике
                </span>
            </a>
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
    <section class="guarantees guarantees_bg section-offset">
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
    <section class="articles section-offset">
        <div class="articles__container container">
            <h2 class="articles__title section-title">
                Наши статьи
            </h2>
            <div class="articles__wrapper slider-container slider-container_for-btn">
                <div class="articles__slider slider3list swiper">
                    <div class="articles__slider-wrapper swiper-wrapper">
                        <div class="articles__slide article-card swiper-slide">
                            <div class="article-card__img-wrapper">
                                <picture class="article-card__picture">
                                    <img src="/assets/img/sections/articles/1.png" alt="" class="article-card__img">
                                </picture>
                                <p class="article-card__date">
                                    12.12.2022
                                </p>
                            </div>
                            <div class="article-card__content">
                                <p class="article-card__title">
                                    Алкогольный делирий
                                </p>
                                <p class="article-card__descr">
                                    Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                    наркотической.
                                </p>
                                <a href="#" class="article-card__btn btn btn_bg-red-transparent">
                                    <span class="btn__text">Подробнее</span>
                                </a>
                            </div>
                        </div>
                        <div class="articles__slide article-card swiper-slide">
                            <div class="article-card__img-wrapper">
                                <picture class="article-card__picture">
                                    <img src="/assets/img/sections/articles/1.png" alt="" class="article-card__img">
                                </picture>
                                <p class="article-card__date">
                                    12.12.2022
                                </p>
                            </div>
                            <div class="article-card__content">
                                <p class="article-card__title">
                                    Алкогольный делирий
                                </p>
                                <p class="article-card__descr">
                                    Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                    наркотической.
                                </p>
                                <a href="#" class="article-card__btn btn btn_bg-red-transparent">
                                    <span class="btn__text">Подробнее</span>
                                </a>
                            </div>
                        </div>
                        <div class="articles__slide article-card swiper-slide">
                            <div class="article-card__img-wrapper">
                                <picture class="article-card__picture">
                                    <img src="/assets/img/sections/articles/1.png" alt="" class="article-card__img">
                                </picture>
                                <p class="article-card__date">
                                    12.12.2022
                                </p>
                            </div>
                            <div class="article-card__content">
                                <p class="article-card__title">
                                    Алкогольный делирий
                                </p>
                                <p class="article-card__descr">
                                    Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                    наркотической.
                                </p>
                                <a href="#" class="article-card__btn btn btn_bg-red-transparent">
                                    <span class="btn__text">Подробнее</span>
                                </a>
                            </div>
                        </div>
                        <div class="articles__slide article-card swiper-slide">
                            <div class="article-card__img-wrapper">
                                <picture class="article-card__picture">
                                    <img src="/assets/img/sections/articles/1.png" alt="" class="article-card__img">
                                </picture>
                                <p class="article-card__date">
                                    12.12.2022
                                </p>
                            </div>
                            <div class="article-card__content">
                                <p class="article-card__title">
                                    Алкогольный делирий
                                </p>
                                <p class="article-card__descr">
                                    Мы проводим амбулаторное и стационарное лечение алкогольной, лекарственной и
                                    наркотической.
                                </p>
                                <a href="#" class="article-card__btn btn btn_bg-red-transparent">
                                    <span class="btn__text">Подробнее</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-pagination"></div>
                <button class="slider-button slider-button_prev">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 8H1M1 8L8 15M1 8L8 1" stroke="#63728C" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="slider-button slider-button_next">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 8H15M15 8L8 15M15 8L8 1" stroke="#63728C" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>
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
    <section class="centers">
        <div class="centers__container container">
            <h2 class="centers__title section-title">
                Наши реабилитационные центры
            </h2>
            <div class="centers__wrapper slider-container slider-container_for-btn">
                <div class="centers__slider slider3list swiper">
                    <div class="centers__slider-wrapper swiper-wrapper">
                        <div class="centers__slide center swiper-slide">
                            <picture class="center__picture">
                                <img src="/assets/img/sections/centers/1.png" alt="" class="center__img">
                            </picture>
                            <div class="center__content">
                                <p class="center__title">90 000 руб./мес</p>
                                <p class="center__city">Москва</p>
                                <p class="center__address">ул. Зеленая, д. 10</p>
                                <button class="center__btn btn">
                                    <span class="btn__text">Записаться на прием </span>
                                </button>
                            </div>
                        </div>
                        <div class="centers__slide center swiper-slide">
                            <picture class="center__picture">
                                <img src="/assets/img/sections/centers/2.png" alt="" class="center__img">
                            </picture>
                            <div class="center__content">
                                <p class="center__title">90 000 руб./мес</p>
                                <p class="center__city">Москва</p>
                                <p class="center__address">ул. Зеленая, д. 10</p>
                                <button class="center__btn btn">
                                    <span class="btn__text">Записаться на прием </span>
                                </button>
                            </div>
                        </div>
                        <div class="centers__slide center swiper-slide">
                            <picture class="center__picture">
                                <img src="/assets/img/sections/centers/3.png" alt="" class="center__img">
                            </picture>
                            <div class="center__content">
                                <p class="center__title">90 000 руб./мес</p>
                                <p class="center__city">Москва</p>
                                <p class="center__address">ул. Зеленая, д. 10</p>
                                <button class="center__btn btn">
                                    <span class="btn__text">Записаться на прием </span>
                                </button>
                            </div>
                        </div>
                        <div class="centers__slide center swiper-slide">
                            <picture class="center__picture">
                                <img src="/assets/img/sections/centers/1.png" alt="" class="center__img">
                            </picture>
                            <div class="center__content">
                                <p class="center__title">90 000 руб./мес</p>
                                <p class="center__city">Москва</p>
                                <p class="center__address">ул. Зеленая, д. 10</p>
                                <button class="center__btn btn">
                                    <span class="btn__text">Записаться на прием </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="slider-button slider-button_prev">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 8H1M1 8L8 15M1 8L8 1" stroke="#63728C" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="slider-button slider-button_next">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 8H15M15 8L8 15M15 8L8 1" stroke="#63728C" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>
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
<?php require_once 'footer.php'; ?>
