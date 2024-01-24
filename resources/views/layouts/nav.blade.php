<nav class="nav container">
    <a href="{{ route('home') }}" class="nav__logo">{{config('app.name')}}</a>

    <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
            <li class="nav__item">
                <a href="{{ route('home') }}" class="nav__link">Home</a>
            </li>

            <li class="nav__item">
                <a href="#" class="nav__link">sectors</a>
            </li>

            <li class="nav__item">
                <a href="#" class="nav__link">Departement</a>
            </li>

            <li class="nav__item">
                <a href="#" class="nav__link">Contact us</a>
            </li>
        </ul>

        <div class="nav__close" id="nav-close">
            <i class="ri-close-line"></i>
        </div>
    </div>

    <div class="nav__actions">
        <i class="ri-search-line nav__search" id="search-btn"></i>

        <i class="ri-user-line nav__login" id="login-btn"></i>

        <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-line"></i>
        </div>
    </div>
</nav>