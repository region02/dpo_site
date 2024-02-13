
import './bootstrap';
import './main_slider';
import './feedback';

import intersect from '@alpinejs/intersect'
import Alpine from 'alpinejs'

Alpine.plugin(intersect)

window.Alpine = Alpine

Alpine.start()

window.onload = function() {
    var contents1 = ["эффективное", "актуальное", "интересное", "востребованное"];
    var contents2 = ["для вас", "для партнеров", "для бизнеса", "для вузов"];
    var firstLane = document.querySelector('.first-lane');
    var lastLane = document.querySelector('.last-lane');

    setInterval(function() {
        var randomIndex1 = Math.floor(Math.random() * contents1.length);
        var randomIndex2 = Math.floor(Math.random() * contents2.length);
        firstLane.innerText = contents1[randomIndex1];
        lastLane.innerText = contents2[randomIndex2];
    }, 4000);
};






