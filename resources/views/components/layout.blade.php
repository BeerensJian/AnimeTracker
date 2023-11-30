<!DOCTYPE html>
<html data-bs-theme="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <script src="//unpkg.com/alpinejs" defer></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        @vite(['resources/js/app.js', 'resources/scss/app.scss'])

    </head>
    <body>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand">Anime Tracker</a>
                <div class="d-flex align-items-center ">
                    <div>
                        @auth
                            <a href="/list" class="pe-2">My List</a>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        @endauth
                        @guest
                            <a href="/register">Register</a>
                            <a href="/login">Login</a>
                        @endguest
                    </div>


                </div>
            </div>
        </nav>
        <main class="container">
            {{ $slot }}
        </main>
    </body>
</html>
