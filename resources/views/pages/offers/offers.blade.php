<section class="offers container">
    @foreach ($offers as $offer)
        <article class="offer offer--mobile">
            <div class="offer__img">
                <img src="{{ asset('img/' . $offer->image) }}" alt="{{ $offer->name }}">
                <span class="offer__price">
                    <span class="crossed">${{ $offer->original_price }}</span>
                    <span class="crossed night">/Night</span>
                </span>
                <span class="offer__price offer__price--discount">${{ $offer->discount_price }}<span>/Night</span></span>
            </div>
            <div class="offer__description">
                <h3 class="subtitle">{{ strtoupper($offer->bed_type) }}</h3>
                <h4 class="title title--black title--medium">
                    <a href="{{ route('roomdetails', $offer->id) }}">{{ $offer->name }}</a>
                </h4>
                <p class="text text--small">
                    {{ $offer->description }}
                </p>
                <div class="amenities">
                    @foreach ($offer->amenities as $amenity)
                        <div class="amenities__item">
                            <img src="{{ asset($amenity->icon) }}" alt="{{ $amenity->name }}">
                            {{ $amenity->name }}
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('roomdetails', $offer->id) }}" class="button">
                    <strong>BOOK NOW</strong>
                </a>
            </div>
        </article>

        <article class="offer offer--desktop">
            <div class="offer__img">
                <img src="{{ asset('img/' . $offer->image) }}" alt="{{ $offer->name }}">
            </div>
            <div class="offer__description">
                <div class="offer__description__row border-bottom">
                    <div>
                        <h3 class="subtitle">{{ strtoupper($offer->bed_type) }}</h3>
                        <h4 class="title title--black title--medium">
                            <a href="{{ route('roomdetails', $offer->id) }}">{{ $offer->name }}</a>
                        </h4>
                    </div>
                    <div>
                        <span class="offer__price">
                            <span class="crossed">${{ $offer->original_price }}</span>
                            <span class="crossed night">/Night</span>
                        </span>
                        <span class="offer__price offer__price--discount">${{ $offer->discount_price }}<span>/Night</span></span>
                    </div>
                </div>
                <div class="offer__description__row">
                    <div>
                        <p class="text text--small">
                            {{ $offer->description }}
                        </p>
                        <a href="{{ route('roomdetails', $offer->id) }}" class="button">
                            <strong>BOOK NOW</strong>
                        </a>
                    </div>
                    <div class="amenities">
                        @foreach ($offer->amenities as $amenity)
                            <div class="amenities__item">
                                <img src="{{ asset($amenity->icon) }}" alt="{{ $amenity->name }}">
                                {{ $amenity->name }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </article>
    @endforeach
</section>
