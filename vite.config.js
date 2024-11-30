import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/swiper-bundle.min.css',
                'resources/js/scrollreveal.min.js',
                'resources/js/swiper-bundle.min.js',
                'resources/js/main.js',
            ],
            refresh: true,
        }),
    ],
});
