<nav class="nav container">
    <a href="{{ route('home') }}" class="nav__logo">{{config('app.name')}}</a>

    <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
            <li class="nav__item">
                @auth
                @switch(Auth::user()->role)
                    @case('prof_res_module')
                        <a href="{{ route('ProfResModule.dashboard') }}" class="nav__link">DashBoard</a>
                        @break

                    @case('student')
                        <a href="{{ route('student.dashboard') }}" class="nav__link">DashBoard</a>
                        @break

                    @case('chef_dep')
                        <a href="{{ route('chefDep.dashboard') }}" class="nav__link">DashBoard</a>
                        @break

                    @case('res_filiere')
                        <a href="{{ route('Resfiliere.dashboard') }}" class="nav__link">DashBoard</a>
                        @break

                    @case('vice_doyan')
                        <a href="{{ route('viceDoyan.dashboard') }}" class="nav__link">DashBoard</a>
                        @break

                    @default
                        <a href="{{ route('home') }}" class="nav__link">Home</a>
                @endswitch
                @endauth

            </li>

            <li class="nav__item">
                <a href="#" class="nav__link">Departement</a>
            </li>

            <li class="nav__item">
                <a href="{{route('about')}}" class="nav__link">About us</a>
            </li>
        </ul>

        <div class="nav__close" id="nav-close">
            <i class="ri-close-line"></i>
        </div>
    </div>

    <div class="nav__actions">

        <i class="ri-user-line nav__login" id="login-btn"></i>

        <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-line"></i>
        </div>
    </div>
</nav>