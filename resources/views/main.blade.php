<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>Unknown Anarchist: @yield('title')</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/blog">Blog</a>
        <a href="/contact">Contact</a>
        <a href="/about">About</a>
    </nav>
    <header>
        <div class="header-text">
            <h1>Unknown Anarchist</h1>
        </div>
        <div class="logo" aria-label="Unknown Anarchist Logo">
            <img src="{{asset('images/logo-96.webp')}}" alt="Unknown Anarchist Logo" class='logo-img'>
        </div>

    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        Copyleft - take what parts ya want, just throw me a bone.
    </footer>
</body>
</html>