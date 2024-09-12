<section class="rooms">
    <div class="rooms__grid container">
        @foreach($rooms as $room) 
            <div class="rooms__grid__item">
                <div class="rooms__grid__item__features">
                    <img class="rooms__grid__item__features__icons" src="{{ asset('icon/hotel-room-features.svg') }}" alt="hotel room features">
                    <img class="rooms__grid__item__features__img" src="{{ asset('img/' . $room->image) }}" alt="{{ $room->name }}">
                </div>
                <div class="rooms__grid__item__description">
                    <h4 class="title title--black title--small">{{ $room->name }}</h4>
                    <p class="text">{{ $room->description }}</p>
                    <div>
                        <span class="rooms__grid__item__description__price">${{ $room->price }}<span>/Night</span></span>
                        <a href="{{ route('room.details', $room->id) }}"><span class="rooms__grid__item__description__booking">Booking Now</span></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
