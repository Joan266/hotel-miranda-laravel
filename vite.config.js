import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/_variables.scss', 
                'resources/sass/footer.scss', 
                'resources/sass/common.scss', 
                'resources/sass/home/home.scss', 
                'resources/sass/contact/contact.scss', 
                'resources/sass/rooms/rooms.scss', 
                'resources/sass/about-us/about-us.scss', 
                'resources/js/app.js',
                'resources/js/menu.js',
                'resources/js/swiper-init.js',
            ],
            refresh: true,
        }),
    ],
});
