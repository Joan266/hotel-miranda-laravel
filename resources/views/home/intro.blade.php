<section class="intro">
    <div class="container">
        <h1 class="subtitle">THE ULTIMATE LUXURY EXPERIENCE</h1>
        <h2 class="title">The Perfect Base For You</h2>
        <a class="button" href="#">TAKE A TOUR</a>
        <a class="button button--black" href="#">LEARN MORE</a>
        <form action="#" method="GET">
            <div>
                <label for="arrival-date">Arrival Date</label>
                <div class="date-input-container">
                    <input id="arrival-date" name="arrival-date" type="date">
                </div>
            </div>
            <div>
                <label for="departure-date">Departure Date</label>
                <div class="date-input-container">
                    <input id="departure-date" name="departure-date" type="date">
                </div>
            </div>
            <a href="{{ route('rooms.index') }}" class="button">CHECK AVAILABILITY</a>
        </form>
    </div>
</section>
