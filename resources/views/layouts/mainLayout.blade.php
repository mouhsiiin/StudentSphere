<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/announcement.css') }}">

    <title>{{config('app.name')}}</title>
</head>

<body data-wrong-credentials="{{ $errors->has('message') }}">
    <header class="header" id="header">
        @include('layouts.nav')
    </header>

    <div class="login" id="login" >
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

                <button type="submit" class="login__button">Log In</button>
                
                @error('message')
                <div class="text_danger">{{ $message }}</div>
                @enderror
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

        const login = document.getElementById("login"),
            loginBtn = document.getElementById("login-btn"),
            loginClose = document.getElementById("login-close");
            const wrongCredentials = {!! json_encode($errors->has('message')) !!};

            if (wrongCredentials) {
                login.classList.add("show-login");
            }
        loginBtn.addEventListener("click", () => {
            login.classList.add("show-login");
        });

        loginClose.addEventListener("click", () => {
            login.classList.remove("show-login");
        });
    </script>
    
</body>

</html>