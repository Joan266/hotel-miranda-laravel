<section class="rooms">
    <div class="rooms__grid container">
        @foreach ($rooms as $room)
        <div class="rooms__grid__item">
            <img class="rooms__grid__item__img" src="{{ asset($room->roomType->image) }}" alt="{{ $room->roomType->name }}">
            <div class="rooms__grid__item__description">
                <img class="rooms__grid__item__description__icons" src="{{ asset('icon/hotel-room-features 1.svg') }}" alt="Hotel room features">
                <h4 class="subtitle subtitle--black subtitle--medium">{{ $room->roomType->name }}</h4>
                <h4 class="title title--black title--medium">Room#{{ $room->room_number }}</h4>
                <p class="text">
                    Relax in our cozy, well-appointed room featuring modern amenities, a plush bed, free Wi-Fi, and a flat-screen TV. Enjoy a serene space perfect for unwinding or getting work done, complete with a private bathroom and complimentary toiletries. Your comfort is our priority.
                </p>
                <div>
                    <span class="rooms__grid__item__description__price">${{ $room->roomType->price_per_night }}<span>/Night</span></span>
                    <a href="{{ route('roomdetails', ['id' => $room->id]) }}">
                        <span class="rooms__grid__item__description__booking">RESERVE NOW</span>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
