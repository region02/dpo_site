import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';
import { Grid } from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import "swiper/css/grid";


const swiper = new Swiper('.swiper', {
    modules: [Navigation, Grid],
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },


    breakpoints: {
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
});


