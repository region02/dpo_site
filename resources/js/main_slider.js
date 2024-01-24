import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';


const swiper = new Swiper('.swiper', {
    modules: [Navigation],
    slidesPerView: 3,
    slidesPerColumn: 1,
    slidesPerGroup :1,
    spaceBetween: 30,
    navigation: {                       //navigation(arrows)
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },


    // Navigation arrows



    on: {
        init: function () {},
        orientationchange: function(){},
        beforeResize: function(){
            let vw = window.innerWidth;
            if(vw > 1000){
                swiper.params.slidesPerView = 3
                swiper.params.slidesPerColumn = 3
                swiper.params.slidesPerGroup = 3;
            } else {
                swiper.params.slidesPerView = 4
                swiper.params.slidesPerColumn = 2
                swiper.params.slidesPerGroup =4;
            }
            swiper.init();
        },
    },

});

