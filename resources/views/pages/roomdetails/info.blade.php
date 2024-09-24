<div class="room-details__info">
    <section>
        <div class="room-details__img">
            <div class="room-details__header">
                <div>
                    <h3 class="subtitle" style="text-transform: uppercase;">{{ $room->roomType->name }}</h3>
                    <h4 class="title title--black title--medium">Room #{{ $room->room_number }}</h4>
                </div>
                <span class="room-details__price">${{ $room->roomType->price_per_night }}<span>/Night</span></span>
            </div>
            <img src="{{ asset($room->roomType->image) }}" alt="{{ $room->roomType->name }}">
        </div>

        <!-- Room Description -->
        <p class="text">  
            Relax in our cozy, well-appointed room featuring modern amenities, a plush bed, free Wi-Fi, and a flat-screen TV. Enjoy a serene space perfect for unwinding or getting work done, complete with a private bathroom and complimentary toiletries. Your comfort is our priority.
        </p>
    </section>

    <!-- Amenities Section -->
    <section class="amenities">
        <h3 class="title title--black title--small">Amenities</h3>
        <div class="amenities__grid">
            <div class="amenities__item">
                <img src="{{ asset('icon/amenities_0.svg') }}" alt="Air Conditioner" />
                Air Conditioner
            </div>
            <div class="amenities__item">
                <img src="{{ asset('icon/amenities_1.svg') }}" alt="Breakfast" />
                Breakfast
            </div>
            <div class="amenities__item">
                <img src="{{ asset('icon/amenities_2.svg') }}" alt="Cleaning" />
                Cleaning
            </div>
            <div class="amenities__item">
                <img src="{{ asset('icon/amenities_3.svg') }}" alt="Grocery" />
                Grocery
            </div>
            <div class="amenities__item">
                <img src="{{ asset('icon/amenities_4.svg') }}" alt="Shop Near" />
                Shop Near
            </div>
            <div class="amenities__item">
                <img src="{{ asset('icon/amenities_5.svg') }}" alt="Online Support" />
                24/7 Online Support
            </div>
            <div class="amenities__item">
                <img src="{{ asset('icon/amenities_6.svg') }}" alt="Smart Security" />
                Smart Security
            </div>
            <div class="amenities__item">
                <img src="{{ asset('icon/amenities_7.svg') }}" alt="WiFi" />
                High Speed WiFi
            </div>
            <div class="amenities__item">
                <img src="{{ asset('icon/amenities_8.svg') }}" alt="Kitchen" />
                Kitchen
            </div>
            <div class="amenities__item">
                <img src="{{ asset('icon/amenities_9.svg') }}" alt="Shower" />
                Shower
            </div>
            <div class="amenities__item">
                <img src="{{ asset('icon/amenities_10.svg') }}" alt="Single Bed" />
                Single Bed
            </div>
            <div class="amenities__item">
                <img src="{{ asset('icon/amenities_11.svg') }}" alt="Towels" />
                Towels
            </div>
            <div class="amenities__item">
                <img src="{{ asset('icon/amenities_12.svg') }}" alt="Strong Locker" />
                Strong Locker
            </div>
            <div class="amenities__item">
                <img src="{{ asset('icon/amenities_13.svg') }}" alt="Expert Team" />
                Expert Team
            </div>
        </div>
    </section>

    <!-- Founder Section -->
    <section class="founder">
        <div class="founder__pic">
            <div class="founder__pic__check">
                <img src="{{ asset('icon/check_mark.svg') }}" alt="check">
            </div>
        </div>
        <h3 class="title title--black title--small">Rosalina D. William</h3>
        <h4 class="subtitle subtitle--golden">FOUNDER, QUX CO.</h4>
        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </section>

    <!-- Cancellation Policy Section -->
    <section class="cancellation">
        <h3 class="title title--black title--small">Cancellation</h3>
        <p class="text">Cancel up to 14 days to get a full refund.</p>
    </section>

    <!-- Related Rooms Section -->
    <section class="related-rooms">
        <h3 class="title title--black title--small">Related Rooms</h3>
        <div class="swiper swiper--related-rooms">
            <div class="swiper-wrapper">
                @foreach($roomTypes as $roomType)
                    <div class="swiper-slide">
                        <img class="swiper-slide__img" src="{{ asset($roomType->image) }}" alt="{{ $roomType->name }}" />
                        <div class="swiper-slide__room-description">
                            <img class="swiper-slide__room-features" src="{{ asset('icon/hotel-room-features 1.svg') }}" alt="hotel room features" />
                            <h5 class="title title--black title--smaller">{{ $roomType->name }}</h5>
                            <p class="text text--small">Experience comfort and style in our elegantly designed rooms, featuring modern amenities for a perfect getaway.</p>
                            <div>
                                <span class="swiper-slide__room-description__price">${{ $roomType->price_per_night }}<span>/Night</span></span>
                                <span class="swiper-slide__room-description__booking">RESERVE NOW</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

</div>