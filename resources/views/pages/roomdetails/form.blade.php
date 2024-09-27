<div class="room-details__form room-details__form--desktop">
    <form id="availability-form" action="{{ route('bookings.store') }}" method="POST" data-room-type-id="{{ $room->id }}">
        @csrf
        <input type="hidden" name="room_type_id" value="{{ $room->id }}"> 

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
        <label for="date-range-roomdetails">Select Dates</label>
        <div class="input-container">
            <input id="date-range-roomdetails" name="date_range" type="text" required placeholder="Select Check-in and Check-out dates">
        </div>

        <button type="submit" class="button">RESERVE</button>
    </form>
</div>
