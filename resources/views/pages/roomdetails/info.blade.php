<div class="room-details__info">
  <section>
      <div class="room-details__img">
          <div class="room-details__header">
              <div>
                  <h3 class="subtitle">{{ strtoupper($room->roomType->name) }}</h3>
                  <h4 class="title title--black title--medium">{{ $room->name }}</h4>
              </div>
              <span class="room-details__price">${{ $room->rate }}<span>/Night</span></span>
          </div>
          <img src="{{ asset('img/' . $room->images->first()->file_path) }}" alt="{{ $room->name }}">
      </div>

     <!-- Mobile Form -->
    <form class="room-details__form room-details__form--mobile" action="{{ route('booking.store') }}" method="POST">
        @csrf
        <h5>Check Availability</h5>
        <label for="check-in">Check In</label>
        <div class="input-container">
            <input id="check-in" name="check_in" type="date" required>
        </div>
        <label for="check-out">Check Out</label>
        <div class="input-container">
            <input id="check-out" name="check_out" type="date" required>
        </div>
        <label for="fullname">Full Name</label>
        <div class="input-container">
            <input id="fullname" name="fullname" type="text" placeholder="Enter your full name" required>
        </div>
        <label for="email">Email</label>
        <div class="input-container">
            <input id="email" name="email" type="email" placeholder="Enter your email" required>
        </div>
        <label for="phone">Phone</label>
        <div class="input-container">
            <input id="phone" name="phone" type="text" placeholder="Enter your phone number" required>
        </div>

        <!-- Campo oculto para pasar la ID de la habitación -->
        <input type="hidden" name="room_id" value="{{ $room->id }}">

        <button type="submit" class="button">CHECK AVAILABILITY</button>
    </form>


      <!-- Room Description -->
      <p class="text">{{ $room->description }}</p>
  </section>

  <!-- Amenities Section -->
  <section class="amenities">
      <h3 class="title title--black title--small">Amenities</h3>
      <div class="amenities__grid">
          @foreach($room->amenities as $amenity)
          <div class="amenities__item">
              <img src="{{ asset('icon/' . $amenity->icon) }}" alt="{{ $amenity->name }}">
              {{ $amenity->name }}
          </div>
          @endforeach
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
              @foreach ($relatedRooms as $room)
                  <div class="swiper-slide">
                      <img class="swiper-slide__img" src="{{ asset('img/' . $room->images->first()->file_path) }}" alt="{{ $room->name }}">
                      <div class="swiper-slide__room-description">
                          <img class="swiper-slide__room-features" src="{{ asset('icon/hotel-room-features 1.svg') }}" alt="hotel room features">
                          <h5 class="title title--black title--smaller">{{ $room->name }}</h5>
                          <p class="text text--smaller">{{ $room->description }}</p>
                          <div>
                              <span class="swiper-slide__room-description__price">${{ $room->rate }}<span>/Night</span></span>
                              <a href="{{ route('rooms.show', $room->id) }}" class="swiper-slide__room-description__booking">Booking Now</a>
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
