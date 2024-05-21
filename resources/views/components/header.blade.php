<header id="header" class="header">
    <p class="header__slogan">We Make Your Feel Comfortable</p>
    <nav id="navbar" class="header__nav">
        <input id="header__menu-toggle" type="checkbox" />

        <label class='header__menu--container' for="header__menu-toggle">
            <div class='menu-button'></div>
        </label>

        <div class="nav__logo--container">
            <a class="nav__logo--container--a" href={{route('index')}}>
                <img class="nav__logo--container--a--img" src={{asset("./assets/h.png")}} alt="logo">
                <div class="nav__logo--container--a--text--container">
                    <h2 class="header__logo--title">HOTEL</h2>
                    <h2 class="header__logo--subtitle">MIRANDA</h2>
                </div>
            </a>
        </div>

        <ul class="header__nav--list">
            <li class="header__nav--item">
                <a class="header__nav-link" href={{route('about')}}>Abous Us</a>
            </li>
            <li class="header__nav--item">
                <a class="header__nav-link" href={{route('room-grid')}}>Rooms</a>
            </li>
            <li class="header__nav--item">
                <a class="header__nav-link" href={{route('offers')}}>Offers</a>
            </li>
            <li class="header__nav--item">
                <a class="header__nav-link" href={{route('contact')}}>Contact</a>
            </li>
        </ul>

        <ul class="header__nav--icons">
            <img src={{asset("assets/person.svg")}} alt="">
            <img src={{asset("assets/search.svg")}} alt="">
        </ul>
    </nav>
</header>