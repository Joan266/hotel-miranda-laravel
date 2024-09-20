<div class="room-details__form room-details__form--desktop">
  <form action="{{ route('booking.store') }}" method="POST">
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
</div>
