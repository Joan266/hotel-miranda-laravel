<section class="contact__form container">
    <h4 class="title title--smaller">Contact us today:</h4>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="desktop-agrupation">
            <div class="contact__form__input">
                <img src="{{ asset('icon/contact 1.svg') }}" alt="avatar icon">
                <input id="fullname" name="fullname" placeholder="Your full name" type="text" required>
            </div>
            <div class="contact__form__input">
                <img src="{{ asset('icon/contact 2.svg') }}" alt="phone icon">
                <input id="phone" name="phone" placeholder="Add phone number" type="text" required  title="Please enter a valid 10-digit phone number">
            </div>
            <div class="contact__form__input">
                <img src="{{ asset('icon/contact 3.svg') }}" alt="mail icon">
                <input id="email" name="email" placeholder="Enter email address" type="email" required>
            </div>
            <div class="contact__form__input">
                <img src="{{ asset('icon/contact 4.svg') }}" alt="book icon">
                <input id="subject" name="subject" placeholder="Enter subject" type="text" required>
            </div>
        </div>
        <div class="rating-group">
            <label class="rating-label">
                <input
                    class="rating"
                    min="1"
                    max="5"
                    oninput="this.style.setProperty('--value', this.value)"
                    step="1"
                    type="range"
                    name="stars"
                    id="rating"
                    value="5">
            </label>
        </div>
        <div class="contact__form__input contact__form__input--big">
            <img src="{{ asset('icon/contact 5.svg') }}" alt="pen icon">
            <textarea id="message" name="message" placeholder="Enter message" required></textarea>
        </div>
        <button type="submit" class="button"><strong>SEND</strong></button>
    </form>
</section>
