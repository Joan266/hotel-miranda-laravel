<section class="counter container">
    <h3 class="subtitle">{{ __('COUNTER') }}</h3>
    <h4 class="title">{{ __('Some Fun Facts') }}</h4>
    <div class="facts">
        <div class="facts__item">
            <img src="{{ asset('icon/talking_icon 1.svg') }}" alt="{{ __('talking') }}">
            <div>
                <div class="facts__item__title">8000</div>
                <h5 class="facts__item__subtitle">{{ __('Happy Users') }}</h5>
            </div>
        </div>
        <div class="facts__item">
            <img src="{{ asset('icon/ok_icon 1.svg') }}" alt="{{ __('ok') }}">
            <div>
                <div class="facts__item__title">10M</div>
                <h5 class="facts__item__subtitle">{{ __('Reviews & Appreciate') }}</h5>
            </div>
        </div>
        <div class="facts__item">
            <img src="{{ asset('icon/globe_icon 1.svg') }}" alt="{{ __('graph icon') }}">
            <div>
                <div class="facts__item__title">100</div>
                <h5 class="facts__item__subtitle">{{ __('Country Coverage') }}</h5>
            </div>
        </div>
    </div>
    
    <div class="swiper swiper--counter">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="swiper-slide__img" src="{{ asset('img/slider-food-1.webp') }}" alt="{{ __('food 1') }}">
            </div>
            <div class="swiper-slide">
                <img class="swiper-slide__img" src="{{ asset('img/slider-food-2.webp') }}" alt="{{ __('food 2') }}">
            </div>
            <div class="swiper-slide">
                <img class="swiper-slide__img" src="{{ asset('img/slider-food-3.webp') }}" alt="{{ __('food 3') }}">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    
    <div class="non-swiper non-swiper--counter">
        <div class="non-swiper__item">
            <img src="{{ asset('img/slider-food-1.webp') }}" alt="{{ __('food 1') }}">
        </div>
        <div class="non-swiper__item">
            <img src="{{ asset('img/slider-food-2.webp') }}" alt="{{ __('food 2') }}">
        </div>
        <div class="non-swiper__item">
            <img src="{{ asset('img/slider-food-3.webp') }}" alt="{{ __('food 3') }}">
        </div>
    </div>
</section>
