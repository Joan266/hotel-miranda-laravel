<header>
    <div id="menu-mobile" class="menu-mobile">
        <div class="menu-mobile__container">
            <div id="hamburguer" class="icon">
                <img id="menu-icon" src="{{ asset('icon/hamburguer_1.svg') }}" alt="Menu" data-hamburger="{{ asset('icon/hamburguer_1.svg') }}" data-cross="{{ asset('icon/cross.svg') }}">
            </div>
            <a href="{{ url('/') }}">
                <article class="logo">
                    <div class="icon icon--logo">H</div>
                    <img src="{{ asset('icon/Hotel Miranda.svg') }}" alt="hotel miranda text">
                </article>
            </a>
        </div>
        <div class="menu-mobile__container">
            <div class="icon">
                <img src="{{ asset('icon/member_icon 1.svg') }}" alt="member icon hotel miranda">
            </div>
            <div class="icon">
                <img src="{{ asset('icon/magnifier_icon 1.svg') }}" alt="magnifier icon hotel miranda">
            </div>
        </div>
    </div>

    <div id="menu-desktop" class="menu-desktop">
        <div class="menu-desktop__logo">
            <a href="{{ url('/') }}">
                <article class="logo">
                    <div class="icon icon--logo-big">H</div>
                    <img src="{{ asset('icon/Hotel Miranda desktop.svg') }}" alt="hotel miranda text">
                </article>
            </a>
        </div>
        <div class="menu-desktop__links">
            <a href="{{ url('aboutus') }}">About Us</a>
            <a href="{{ url('rooms') }}">Rooms</a>
            <a href="{{ url('offers') }}">Offers</a>
            <a href="{{ url('contact') }}">Contact</a>
        </div>
        <div class="menu-desktop__tools">
            <div class="icon">
                <img src="{{ asset('icon/member_icon 1.svg') }}" alt="member icon hotel miranda">
            </div>
            <div class="icon">
                <img src="{{ asset('icon/magnifier_icon 1.svg') }}" alt="magnifier icon hotel miranda">
            </div>
        </div>
    </div>

    <div id="drop-down" class="drop-down">
        <a href="{{ url('aboutus') }}">About Us</a>
        <a href="{{ url('rooms') }}">Rooms</a>
        <a href="{{ url('offers') }}">Offers</a>
        <a href="{{ url('contact') }}">Contact</a>
    </div>
</header>
