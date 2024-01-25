<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/announcement.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{config('app.name')}}</title>
</head>

<body>
    <header class="header" id="header">
        @include('layouts.nav')
    </header>

    <div class="search" id="search">
        <form action="" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <input type="search" placeholder="What are you looking for?" class="search__input" />
        </form>

        <i class="ri-close-line search__close" id="search-close"></i>
    </div>

    <div class="login" id="login">
        <form method="POST" action="{{ route('login') }}" class="login__form">
            @csrf
            <h2 class="login__title">Log In</h2>

            <div class="login__group">
                <div>
                    <label for="email" class="login__label">Email</label>
                    <input type="email" placeholder="Write your email" id="email" class="login__input"  name="email" required/>
                </div>

                <div>
                    <label for="password" class="login__label">Password</label>
                    <input type="password" placeholder="Enter your password" id="password" class="login__input" name="password" required/>
                </div>
            </div>

            <div>
                <p class="login__signup">
                    You do not have an account?
                </p>

                <button type="submit" class="login__button">Log In</button>
            </div>
        </form>

        <i class="ri-close-line login__close" id="login-close"></i>
    </div>

    <main class="main">
       @yield('content')
    </main>

    <script>
        const navMenu = document.getElementById("nav-menu"),
            navToggle = document.getElementById("nav-toggle"),
            navClose = document.getElementById("nav-close");

        navToggle.addEventListener("click", () => {
            navMenu.classList.add("show-menu");
        });

        navClose.addEventListener("click", () => {
            navMenu.classList.remove("show-menu");
        });

        const search = document.getElementById("search"),
            searchBtn = document.getElementById("search-btn"),
            searchClose = document.getElementById("search-close");

        searchBtn.addEventListener("click", () => {
            search.classList.add("show-search");
        });

        searchClose.addEventListener("click", () => {
            search.classList.remove("show-search");
        });

        const login = document.getElementById("login"),
            loginBtn = document.getElementById("login-btn"),
            loginClose = document.getElementById("login-close");

        loginBtn.addEventListener("click", () => {
            login.classList.add("show-login");
        });

        loginClose.addEventListener("click", () => {
            login.classList.remove("show-login");
        });
    </script>
</body>

</html>