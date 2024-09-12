<section class="popular">
  <div class="container">
      <h3 class="subtitle subtitle--golden">POPULAR LIST</h3>
      <h4 class="title title--white title--medium">Popular Rooms</h4>
      <div class="swiper swiper--popular-rooms">
          <div class="swiper-wrapper">
              @foreach ([
                  ['img/room 1.webp', 'icon/hotel-room-features 1.svg', 'Minimal Duplex Room', 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.'],
                  ['img/room 1.webp', 'icon/hotel-room-features 1.svg', 'Minimal Duplex Room', 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.'],
                  ['img/room 1.webp', 'icon/hotel-room-features 1.svg', 'Minimal Duplex Room', 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.'],
                  ['img/room 1.webp', 'icon/hotel-room-features 1.svg', 'Minimal Duplex Room', 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.'],
                  ['img/room 1.webp', 'icon/hotel-room-features 1.svg', 'Minimal Duplex Room', 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.'],
                  ['img/room 1.webp', 'icon/hotel-room-features 1.svg', 'Minimal Duplex Room', 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.'],
                  ['img/room 1.webp', 'icon/hotel-room-features 1.svg', 'Minimal Duplex Room', 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.'],
                  ['img/room 1.webp', 'icon/hotel-room-features 1.svg', 'Minimal Duplex Room', 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.']
              ] as [$image, $featureIcon, $title, $description])
                  <div class="swiper-slide">
                      <img class="swiper-slide__img" src="{{ asset($image) }}" alt="room image">
                      <div class="swiper-slide__room-description">
                          <img class="swiper-slide__room-features" src="{{ asset($featureIcon) }}" alt="hotel room features">
                          <h5 class="title title--black title--small">{{ $title }}</h5>
                          <p class="text">{{ $description }}</p>
                          <div>
                              <span class="swiper-slide__room-description__price">$345<span>/Night</span></span>
                              <span class="swiper-slide__room-description__booking">
                                  <a href="{{ route('roomdetails') }}">Booking Now</a>
                              </span>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
      </div>
  </div>
</section>