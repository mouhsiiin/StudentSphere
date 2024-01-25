<nav class="nav container">
    <a href="{{ route('home') }}" class="nav__logo nav__item">{{config('app.name')}}</a>

    <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
                @auth
                @switch(Auth::user()->role)
                    @case('prof_res_module')
                    <li class="nav__item">
                        <a href="{{ route('ProfResModule.dashboard') }}" class="nav__link">DashBoard</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route('profResModu.announcements.create') }}" class="nav__link" >create an announcement</a>
                    </li>

                        @break

                    @case('student')
                    <li class="nav__item">
                        <a href="{{ route('student.dashboard') }}" class="nav__link">DashBoard</a>
                    </li>
                        <li class="nav__item">
                        <a href="{{route('demandes.create')}}" class="nav__link">creat a demand</a>
                    </li>

                        @break

                    @case('chef_dep')
                    <li class="nav__item">
                        <a href="{{ route('chefDep.dashboard') }}" class="nav__link">DashBoard</a>
                    </li>
                        <li class="nav__item">
                        <a href="{{ route('chefDep.announcements.create') }}" class="nav__link">create an announcement</a>
                    </li>

                        @break

                    @case('res_filiere')
                    <li class="nav__item">
                        <a href="{{ route('Resfiliere.dashboard') }}" class="nav__link">DashBoard</a>
                    </li>
                        <li class="nav__item">
                        <a href="{{ route('ResFiliere.announcements.create') }}" class="nav__link">create an announcement</a>
                    </li>
                        @break

                    @case('vice_doyan')
                    <li class="nav__item">
                        <a href="{{ route('viceDoyan.dashboard') }}" class="nav__link">DashBoard</a>
                    </li>
                        @break

                    @default
                    <li class="nav__item">
                        <a href="{{ route('home') }}" class="nav__link">Home</a>
                    </li>
                @endswitch
                @endauth


            <li class="nav__item">
                <a href="{{route('filiereShow')}}" class="nav__link">Filiere</a>
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

        <i class="ri-user-line nav__login nav__item" id="login-btn"></i>

        <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-line"></i>
        </div>
    </div>
</nav>