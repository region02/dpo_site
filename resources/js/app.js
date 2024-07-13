
import './bootstrap';
// import './main_slider';   OMG ! NOOB MOMENT, I WAS NOOB
import './feedback';

import intersect from '@alpinejs/intersect'
import focus from '@alpinejs/focus'
import Alpine from 'alpinejs'

Alpine.plugin(intersect)
Alpine.plugin(focus)

window.Alpine = Alpine

Alpine.start()






