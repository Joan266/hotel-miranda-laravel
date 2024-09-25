<section class="contact__form container">
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <div class="desktop-agrupation">
            <div class="contact__form__input">
                <img src="{{ asset('icon/contact 1.svg') }}" alt="avatar icon">
                <input name="fullname" placeholder="Your full name" type="text" required>
            </div>
            <div class="contact__form__input">
                <img src="{{ asset('icon/contact 2.svg') }}" alt="phone icon">
                <input name="phone" placeholder="Add phone number" type="text" required>
            </div>
            <div class="contact__form__input">
                <img src="{{ asset('icon/contact 3.svg') }}" alt="mail icon">
                <input name="email" placeholder="Enter email address" type="email" required>
            </div>
            <div class="contact__form__input">
                <img src="{{ asset('icon/contact 4.svg') }}" alt="book icon">
                <input name="subject" placeholder="Enter subject" type="text" required>
            </div>
        </div>
        <div class="contact__form__input contact__form__input--big">
            <img src="{{ asset('icon/contact 5.svg') }}" alt="pen icon">
            <textarea name="message" placeholder="Enter message" required></textarea>
        </div>
        <button type="submit" class="button"><strong>SEND</strong></button>
    </form>
</section>
