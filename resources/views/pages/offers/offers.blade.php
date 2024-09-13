<section class="offers container">
  <article class="offer offer--mobile">
      <div class="offer__img">
          <img src="{{ asset('img/room 1.webp') }}" alt="room 1">
          <span class="offer__price">
              <span class="crossed">$500</span>
              <span class="crossed night">/Night</span>
          </span>
          <span class="offer__price offer__price--discount">$345<span>/Night</span></span>
      </div>
      <div class="offer__description">
          <h3 class="subtitle">DOUBLE BED</h3>
          <h4 class="title title--black title--medium">
              <a href="{{ route('roomdetails') }}">Double Bed</a>
          </h4>
          <p class="text text--small">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <div class="amenities">
              @foreach ([
                  ['icon/amenities 0.svg', 'Air Conditioner'],
                  ['icon/amenities 1.svg', 'Breakfast'],
                  ['icon/amenities 2.svg', 'Cleaning'],
                  ['icon/amenities 3.svg', 'Grocery'],
                  ['icon/amenities 4.svg', 'Shop near'],
                  ['icon/amenities 11.svg', 'Towels'],
                  ['icon/amenities 6.svg', 'Smart Security'],
                  ['icon/amenities 7.svg', 'High speed WiFi'],
                  ['icon/amenities 8.svg', 'Kitchen'],
                  ['icon/amenities 9.svg', 'Shower']
              ] as [$icon, $label])
                  <div class="amenities__item">
                      <img src="{{ asset($icon) }}" alt="{{ $label }}">
                      {{ $label }}
                  </div>
              @endforeach
          </div>
          <a href="{{ route('roomdetails') }}" class="button">
              <strong>BOOK NOW</strong>
          </a>
      </div>
  </article>
  <article class="offer offer--desktop">
      <div class="offer__img">
          <img src="{{ asset('img/room 1.webp') }}" alt="room 1">
      </div>
      <div class="offer__description">
          <div class="offer__description__row border-bottom">
              <div>
                  <h3 class="subtitle">DOUBLE BED</h3>
                  <h4 class="title title--black title--medium">
                      <a href="{{ route('roomdetails') }}">Luxury Double Bed</a>
                  </h4>
              </div>
              <div>
                  <span class="offer__price">
                      <span class="crossed">$500</span>
                      <span class="crossed night">/Night</span>
                  </span>
                  <span class="offer__price offer__price--discount">$345<span>/Night</span></span>
              </div>
          </div>
          <div class="offer__description__row">
              <div>
                  <p class="text text--small">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                  <a href="{{ route('roomdetails') }}" class="button">
                      <strong>BOOK NOW</strong>
                  </a>
              </div>
              <div class="amenities">
                  @foreach ([
                      ['icon/amenities 0.svg', 'Air Conditioner'],
                      ['icon/amenities 1.svg', 'Breakfast'],
                      ['icon/amenities 2.svg', 'Cleaning'],
                      ['icon/amenities 3.svg', 'Grocery'],
                      ['icon/amenities 4.svg', 'Shop near'],
                      ['icon/amenities 11.svg', 'Towels'],
                      ['icon/amenities 6.svg', 'Smart Security'],
                      ['icon/amenities 7.svg', 'High speed WiFi'],
                      ['icon/amenities 8.svg', 'Kitchen'],
                      ['icon/amenities 9.svg', 'Shower']
                  ] as [$icon, $label])
                      <div class="amenities__item">
                          <img src="{{ asset($icon) }}" alt="{{ $label }}">
                          {{ $label }}
                      </div>
                  @endforeach
              </div>
          </div>
      </div>
  </article>
  <article class="offer offer--mobile">
      <div class="offer__img">
          <img src="{{ asset('img/room 1.webp') }}" alt="room 1">
          <span class="offer__price">
              <span class="crossed">$500</span>
              <span class="crossed night">/Night</span>
          </span>
          <span class="offer__price offer__price--discount">$345<span>/Night</span></span>
      </div>
      <div class="offer__description">
          <h3 class="subtitle">DOUBLE BED</h3>
          <h4 class="title title--black title--medium">
              <a href="{{ route('roomdetails') }}">Double Bed</a>
          </h4>
          <p class="text text--small">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <div class="amenities">
              @foreach ([
                  ['icon/amenities 0.svg', 'Air Conditioner'],
                  ['icon/amenities 1.svg', 'Breakfast'],
                  ['icon/amenities 2.svg', 'Cleaning'],
                  ['icon/amenities 3.svg', 'Grocery'],
                  ['icon/amenities 4.svg', 'Shop near'],
                  ['icon/amenities 11.svg', 'Towels'],
                  ['icon/amenities 6.svg', 'Smart Security'],
                  ['icon/amenities 7.svg', 'High speed WiFi'],
                  ['icon/amenities 8.svg', 'Kitchen'],
                  ['icon/amenities 9.svg', 'Shower']
              ] as [$icon, $label])
                  <div class="amenities__item">
                      <img src="{{ asset($icon) }}" alt="{{ $label }}">
                      {{ $label }}
                  </div>
              @endforeach
          </div>
          <a href="{{ route('roomdetails') }}" class="button">
              <strong>BOOK NOW</strong>
          </a>
      </div>
  </article>
  <article class="offer offer--desktop">
      <div class="offer__img">
          <img src="{{ asset('img/room 1.webp') }}" alt="room 1">
      </div>
      <div class="offer__description">
          <div class="offer__description__row border-bottom">
              <div>
                  <h3 class="subtitle">DOUBLE BED</h3>
                  <h4 class="title title--black title--medium">
                      <a href="{{ route('roomdetails') }}">Luxury Double Bed</a>
                  </h4>
              </div>
              <div>
                  <span class="offer__price">
                      <span class="crossed">$500</span>
                      <span class="crossed night">/Night</span>
                  </span>
                  <span class="offer__price offer__price--discount">$345<span>/Night</span></span>
              </div>
          </div>
          <div class="offer__description__row">
              <div>
                  <p class="text text--small">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                  <a href="{{ route('roomdetails') }}" class="button">
                      <strong>BOOK NOW</strong>
                  </a>
              </div>
              <div class="amenities">
                  @foreach ([
                      ['icon/amenities 0.svg', 'Air Conditioner'],
                      ['icon/amenities 1.svg', 'Breakfast'],
                      ['icon/amenities 2.svg', 'Cleaning'],
                      ['icon/amenities 3.svg', 'Grocery'],
                      ['icon/amenities 4.svg', 'Shop near'],
                      ['icon/amenities 11.svg', 'Towels'],
                      ['icon/amenities 6.svg', 'Smart Security'],
                      ['icon/amenities 7.svg', 'High speed WiFi'],
                      ['icon/amenities 8.svg', 'Kitchen'],
                      ['icon/amenities 9.svg', 'Shower']
                  ] as [$icon, $label])
                      <div class="amenities__item">
                          <img src="{{ asset($icon) }}" alt="{{ $label }}">
                          {{ $label }}
                      </div>
                  @endforeach
              </div>
          </div>
      </div>
  </article>
  <article class="offer offer--mobile">
      <div class="offer__img">
          <img src="{{ asset('img/room 1.webp') }}" alt="room 1">
          <span class="offer__price">
              <span class="crossed">$500</span>
              <span class="crossed night">/Night</span>
          </span>
          <span class="offer__price offer__price--discount">$345<span>/Night</span></span>
      </div>
      <div class="offer__description">
          <h3 class="subtitle">DOUBLE BED</h3>
          <h4 class="title title--black title--medium">
              <a href="{{ route('roomdetails') }}">Double Bed</a>
          </h4>
          <p class="text text--small">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <div class="amenities">
              @foreach ([
                  ['icon/amenities 0.svg', 'Air Conditioner'],
                  ['icon/amenities 1.svg', 'Breakfast'],
                  ['icon/amenities 2.svg', 'Cleaning'],
                  ['icon/amenities 3.svg', 'Grocery'],
                  ['icon/amenities 4.svg', 'Shop near'],
                  ['icon/amenities 11.svg', 'Towels'],
                  ['icon/amenities 6.svg', 'Smart Security'],
                  ['icon/amenities 7.svg', 'High speed WiFi'],
                  ['icon/amenities 8.svg', 'Kitchen'],
                  ['icon/amenities 9.svg', 'Shower']
              ] as [$icon, $label])
                  <div class="amenities__item">
                      <img src="{{ asset($icon) }}" alt="{{ $label }}">
                      {{ $label }}
                  </div>
              @endforeach
          </div>
          <a href="{{ route('roomdetails') }}" class="button">
              <strong>BOOK NOW</strong>
          </a>
      </div>
  </article>
  <article class="offer offer--desktop">
      <div class="offer__img">
          <img src="{{ asset('img/room 1.webp') }}" alt="room 1">
      </div>
      <div class="offer__description">
          <div class="offer__description__row border-bottom">
              <div>
                  <h3 class="subtitle">DOUBLE BED</h3>
                  <h4 class="title title--black title--medium">
                      <a href="{{ route('roomdetails') }}">Luxury Double Bed</a>
                  </h4>
              </div>
              <div>
                  <span class="offer__price">
                      <span class="crossed">$500</span>
                      <span class="crossed night">/Night</span>
                  </span>
                  <span class="offer__price offer__price--discount">$345<span>/Night</span></span>
              </div>
          </div>
          <div class="offer__description__row">
              <div>
                  <p class="text text--small">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                  <a href="{{ route('roomdetails') }}" class="button">
                      <strong>BOOK NOW</strong>
                  </a>
              </div>
              <div class="amenities">
                  @foreach ([
                      ['icon/amenities 0.svg', 'Air Conditioner'],
                      ['icon/amenities 1.svg', 'Breakfast'],
                      ['icon/amenities 2.svg', 'Cleaning'],
                      ['icon/amenities 3.svg', 'Grocery'],
                      ['icon/amenities 4.svg', 'Shop near'],
                      ['icon/amenities 11.svg', 'Towels'],
                      ['icon/amenities 6.svg', 'Smart Security'],
                      ['icon/amenities 7.svg', 'High speed WiFi'],
                      ['icon/amenities 8.svg', 'Kitchen'],
                      ['icon/amenities 9.svg', 'Shower']
                  ] as [$icon, $label])
                      <div class="amenities__item">
                          <img src="{{ asset($icon) }}" alt="{{ $label }}">
                          {{ $label }}
                      </div>
                  @endforeach
              </div>
          </div>
      </div>
  </article>
  <article class="offer offer--mobile">
      <div class="offer__img">
          <img src="{{ asset('img/room 1.webp') }}" alt="room 1">
          <span class="offer__price">
              <span class="crossed">$500</span>
              <span class="crossed night">/Night</span>
          </span>
          <span class="offer__price offer__price--discount">$345<span>/Night</span></span>
      </div>
      <div class="offer__description">
          <h3 class="subtitle">DOUBLE BED</h3>
          <h4 class="title title--black title--medium">
              <a href="{{ route('roomdetails') }}">Double Bed</a>
          </h4>
          <p class="text text--small">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <div class="amenities">
              @foreach ([
                  ['icon/amenities 0.svg', 'Air Conditioner'],
                  ['icon/amenities 1.svg', 'Breakfast'],
                  ['icon/amenities 2.svg', 'Cleaning'],
                  ['icon/amenities 3.svg', 'Grocery'],
                  ['icon/amenities 4.svg', 'Shop near'],
                  ['icon/amenities 11.svg', 'Towels'],
                  ['icon/amenities 6.svg', 'Smart Security'],
                  ['icon/amenities 7.svg', 'High speed WiFi'],
                  ['icon/amenities 8.svg', 'Kitchen'],
                  ['icon/amenities 9.svg', 'Shower']
              ] as [$icon, $label])
                  <div class="amenities__item">
                      <img src="{{ asset($icon) }}" alt="{{ $label }}">
                      {{ $label }}
                  </div>
              @endforeach
          </div>
          <a href="{{ route('roomdetails') }}" class="button">
              <strong>BOOK NOW</strong>
          </a>
      </div>
  </article>
  <article class="offer offer--desktop">
      <div class="offer__img">
          <img src="{{ asset('img/room 1.webp') }}" alt="room 1">
      </div>
      <div class="offer__description">
          <div class="offer__description__row border-bottom">
              <div>
                  <h3 class="subtitle">DOUBLE BED</h3>
                  <h4 class="title title--black title--medium">
                      <a href="{{ route('roomdetails') }}">Luxury Double Bed</a>
                  </h4>
              </div>
              <div>
                  <span class="offer__price">
                      <span class="crossed">$500</span>
                      <span class="crossed night">/Night</span>
                  </span>
                  <span class="offer__price offer__price--discount">$345<span>/Night</span></span>
              </div>
          </div>
          <div class="offer__description__row">
              <div>
                  <p class="text text--small">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                  <a href="{{ route('roomdetails') }}" class="button">
                      <strong>BOOK NOW</strong>
                  </a>
              </div>
              <div class="amenities">
                  @foreach ([
                      ['icon/amenities 0.svg', 'Air Conditioner'],
                      ['icon/amenities 1.svg', 'Breakfast'],
                      ['icon/amenities 2.svg', 'Cleaning'],
                      ['icon/amenities 3.svg', 'Grocery'],
                      ['icon/amenities 4.svg', 'Shop near'],
                      ['icon/amenities 11.svg', 'Towels'],
                      ['icon/amenities 6.svg', 'Smart Security'],
                      ['icon/amenities 7.svg', 'High speed WiFi'],
                      ['icon/amenities 8.svg', 'Kitchen'],
                      ['icon/amenities 9.svg', 'Shower']
                  ] as [$icon, $label])
                      <div class="amenities__item">
                          <img src="{{ asset($icon) }}" alt="{{ $label }}">
                          {{ $label }}
                      </div>
                  @endforeach
              </div>
          </div>
      </div>
  </article>
  <article class="offer offer--mobile">
      <div class="offer__img">
          <img src="{{ asset('img/room 1.webp') }}" alt="room 1">
          <span class="offer__price">
              <span class="crossed">$500</span>
              <span class="crossed night">/Night</span>
          </span>
          <span class="offer__price offer__price--discount">$345<span>/Night</span></span>
      </div>
      <div class="offer__description">
          <h3 class="subtitle">DOUBLE BED</h3>
          <h4 class="title title--black title--medium">
              <a href="{{ route('roomdetails') }}">Double Bed</a>
          </h4>
          <p class="text text--small">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <div class="amenities">
              @foreach ([
                  ['icon/amenities 0.svg', 'Air Conditioner'],
                  ['icon/amenities 1.svg', 'Breakfast'],
                  ['icon/amenities 2.svg', 'Cleaning'],
                  ['icon/amenities 3.svg', 'Grocery'],
                  ['icon/amenities 4.svg', 'Shop near'],
                  ['icon/amenities 11.svg', 'Towels'],
                  ['icon/amenities 6.svg', 'Smart Security'],
                  ['icon/amenities 7.svg', 'High speed WiFi'],
                  ['icon/amenities 8.svg', 'Kitchen'],
                  ['icon/amenities 9.svg', 'Shower']
              ] as [$icon, $label])
                  <div class="amenities__item">
                      <img src="{{ asset($icon) }}" alt="{{ $label }}">
                      {{ $label }}
                  </div>
              @endforeach
          </div>
          <a href="{{ route('roomdetails') }}" class="button">
              <strong>BOOK NOW</strong>
          </a>
      </div>
  </article>
  <article class="offer offer--desktop">
      <div class="offer__img">
          <img src="{{ asset('img/room 1.webp') }}" alt="room 1">
      </div>
      <div class="offer__description">
          <div class="offer__description__row border-bottom">
              <div>
                  <h3 class="subtitle">DOUBLE BED</h3>
                  <h4 class="title title--black title--medium">
                      <a href="{{ route('roomdetails') }}">Luxury Double Bed</a>
                  </h4>
              </div>
              <div>
                  <span class="offer__price">
                      <span class="crossed">$500</span>
                      <span class="crossed night">/Night</span>
                  </span>
                  <span class="offer__price offer__price--discount">$345<span>/Night</span></span>
              </div>
          </div>
          <div class="offer__description__row">
              <div>
                  <p class="text text--small">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                  <a href="{{ route('roomdetails') }}" class="button">
                      <strong>BOOK NOW</strong>
                  </a>
              </div>
              <div class="amenities">
                  @foreach ([
                      ['icon/amenities 0.svg', 'Air Conditioner'],
                      ['icon/amenities 1.svg', 'Breakfast'],
                      ['icon/amenities 2.svg', 'Cleaning'],
                      ['icon/amenities 3.svg', 'Grocery'],
                      ['icon/amenities 4.svg', 'Shop near'],
                      ['icon/amenities 11.svg', 'Towels'],
                      ['icon/amenities 6.svg', 'Smart Security'],
                      ['icon/amenities 7.svg', 'High speed WiFi'],
                      ['icon/amenities 8.svg', 'Kitchen'],
                      ['icon/amenities 9.svg', 'Shower']
                  ] as [$icon, $label])
                      <div class="amenities__item">
                          <img src="{{ asset($icon) }}" alt="{{ $label }}">
                          {{ $label }}
                      </div>
                  @endforeach
              </div>
          </div>
      </div>
  </article>
  <article class="offer offer--mobile">
      <div class="offer__img">
          <img src="{{ asset('img/room 1.webp') }}" alt="room 1">
          <span class="offer__price">
              <span class="crossed">$500</span>
              <span class="crossed night">/Night</span>
          </span>
          <span class="offer__price offer__price--discount">$345<span>/Night</span></span>
      </div>
      <div class="offer__description">
          <h3 class="subtitle">DOUBLE BED</h3>
          <h4 class="title title--black title--medium">
              <a href="{{ route('roomdetails') }}">Double Bed</a>
          </h4>
          <p class="text text--small">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <div class="amenities">
              @foreach ([
                  ['icon/amenities 0.svg', 'Air Conditioner'],
                  ['icon/amenities 1.svg', 'Breakfast'],
                  ['icon/amenities 2.svg', 'Cleaning'],
                  ['icon/amenities 3.svg', 'Grocery'],
                  ['icon/amenities 4.svg', 'Shop near'],
                  ['icon/amenities 11.svg', 'Towels'],
                  ['icon/amenities 6.svg', 'Smart Security'],
                  ['icon/amenities 7.svg', 'High speed WiFi'],
                  ['icon/amenities 8.svg', 'Kitchen'],
                  ['icon/amenities 9.svg', 'Shower']
              ] as [$icon, $label])
                  <div class="amenities__item">
                      <img src="{{ asset($icon) }}" alt="{{ $label }}">
                      {{ $label }}
                  </div>
              @endforeach
          </div>
          <a href="{{ route('roomdetails') }}" class="button">
              <strong>BOOK NOW</strong>
          </a>
      </div>
  </article>
  <article class="offer offer--desktop">
      <div class="offer__img">
          <img src="{{ asset('img/room 1.webp') }}" alt="room 1">
      </div>
      <div class="offer__description">
          <div class="offer__description__row border-bottom">
              <div>
                  <h3 class="subtitle">DOUBLE BED</h3>
                  <h4 class="title title--black title--medium">
                      <a href="{{ route('roomdetails') }}">Luxury Double Bed</a>
                  </h4>
              </div>
              <div>
                  <span class="offer__price">
                      <span class="crossed">$500</span>
                      <span class="crossed night">/Night</span>
                  </span>
                  <span class="offer__price offer__price--discount">$345<span>/Night</span></span>
              </div>
          </div>
          <div class="offer__description__row">
              <div>
                  <p class="text text--small">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                  <a href="{{ route('roomdetails') }}" class="button">
                      <strong>BOOK NOW</strong>
                  </a>
              </div>
              <div class="amenities">
                  @foreach ([
                      ['icon/amenities 0.svg', 'Air Conditioner'],
                      ['icon/amenities 1.svg', 'Breakfast'],
                      ['icon/amenities 2.svg', 'Cleaning'],
                      ['icon/amenities 3.svg', 'Grocery'],
                      ['icon/amenities 4.svg', 'Shop near'],
                      ['icon/amenities 11.svg', 'Towels'],
                      ['icon/amenities 6.svg', 'Smart Security'],
                      ['icon/amenities 7.svg', 'High speed WiFi'],
                      ['icon/amenities 8.svg', 'Kitchen'],
                      ['icon/amenities 9.svg', 'Shower']
                  ] as [$icon, $label])
                      <div class="amenities__item">
                          <img src="{{ asset($icon) }}" alt="{{ $label }}">
                          {{ $label }}
                      </div>
                  @endforeach
              </div>
          </div>
      </div>
  </article>
</section>