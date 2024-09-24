<section class="rooms">
    <div class="rooms__grid container">
        @foreach ($roomTypes as $roomType)
        <div class="rooms__grid__item">
            <div class="rooms__grid__item__features">
                <img class="rooms__grid__item__features__icons" src="{{ asset('icon/hotel-room-features 1.svg') }}" alt="Hotel room features">
                <img class="rooms__grid__item__features__img" src="{{ asset('img/' . $roomType->image) }}" alt="{{ $roomType->name }}">
            </div>
            <div class="rooms__grid__item__description">
                <h4 class="title title--black title--small">{{ $roomType->name }}</h4>
                <p class="text">
                    Relax in our cozy, well-appointed room featuring modern amenities, a plush bed, free Wi-Fi, and a flat-screen TV. Enjoy a serene space perfect for unwinding or getting work done, complete with a private bathroom and complimentary toiletries. Your comfort is our priority.
                </p>
                <div>
                    <span class="rooms__grid__item__description__price">${{ $roomType->price_per_night }}<span>/Night</span></span>
                    <a href="">
                        <span class="rooms__grid__item__description__booking">RESERVE NOW</span>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
