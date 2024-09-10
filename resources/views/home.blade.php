@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="intro">
      <div class="container">
        <h1 class="subtitle">THE ULTIMATE LUXURY EXPIRIENCE</h1>
        <h2 class="title">The Perfect Base For You</h2>
        <a class="button">TAKE A TOUR</a>
        <a class="button button--black">LEARN MORE</a>
        <form>
          <div>
            <label for="arrival-date">Arrival Date</label>
            <div class="date-input-container">
              <input id="arrival-date" type="date"></input>
            </div>
          </div>
          <div>
            <label for="ledeparture-date">LeDeparture Date</label>
            <div class="date-input-container">
              <input id="ledeparture-date" type="date" placeholder=""></input>
            </div>
          </div>
          <a href="rooms.html" class="button">CHECK AVAILABILITY</a>
        </form>
      </div>
    </section>
    <section class="about-us">
      <div class="container">
        <div class="about-us__header">
          <h3 class="subtitle">ABOUT US</h3>
          <h4 class="title">Discover Our Underground.</h4>
          <p class="text about-us__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>
          <a href="roomdetails.html" class="button">BOOK NOW</a>
        </div>
        <div class="cards-container">
          <div class="about-us__card about-us__card--white">
            <div class="about-us__card__img"><img src="./public/img/lux-room.webp" alt="luxury room"></img></div>
            <div class="about-us__card__description">
              <div class="about-us__card__description__background-icon"><img src="./public/icon/people_icon 3.svg"
                  alt="people icon"></img></div>
              <div class="about-us__card__description__icon"><img src="./public/icon/people_icon 2.svg"
                  alt="people icon"></img></div>
              <h5 class="about-us__card__description__title">Strong Team</h5>
              <p class="about-us__card__description__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor.</p>
            </div>
          </div>
          <div class="about-us__card about-us__card--black">
            <div class="about-us__card__img"><img src="./public/img/hotel-crew.webp" alt="hotel crew"></img></div>
            <div class="about-us__card__description">
              <div class="about-us__card__description__icon"><img src="./public/icon/calendar_icon 1.svg"
                  alt="calendar icon"></img></div>
              <h5 class="about-us__card__description__title">Luxury Room</h5>
              <p class="about-us__card__description__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="rooms">
      <h3 class="subtitle">ROOMS</h3>
      <h4 class="title">Hand Picked Rooms</h4>
      <div class="swiper swiper--rooms">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img class="swiper-slide__room-features" src="./public/icon/hotel-room-features 1.svg"
              alt="hotel room features"></img>
            <img class="swiper-slide__img" src="./public/img/room 1.webp" alt="room 1"></img>
            <div class="swiper-slide__room-description">
              <div>
                <h5 class="title title--small">Minimal Duplex Room</h5>
                <p class="text text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor
                  incididunt ut labore et dolore.</p>
              </div>
              <span class="swiper-slide__room-description__price">$345<span>/Night</span></span>
            </div>
          </div>
          <div class="swiper-slide">
            <img class="swiper-slide__room-features" src="./public/icon/hotel-room-features 1.svg"
              alt="hotel room features"></img>
            <img class="swiper-slide__img" src="./public/img/room 2.webp" alt="room 2"></img>
            <div class="swiper-slide__room-description">
              <div>
                <h5 class="title title--smaller">Minimal Duplex Room</h5>
                <p class="text text--small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor
                  incididunt ut labore et dolore.</p>
              </div>
              <span class="swiper-slide__room-description__price">$345<span>/Night</span></span>
            </div>
          </div>
          <div class="swiper-slide">
            <img class="swiper-slide__room-features" src="./public/icon/hotel-room-features 1.svg"
              alt="hotel room features"></img>
            <img class="swiper-slide__img" src="./public/img/room 3.webp" alt="room 3"></img>
            <div class="swiper-slide__room-description">
              <div>
                <h5 class="title title--smaller">Minimal Duplex Room</h5>
                <p class="text text--small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor
                  incididunt ut labore et dolore.</p>
              </div>
              <span class="swiper-slide__room-description__price">$345<span>/Night</span></span>
            </div>
          </div>
          <div class="swiper-slide">
            <img class="swiper-slide__room-features" src="./public/icon/hotel-room-features 1.svg"
              alt="hotel room features"></img>
            <img class="swiper-slide__img" src="./public/img/room 4.webp" alt="room 4"></img>
            <div class="swiper-slide__room-description">
              <div>
                <h5 class="title title--smaller">Minimal Duplex Room</h5>
                <p class="text text--small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor
                  incididunt ut labore et dolore.</p>
              </div>
              <span class="swiper-slide__room-description__price">$345<span>/Night</span></span>
            </div>
          </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </section>
    <section class="intro-video">
      <div class="container">
        <div>
          <h3 class="subtitle">INTRO VIDEO</h3>
          <h4 class="title">Meet With Our Luxury Place.</h4>
          <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat you have to understand this.</p>
          <div class="intro-video__video intro-video__video--mobile">
            <video src="./public/video/hotel_miranda_intro.mp4" title="Hotel Miranda Video" controls autoplay muted>
              Your browser does not support the video tag.
            </video>
          </div>
          <a href="roomdetails.html" class="button">BOOK NOW</a>
        </div>
        <div class="intro-video__video intro-video__video--desktop">
          <video src="./public/video/hotel_miranda_intro.mp4" title="Hotel Miranda Video" controls autoplay muted>
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </section>
    <section class="facilities container">
      <div class="swiper swiper--facilities">
        <h3 class="subtitle">FACILITIES</h3>
        <h4 class="title">Core Features</h4>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <span class="swiper-slide__num">01</span>
            <img class="swiper-slide__icon" src="./public/icon/facilities_icon 1.svg" alt="food 1"></img>
            <h5 class="swiper-slide__title">Have High Rating</h5>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna..</p>
          </div>
          <div class="swiper-slide">
            <span class="swiper-slide__num">02</span>
            <img class="swiper-slide__icon" src="./public/icon/facilities_icon 2.svg" alt="food 1"></img>
            <h5 class="swiper-slide__title">Quiet Hours</h5>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna..</p>
          </div>
          <div class="swiper-slide">
            <span class="swiper-slide__num">03</span>
            <img class="swiper-slide__icon" src="./public/icon/facilities_icon 3.svg" alt="food 1"></img>
            <h5 class="swiper-slide__title">Best Locations</h5>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna..</p>
          </div>
          <div class="swiper-slide">
            <span class="swiper-slide__num">04</span>
            <img class="swiper-slide__icon" src="./public/icon/facilities_icon 4.svg" alt="food 1"></img>
            <h5 class="swiper-slide__title">Free Cancellation</h5>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna..</p>
          </div>
          <div class="swiper-slide">
            <span class="swiper-slide__num">05</span>
            <img class="swiper-slide__icon" src="./public/icon/facilities_icon 5.svg" alt="food 1"></img>
            <h5 class="swiper-slide__title">Payment Options</h5>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna..</p>
          </div>
          <div class="swiper-slide">
            <span class="swiper-slide__num">06</span>
            <img class="swiper-slide__icon" src="./public/icon/facilities_icon 6.svg" alt="food 1"></img>
            <h5 class="swiper-slide__title">Special Offers</h5>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna..</p>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="non-swiper non-swiper--facilities">
        <div class="swiper-slide">
          <span class="swiper-slide__num">01</span>
          <img class="swiper-slide__icon" src="./public/icon/facilities_icon 1.svg" alt="food 1"></img>
          <h5 class="swiper-slide__title">Have High Rating</h5>
          <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna..</p>
        </div>
        <div class="swiper-slide">
          <span class="swiper-slide__num">02</span>
          <img class="swiper-slide__icon" src="./public/icon/facilities_icon 2.svg" alt="food 1"></img>
          <h5 class="swiper-slide__title">Quiet Hours</h5>
          <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna..</p>
        </div>
        <div class="swiper-slide">
          <span class="swiper-slide__num">03</span>
          <img class="swiper-slide__icon" src="./public/icon/facilities_icon 3.svg" alt="food 1"></img>
          <h5 class="swiper-slide__title">Best Locations</h5>
          <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna..</p>
        </div>
        <div class="swiper-slide">
          <span class="swiper-slide__num">04</span>
          <img class="swiper-slide__icon" src="./public/icon/facilities_icon 4.svg" alt="food 1"></img>
          <h5 class="swiper-slide__title">Free Cancellation</h5>
          <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna..</p>
        </div>
        <div class="swiper-slide">
          <span class="swiper-slide__num">05</span>
          <img class="swiper-slide__icon" src="./public/icon/facilities_icon 5.svg" alt="food 1"></img>
          <h5 class="swiper-slide__title">Payment Options</h5>
          <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna..</p>
        </div>
        <div class="swiper-slide">
          <span class="swiper-slide__num">06</span>
          <img class="swiper-slide__icon" src="./public/icon/facilities_icon 6.svg" alt="food 1"></img>
          <h5 class="swiper-slide__title">Special Offers</h5>
          <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna..</p>
        </div>
      </div>
    </section>
    <section class="food-menu container">
      <div class="food-menu__donut food-menu__donut--1"> <img src="./public/icon/donut_icon 1.svg"
          alt="donut img"></img></div>
      <div class="food-menu__donut food-menu__donut--2"> <img src="./public/icon/donut_icon 2.svg"
          alt="donut img"></img></div>
      <div class="swiper swiper--menu">
        <h3 class="subtitle">MENU</h3>
        <h4 class="title">Our Foods Menu</h4>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="swiper-slide__info">
              <div class="swiper-slide__info__img">
                <img src="./public/img/eggs-bacon.webp" alt="food 1"></img>
              </div>
              <div class="swiper-slide__info__container">
                <div class="swiper-slide__info__container__description">
                  <h5 class="swiper-slide__info__title">Eggs & Bacon</h1>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                    </p>
                </div>
                <div class="swiper-slide__info__container__arrow">
                  <img src="./public/icon/right-arrow_icon 1.svg" alt="right arrow icon"></img>
                </div>
              </div>
            </div>
            <div class="swiper-slide__info">
              <div class="swiper-slide__info__img">
                <img src="./public/img/coffe-machine.webp" alt="food 1"></img>
              </div>
              <div class="swiper-slide__info__container">
                <div class="swiper-slide__info__container__description">
                  <h5 class="swiper-slide__info__title">Tea or Coffe</h1>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                    </p>
                </div>
                <div class="swiper-slide__info__container__arrow">
                  <img src="./public/icon/right-arrow_icon 1.svg" alt="right arrow icon"></img>
                </div>
              </div>
            </div>
            <div class="swiper-slide__info">
              <div class="swiper-slide__info__img">
                <img src="./public/img/avocado-toast.webp" alt="food 1"></img>
              </div>
              <div class="swiper-slide__info__container">
                <div class="swiper-slide__info__container__description">
                  <h5 class="swiper-slide__info__title">Chia OatMeal</h1>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                    </p>
                </div>
                <div class="swiper-slide__info__container__arrow">
                  <img src="./public/icon/right-arrow_icon 1.svg" alt="right arrow icon"></img>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-slide__info">
              <div class="swiper-slide__info__img">
                <img src="./public/img/eggs-bacon.webp" alt="food 1"></img>
              </div>
              <div class="swiper-slide__info__container">
                <div class="swiper-slide__info__container__description">
                  <h5 class="swiper-slide__info__title">Eggs & Bacon</h1>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                    </p>
                </div>
                <div class="swiper-slide__info__container__arrow">
                  <img src="./public/icon/right-arrow_icon 1.svg" alt="right arrow icon"></img>
                </div>
              </div>
            </div>
            <div class="swiper-slide__info">
              <div class="swiper-slide__info__img">
                <img src="./public/img/coffe-machine.webp" alt="food 1"></img>
              </div>
              <div class="swiper-slide__info__container">
                <div class="swiper-slide__info__container__description">
                  <h5 class="swiper-slide__info__title">Tea or Coffe</h1>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                    </p>
                </div>
                <div class="swiper-slide__info__container__arrow">
                  <img src="./public/icon/right-arrow_icon 1.svg" alt="right arrow icon"></img>
                </div>
              </div>
            </div>
            <div class="swiper-slide__info">
              <div class="swiper-slide__info__img">
                <img src="./public/img/avocado-toast.webp" alt="food 1"></img>
              </div>
              <div class="swiper-slide__info__container">
                <div class="swiper-slide__info__container__description">
                  <h5 class="swiper-slide__info__title">Chia OatMeal</h1>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                    </p>
                </div>
                <div class="swiper-slide__info__container__arrow">
                  <img src="./public/icon/right-arrow_icon 1.svg" alt="right arrow icon"></img>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-slide__info">
              <div class="swiper-slide__info__img">
                <img src="./public/img/eggs-bacon.webp" alt="food 1"></img>
              </div>
              <div class="swiper-slide__info__container">
                <div class="swiper-slide__info__container__description">
                  <h5 class="swiper-slide__info__title">Eggs & Bacon</h1>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                    </p>
                </div>
                <div class="swiper-slide__info__container__arrow">
                  <img src="./public/icon/right-arrow_icon 1.svg" alt="right arrow icon"></img>
                </div>
              </div>
            </div>
            <div class="swiper-slide__info">
              <div class="swiper-slide__info__img">
                <img src="./public/img/coffe-machine.webp" alt="food 1"></img>
              </div>
              <div class="swiper-slide__info__container">
                <div class="swiper-slide__info__container__description">
                  <h5 class="swiper-slide__info__title">Tea or Coffe</h1>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                    </p>
                </div>
                <div class="swiper-slide__info__container__arrow">
                  <img src="./public/icon/right-arrow_icon 1.svg" alt="right arrow icon"></img>
                </div>
              </div>
            </div>
            <div class="swiper-slide__info">
              <div class="swiper-slide__info__img">
                <img src="./public/img/avocado-toast.webp" alt="food 1"></img>
              </div>
              <div class="swiper-slide__info__container">
                <div class="swiper-slide__info__container__description">
                  <h5 class="swiper-slide__info__title">Chia OatMeal</h1>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                    </p>
                </div>
                <div class="swiper-slide__info__container__arrow">
                  <img src="./public/icon/right-arrow_icon 1.svg" alt="right arrow icon"></img>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
      <div class="swiper swiper--food">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img class="swiper-slide__img" src="./public/img/slider-food-1.webp"
              alt="food 1"></img>
          </div>
          <div class="swiper-slide"><img class="swiper-slide__img" src="./public/img/slider-food-2.webp"
              alt="food 2"></img>
          </div>
          <div class="swiper-slide"><img class="swiper-slide__img" src="./public/img/slider-food-3.webp"
              alt="food 3"></img>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="non-swiper non-swiper--food">
        <div class="non-swiper__item">
          <img src="./public/img/slider-food-1.webp" alt="food 1">
        </div>
        <div class="non-swiper__item">
          <img src="./public/img/slider-food-2.webp" alt="food 2">
        </div>
        <div class="non-swiper__item">
          <img src="./public/img/slider-food-3.webp" alt="food 3">
        </div>
      </div>
    </section>
    <section class="stats__content container">
      <div class="stats__item">
        <img src="./public/icon/cohete_icon 1.svg" alt="cohete icon"></img>
        <div class="stats__item__title">84k</div>
        <h5 class="stats__item__subtitle">Projects are Completed</h5>
      </div>
      <div class="stats__item">
        <img src="./public/icon/people_icon 1.svg" alt="people icon"></img>
        <div class="stats__item__title">10M</div>
        <h5 class="stats__item__subtitle">Active Backers Around World</h5>
      </div>
      <div class="stats__item">
        <img src="./public/icon/graph_icon 1.svg" alt="graph icon"></img>
        <div class="stats__item__title">02k</div>
        <h5 class="stats__item__subtitle">Categories Served</h5>
      </div>
      <div class="stats__item">
        <img src="./public/icon/book_icon 1.svg" alt=""></img>
        <div class="stats__item__title">100M</div>
        <h5 class="stats__item__subtitle">Idea Raised Funds</h5>
      </div>
    </section>
@endsection