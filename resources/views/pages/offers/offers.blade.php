<section class="offers container">
    @foreach ($offers as $offer)
        <article class="offer offer--mobile">
            <div class="offer__img">
                <img src="{{ asset($offer->room->roomType->image) }}" alt="{{ $offer->room->roomType->name }}">
                <span class="offer__price">
                    <span class="crossed">${{ $offer->room->roomType->price_per_night }}</span>
                    <span class="crossed night">/Night</span>
                </span>
                <span class="offer__price offer__price--discount">
                    ${{ $offer->room->roomType->price_per_night * (1 - $offer->discount_percentage / 100) }}
                    <span>/Night</span>
                </span>
            </div>
            <div class="offer__description">
                <h3 class="subtitle">{{ $offer->room->roomType->bed_type }}</h3>
                <h4 class="title title--black title--medium">
                    <a href="{{ route('roomdetails', ['id' => $offer->room->id]) }}">{{ $offer->room->roomType->name }}</a>
                </h4>
                <p class="text text--small">
                    Relax in our cozy, well-appointed room featuring modern amenities, a plush bed, free Wi-Fi, and a flat-screen TV. Enjoy a serene space perfect for unwinding or getting work done, complete with a private bathroom and complimentary toiletries. Your comfort is our priority.
                </p>
                <div class="amenities">
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
                </div>
                <a href="{{ route('roomdetails', ['id' => $offer->room->id]) }}" class="button">
                    <strong>RESERVE NOW</strong>
                </a>
            </div>
        </article>

        <article class="offer offer--desktop">
            <div class="offer__img">
                <img src="{{ asset($offer->room->roomType->image) }}" alt="{{ $offer->room->roomType->name }}">
            </div>
            <div class="offer__description">
                <div class="offer__description__row border-bottom">
                    <div>
                        <h3 class="subtitle">{{ $offer->room->roomType->bed_type }}</h3>
                        <h4 class="title title--black title--medium">
                            <a href="{{ route('roomdetails', ['id' => $offer->room->id]) }}">{{ $offer->room->roomType->name }}</a>
                        </h4>
                    </div>
                    <div>
                        <span class="offer__price">
                            <span class="crossed">${{ $offer->room->roomType->price_per_night }}</span>
                            <span class="crossed night">/Night</span>
                        </span>
                        <span class="offer__price offer__price--discount">
                            ${{ $offer->room->roomType->price_per_night * (1 - $offer->discount_percentage / 100) }}<span>/Night</span>
                        </span>
                    </div>
                </div>
                <div class="offer__description__row">
                    <div>
                        <p class="text text--small">
                            Relax in our cozy, well-appointed room featuring modern amenities, a plush bed, free Wi-Fi, and a flat-screen TV. Enjoy a serene space perfect for unwinding or getting work done, complete with a private bathroom and complimentary toiletries. Your comfort is our priority.
                        </p>
                        <a href="{{ route('roomdetails', ['id' => $offer->room->id]) }}" class="button">
                            <strong>RESERVE NOW</strong>
                        </a>
                    </div>
                    <div class="amenities">
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
                    </div>
                </div>
            </div>
        </article>
    @endforeach
</section>
