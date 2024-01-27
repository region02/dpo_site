
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/main_slider.js',
                'resources/js/courses.js',
                'resources/js/feedback.js'

            ],
            refresh: true,
        }),
    ],
});
