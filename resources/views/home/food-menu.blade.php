<section class="food-menu container">
    <div class="food-menu__donut food-menu__donut--1">
        <img src="{{ asset('icon/donut_icon 1.svg') }}" alt="donut img">
    </div>
    <div class="food-menu__donut food-menu__donut--2">
        <img src="{{ asset('icon/donut_icon 2.svg') }}" alt="donut img">
    </div>
    <div class="swiper swiper--menu">
        <h3 class="subtitle">MENU</h3>
        <h4 class="title">Our Foods Menu</h4>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiper-slide__info">
                    <div class="swiper-slide__info__img">
                        <img src="{{ asset('img/eggs-bacon.webp') }}" alt="Eggs & Bacon">
                    </div>
                    <div class="swiper-slide__info__container">
                        <div class="swiper-slide__info__container__description">
                            <h5 class="swiper-slide__info__title">Eggs & Bacon</h5>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div class="swiper-slide__info__container__arrow">
                            <img src="{{ asset('icon/right-arrow_icon 1.svg') }}" alt="right arrow icon">
                        </div>
                    </div>
                </div>
                <!-- Repeat other slides as necessary -->
            </div>
            <!-- Repeat slides for more items -->
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <div class="swiper swiper--food">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="swiper-slide__img" src="{{ asset('img/slider-food-1.webp') }}" alt="food 1">
            </div>
            <div class="swiper-slide">
                <img class="swiper-slide__img" src="{{ asset('img/slider-food-2.webp') }}" alt="food 2">
            </div>
            <div class="swiper-slide">
                <img class="swiper-slide__img" src="{{ asset('img/slider-food-3.webp') }}" alt="food 3">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="non-swiper non-swiper--food">
        <div class="non-swiper__item">
            <img src="{{ asset('img/slider-food-1.webp') }}" alt="food 1">
        </div>
        <div class="non-swiper__item">
            <img src="{{ asset('img/slider-food-2.webp') }}" alt="food 2">
        </div>
        <div class="non-swiper__item">
            <img src="{{ asset('img/slider-food-3.webp') }}" alt="food 3">
        </div>
    </div>
</section>
