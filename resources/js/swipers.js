const roomSwiper = new Swiper("#rooms-swiper", {
    grabCursor: true,
    spaceBetween: 40,
    slidesPerView: 1,
    initialSlide: 1,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        1000: {
            spaceBetween: 30,
            addSlidesBefore: 1,
            slidesPerView: 3,
            centeredSlides: true,
        }
    }
});

const roomSwiperNormal = new Swiper("#rooms-swiper-normal", {
    grabCursor: true,
    spaceBetween: 40,
    slidesPerView: 1,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        1000: {
            spaceBetween: 30,
            initialSlide: 1,
            slidesPerView: 3,
            centeredSlides: true,
        }
    }
});

const coreFeaturesSwiper = new Swiper('#coreFeatures-swipper', {
    slidesPerView: 1,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1000: {
            slidesPerView: 3,
            grid: {
                rows: 2,
                fill: 'row',
            },
            spaceBetween: 100,
        }
    }
});

const coreFeaturesSwiperBlack = new Swiper('#coreFeatures-swipper-black', {
    slidesPerView: 1,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1000: {
            slidesPerView: 3,
            grid: {
                rows: 2,
                fill: 'row',
            },
            spaceBetween: 25,
        }
    }
});

const foodMenuSwipper = new Swiper('#menu-swipper', {
    slidesPerView: 1,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    spaceBetween: 40,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        1000: {
            slidesPerView: 2,
            spaceBetween: 100,
            autoHeight: true,
        }
    }
});

const foodImageSwipper = new Swiper('#images-swipper', {
    slidesPerView: 1,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1000: {
            slidesPerView: 3,
            spaceBetween: 20,
            autoHeight: true,
        }
    }
});

const aboutSwiper = new Swiper('#counter-swipper', {
    slidesPerView: 1,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1000: {
            slidesPerView: 3,
            spaceBetween: 20,
            autoHeight: true,
        }
    }
});

const paginationSwiper = new Swiper('.pagination-swiper', {
    slidesPerView: 1,
    autoHeight: true,
    grid: {
        fill: 'row',
        rows: 3
    },
    on: {
        slideChange: function() {
            let element = document.querySelector('.banner__breadcrumb');
            element.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            })
        }
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
    },
    breakpoints: {
        1000: {
            autoHeight: true
        }
    }
});

const paginationGridSwiper = new Swiper('.pagination-swiper-grid', {
    slidesPerView: 1,
    autoHeight: true,
    grid: {
        fill: 'row',
        rows: 3
    },
    on: {
        slideChange: function() {
            let element = document.querySelector('.banner__breadcrumb');
            element.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            })
        }
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
    },
    breakpoints: {
        1000: {
            slidesPerView: 3,
            grid: {
                fill: 'row',
                rows: 3
            },
            spaceBetween: 20
        }
    }
});