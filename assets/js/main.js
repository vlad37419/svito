function menuOpen (menuSelector) {
    menuSelector.classList.add('active');
    document.body.classList.add('lock');
}

function menuClose (menuSelector) {
    menuSelector.classList.remove('active');
    document.body.classList.remove('lock');
}

document.addEventListener("DOMContentLoaded", function () {
    // promo slider
    const promoSlider = new Swiper('.promo__slider', {
        speed: 1500,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        touchRatio: false,
        pagination: {
            el: '.promo__slider-pagination',
            type: 'bullets',
            clickable: true,
        },
    });

    // accordion
    const ACCORDION_LIST = 'data-accordion-list'
    const ACCORDION_BUTTON = 'data-accordion-button'
    const ACCORDION_ARROW = 'data-accordion-arrow'
    const ACCORDION_CONTENT = 'data-accordion-content'
    const SECTION_OPENED = 'active'
    const ICON_ROTATED = 'rotated'

    class Accordion {
        static apply(accordionNode) {
            if (!accordionNode) {
                return
            }

            const acc = new Accordion()
            acc.accordion = accordionNode
            accordionNode.onclick = acc.onClick.bind(acc)
        }

        handleClick(button) {
            const innerSection = button.nextElementSibling
            const isOpened = innerSection.classList.contains(SECTION_OPENED)

            if (isOpened) {
                this.close(innerSection)
                return
            }
            this.open(innerSection)
        }

        open(section) {
            const accordion = section.querySelector(`[${ACCORDION_CONTENT}`).closest('.accor');
            const accordionContent = section.querySelector(`[${ACCORDION_CONTENT}`)
            const accordionList = accordionContent.querySelector(`[${ACCORDION_LIST}`)
            const innerSectionHeight = accordionContent.clientHeight
            let countOfScrollHeight = 0;
            const allElementContentData = section.querySelectorAll(`[${ACCORDION_CONTENT}`)
            accordion.classList.add(SECTION_OPENED)
            section.classList.add(SECTION_OPENED)
            this.rotateIconFor(section.previousElementSibling)

            for (const item of allElementContentData) {
                countOfScrollHeight = countOfScrollHeight + item.scrollHeight;
            }

            if (accordionContent.contains(accordionList)) {
                section.style.maxHeight = `${innerSectionHeight + countOfScrollHeight}px`
                return
            }
            section.style.maxHeight = `${innerSectionHeight}px`
        }

        close(section) {
            const accordion = section.querySelector(`[${ACCORDION_CONTENT}`).closest('.accor');
            section.style.maxHeight = 0
            accordion.classList.remove(SECTION_OPENED)
            section.classList.remove(SECTION_OPENED)
            this.rotateIconFor(section.previousElementSibling)
        }

        rotateIconFor(button) {
            const rotatedIconClass = ICON_ROTATED
            const arrowElement = button.dataset.hasOwnProperty('accordionArrow') ?
                button :
                button.querySelector(`[${ACCORDION_ARROW}]`)

            if (!arrowElement) {
                return
            }

            const isOpened = arrowElement.classList.contains(rotatedIconClass)
            if (!isOpened) {
                arrowElement.classList.add(rotatedIconClass)
                return
            }
            arrowElement.classList.remove(rotatedIconClass)
        }

        onClick(event) {
            let button = event.target.closest(`[${ACCORDION_BUTTON}]`)
            if (button && button.dataset.accordionButton !== undefined) {
                this.handleClick(button)
            }
        }
    }

    const accorWrapperList = document.querySelectorAll('.accor-wrapper');

    if (accorWrapperList.length > 0) {
        accorWrapperList.forEach(function (elem) {
            Accordion.apply(elem);
            elem.querySelector('.accor-open').click();
        });
    }

    // specialists slider
    const specialistsSlider = new Swiper('.specialists__slider', {
        slidesPerView: 4,
        spaceBetween: 28,
        navigation: {
            nextEl: '.specialists__slider-button_next',
            prevEl: '.specialists__slider-button_prev',
        },
    });

    // reviews slider
    const reviewsSlider = new Swiper('.reviews__slider', {
        slidesPerView: 2,
        spaceBetween: 28,
        pagination: {
            el: '.reviews__slider-pagination',
            type: 'bullets',
            clickable: true,
        },
        navigation: {
            nextEl: '.reviews__slider-button_next',
            prevEl: '.reviews__slider-button_prev',
        },
    });

    // documents slider
    const documentsSlider = new Swiper('.documents__slider', {
        slidesPerView: 4,
        spaceBetween: 28,
        pagination: {
            el: '.documents__slider-pagination',
            type: 'bullets',
            clickable: true,
        },
    });

    document.querySelectorAll('.slider3list').forEach((swiper) => {
        const pagination = {
            el: swiper.closest('.slider-container').querySelector('.slider-pagination'),
            type: 'bullets',
            clickable: true,
        }

        const navigation = {
            nextEl: swiper.closest('.slider-container').querySelector('.slider-button_next'),
            prevEl: swiper.closest('.slider-container').querySelector('.slider-button_prev'),
        };

        const slider = new Swiper(swiper, {
            spaceBetween: 28,
            slidesPerView: 3,
            navigation,
            pagination,
        });
    });

    const mobileMenu = document.querySelector('.mobile-menu');
    const openMenuBtns = document.querySelectorAll('.open-menu');
    const closeMenuBtns = document.querySelectorAll('.close-menu');

    openMenuBtns.forEach(function (openMenuBtn) {
        openMenuBtn.addEventListener('click', function () {
            menuOpen(mobileMenu);
        })
    });

    closeMenuBtns.forEach(function (closeMenuBtn) {
        closeMenuBtn.addEventListener('click', function () {
            menuClose(mobileMenu);
        })
    });
});