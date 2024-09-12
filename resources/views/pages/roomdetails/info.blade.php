<div class="room-details__info">
  <section>
      <div class="room-details__img">
          <div class="room-details__header">
              <div>
                  <h3 class="subtitle">DOUBLE BED</h3>
                  <h4 class="title title--black title--medium">Luxury Double Bed</h4>
              </div>
              <span class="room-details__price">$345<span>/Night</span></span>
          </div>
          <img src="{{ asset('img/room 1.webp') }}" alt="hotel room">
      </div>

      <!-- Mobile Form -->
      <form class="room-details__form room-details__form--mobile">
          <h5>Check Availability</h5>
          <label for="check-in">Check In</label>
          <div class="input-container">
              <input id="check-in" type="date">
          </div>
          <label for="check-out">Check Out</label>
          <div class="input-container">
              <input id="check-out" type="date" placeholder="">
          </div>
          <label for="fullname">Full Name</label>
          <div class="input-container">
              <input id="fullname" type="text" placeholder="Enter your full name">
          </div>
          <label for="email">Email</label>
          <div class="input-container">
              <input id="email" type="email" placeholder="Enter your email">
          </div>
          <label for="phone">Phone</label>
          <div class="input-container">
              <input id="phone" type="text" placeholder="Enter your phone number">
          </div>
          <a class="button">CHECK AVAILABILITY</a>
      </form>

      <!-- Room Description -->
      <p class="text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
          ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
          anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
          laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
          dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
          consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
          ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
          labore et dolore magnam aliquam quaerat voluptatem.
      </p>
  </section>

  <!-- Amenities Section -->
  <section class="amenities">
      <h3 class="title title--black title--small">Amenities</h3>
      <div class="amenities__grid">
          <div class="amenities__item">
              <img src="{{ asset('icon/amenities 0.svg') }}" alt="air conditioner">
              Air Conditioner
          </div>
          <div class="amenities__item">
              <img src="{{ asset('icon/amenities 1.svg') }}" alt="Breakfast">
              Breakfast
          </div>
          <div class="amenities__item">
              <img src="{{ asset('icon/amenities 2.svg') }}" alt="Cleaning">
              Cleaning
          </div>
          <div class="amenities__item">
              <img src="{{ asset('icon/amenities 3.svg') }}" alt="Grocery">
              Grocery
          </div>
          <div class="amenities__item">
              <img src="{{ asset('icon/amenities 4.svg') }}" alt="Shop near">
              Shop near
          </div>
          <div class="amenities__item">
              <img src="{{ asset('icon/amenities 5.svg') }}" alt="Online Support">
              24/7 Online Support
          </div>
          <div class="amenities__item">
              <img src="{{ asset('icon/amenities 6.svg') }}" alt="Smart Security">
              Smart Security
          </div>
          <div class="amenities__item">
              <img src="{{ asset('icon/amenities 7.svg') }}" alt="Wifi">
              High speed WiFi
          </div>
          <div class="amenities__item">
              <img src="{{ asset('icon/amenities 8.svg') }}" alt="Kitchen">
              Kitchen
          </div>
          <div class="amenities__item">
              <img src="{{ asset('icon/amenities 9.svg') }}" alt="Shower">
              Shower
          </div>
          <div class="amenities__item">
              <img src="{{ asset('icon/amenities 10.svg') }}" alt="Single bed">
              Single bed
          </div>
          <div class="amenities__item">
              <img src="{{ asset('icon/amenities 11.svg') }}" alt="Towels">
              Towels
          </div>
          <div class="amenities__item">
              <img src="{{ asset('icon/amenities 12.svg') }}" alt="Strong Locker">
              Strong Locker
          </div>
          <div class="amenities__item">
              <img src="{{ asset('icon/amenities 13.svg') }}" alt="Expert Team">
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
      <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
          labore et dolore.</p>
  </section>

  <!-- Cancellation Policy Section -->
  <section class="cancellation">
      <h3 class="title title--black title--small">Cancellation</h3>
      <p class="text">Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis,
          consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to
          get a full refund.</p>
  </section>

  <!-- Related Rooms Section -->
  <section class="related-rooms">
      <h3 class="title title--black title--small">Related Rooms</h3>
      <div class="swiper swiper--related-rooms">
          <div class="swiper-wrapper">
              @foreach ($relatedRooms as $room)
                  <div class="swiper-slide">
                      <img class="swiper-slide__img" src="{{ asset('img/' . $room->image) }}" alt="{{ $room->name }}">
                      <div class="swiper-slide__room-description">
                          <img class="swiper-slide__room-features" src="{{ asset('icon/hotel-room-features 1.svg') }}" alt="hotel room features">
                          <h5 class="title title--black title--smaller">{{ $room->name }}</h5>
                          <p class="text text--smaller">{{ $room->description }}</p>
                          <div>
                              <span class="swiper-slide__room-description__price">${{ $room->price }}<span>/Night</span></span>
                              <span class="swiper-slide__room-description__booking">Booking Now</span>
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