<!DOCTYPE html>
<html data-bs-theme="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/js/app.js', 'resources/scss/app.scss'])

    </head>
    <body>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand">Anime Tracker</a>
                <div class="d-flex align-items-center ">
                    <a href="" class="pe-2">My Profile</a>
                    <a href="">Register</a>
                    <a href="">Login</a>
                </div>
            </div>
        </nav>
        <main class="container">
            {{ $slot }}
        </main>
    </body>
</html>
