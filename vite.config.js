import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/_variables.scss', 
                'resources/sass/footer.scss', 
                'resources/sass/header.scss', 
                'resources/sass/common.scss', 
                'resources/sass/home/home.scss', 
                'resources/sass/home/swiper/facilities.scss', 
                'resources/sass/home/swiper/food.scss', 
                'resources/sass/home/swiper/menu.scss', 
                'resources/sass/home/swiper/rooms.scss', 
                'resources/sass/offers/offers.scss', 
                'resources/sass/offers/swiper/popular-rooms.scss', 
                'resources/sass/contact/contact.scss', 
                'resources/sass/roomdetails/roomdetails.scss', 
                'resources/sass/roomdetails/swiper/related-rooms.scss', 
                'resources/sass/rooms/rooms.scss', 
                'resources/sass/about-us/about-us.scss', 
                'resources/sass/about-us/swiper/counter.scss', 
                'resources/sass/about-us/swiper/facilities.scss', 
                'resources/js/app.js',
                'resources/js/menu.js',
                'resources/js/home.js',
                'resources/js/swiper-init.js',
                'resources/js/roomdetails.js',
                'resources/js/bootstrap.js',
            ],
            refresh: true,
        }),
    ],
});
