<section class="rooms">
    <h3 class="subtitle">ROOMS</h3>
    <h4 class="title">Hand Picked Rooms</h4>
    <div class="swiper swiper--rooms">
        <div class="swiper-wrapper">
            @foreach ($roomTypes as $roomType)
            <div class="swiper-slide">
                <img class="swiper-slide__room-features" src="{{ asset('icon/hotel-room-features 1.svg') }}" alt="hotel room features">
                <img class="swiper-slide__img" src="{{ asset($roomType->image) }}" alt="{{ $roomType->name }}">
                <div class="swiper-slide__room-description">
                    <div>
                        <h5 class="title title--medium">{{ $roomType->name }}</h5>
                        <p class="text">
                            Relax in our cozy, well-appointed room featuring modern amenities, a plush bed, free Wi-Fi, and a flat-screen TV. Enjoy a serene space perfect for unwinding or getting work done, complete with a private bathroom and complimentary toiletries.
                        </p>
                    </div>
                    <span class="swiper-slide__room-description__price">${{ $roomType->price_per_night }}<span>/Night</span></span>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>
