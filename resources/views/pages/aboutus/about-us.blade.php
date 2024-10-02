<section class="about-us container">
    <div class="video">
        <video src="{{ asset('video/niña_hotel.mp4') }}" title="{{ __('Hotel Miranda Video') }}" controls autoplay muted>
            {{ __('Your browser does not support the video tag.') }}
        </video>
    </div>
    
    <p class="big-p">
        {{ __('Hello. Our hotel has been present for over 20 years. We make the best of all our customers.') }}
    </p>
    
    <div class="facilities-grid">
        <div class="facilities-grid__cell">
            <div class="facilities-grid__cell__icon">
                <img src="{{ asset('icon/coffe_icon 1.svg') }}" alt="{{ __('coffee breakfast') }}">
            </div>
            <h5 class="subtitle subtitle--black">{{ __('BREAKFAST') }}</h5>
        </div>
        
        <div class="facilities-grid__cell facilities-grid__cell--tan">
            <div class="facilities-grid__cell__icon">
                <img src="{{ asset('icon/plane_icon 1.svg') }}" alt="{{ __('plane icon') }}">
            </div>
            <h5 class="subtitle subtitle--white">{{ __('AIRPORT PICKUP') }}</h5>
        </div>
        
        <div class="facilities-grid__cell">
            <div class="facilities-grid__cell__icon">
                <img src="{{ asset('icon/city_icon 1.svg') }}" alt="{{ __('city guide') }}">
            </div>
            <h5 class="subtitle subtitle--black">{{ __('CITY GUIDE') }}</h5>
        </div>
        
        <div class="facilities-grid__cell facilities-grid__cell--exception">
            <div class="facilities-grid__cell__icon">
                <img src="{{ asset('icon/grill_icon 1.svg') }}" alt="{{ __('grill') }}">
            </div>
            <h5 class="subtitle subtitle--black">{{ __('BBQ PARTY') }}</h5>
        </div>
        
        <div class="facilities-grid__cell">
            <div class="facilities-grid__cell__icon">
                <img src="{{ asset('icon/lux-room_icon 1.svg') }}" alt="{{ __('luxury room') }}">
            </div>
            <h5 class="subtitle subtitle--black">{{ __('LUXURY ROOM') }}</h5>
        </div>
    </div>

    <div class="about-us__restaurant">
        <div class="about-us__restaurant__img">
            <img src="{{ asset('img/breakfast.webp') }}" alt="{{ __('restaurant image') }}">
        </div>
        
        <div class="about-us__restaurant__info">
            <h3 class="subtitle">{{ __('RESTAURANT') }}</h3>
            <h4 class="title title--medium">{{ __('Get Restaurant Facilities & Many Other More') }}</h4>
            <p class="text text--small">
                {{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.') }}
            </p>
            <button class="button">{{ __('TAKE A TOUR') }}</button>
        </div>
    </div>
</section>
