import Swiper from 'swiper';
import { Navigation, Grid } from 'swiper/modules';

// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import "swiper/css/grid";
import "swiper/css/effect-fade";

const getSlidesPerView = () => {
    const screenWidth = window.innerWidth;
    return screenWidth > 1800 ? 4 :
        screenWidth > 1300 ? 3 :
            screenWidth > 1000 ? 2 : 1;
}

const getGridDimensions = () => {
    const screenWidth = window.innerWidth;
    if (screenWidth > 1800) return { rows: 2, columns: 4 };
    if (screenWidth > 1300) return { rows: 2, columns: 3 };
    if (screenWidth > 1000) return { rows: 1, columns: 2 };
    return { rows: 1, columns: 1 };
}

const getVisibleSlideIndices = (currentSlide, slidesPerView, rows, columns) => {
    const visibleIndices = [];
    for (let col = 0; col < columns; col++) {
        for (let row = 0; row < rows; row++) {
            const slideIndex = (row * columns) + col + currentSlide;
            visibleIndices.push(slideIndex);
        }
    }
    return visibleIndices;
}

const swiper = new Swiper('.swiper', {
    modules: [Navigation, Grid],
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    lazyPreloadPrevNext: 2,
    lazy: true,
    breakpoints: {
        1800: {
            slidesPerView: 4,
            grid: {
                rows: 2,
                fill: 'row',
            },
        },
        1300: {
            slidesPerView: 3,
            grid: {
                rows: 2,
                fill: 'row',
            },
        },
        1000: {
            slidesPerView: 2,
            grid: {
                rows: 1,
                fill: 'row',
            },
        },
        0: {
            slidesPerView: 1,
            grid: {
                rows: 1,
                fill: 'column',
            },
        },
    },
    // on: {
    //     slideChange: function () {
    //         const slides = document.querySelectorAll('.swiper-slide');
    //         const slidesPerView = getSlidesPerView();
    //         const { rows, columns } = getGridDimensions();
    //         const currentSlide = swiper.activeIndex * slidesPerView;
    //
    //         // Удаляем дата-атрибут у всех слайдов
    //         slides.forEach(slide => {
    //             slide.removeAttribute('data-active');
    //         });
    //
    //         // Вычисляем и добавляем дата-атрибут к текущим видимым слайдам
    //         const visibleIndices = getVisibleSlideIndices(currentSlide, slidesPerView, rows, columns);
    //         visibleIndices.forEach(index => {
    //             if (slides[index]) {
    //                 slides[index].setAttribute('data-active', 'true');
    //                 console.log(slides[index]);
    //             }
    //         });
    //     },
    // },
});

// CSS styles
// const style = document.createElement('style');
// style.innerHTML = `
//     .swiper-slide {
//         opacity: 0 !important;
//         transition: opacity 0.5s ease-in-out !important;
//     }
//
//     .swiper-slide[data-active="true"] {
//         opacity: 1 !important;
//     }
// `;
// document.head.appendChild(style);
