<section class="intro">
    <div class="container">
        <h1 class="subtitle">THE ULTIMATE LUXURY EXPERIENCE</h1>
        <h2 class="title">The Perfect Base For You</h2>
        <div class="buttons">
            <a class="button" href="#">TAKE A TOUR</a>
            <a class="button button--black" href="#">LEARN MORE</a>
        </div>
        <form id="availability-form-home" action="{{ route('availableRooms') }}" method="GET" >
            @csrf
            <div>
                <label for="date-range">Select Dates</label>
                <div class="date-input-container">
                    <input id="date-range-home" name="date_range" type="text" required placeholder="Select Check-in and Check-out dates">
                </div>
            </div>
            <button type="submit" class="button">CHECK AVAILABILITY</button>
        </form>
    </div>
</section>
