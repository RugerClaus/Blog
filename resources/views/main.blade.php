<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <title>UA: @yield('title')</title>
</head>
<body>
    <nav>
        <div class="navbar">
            <a href="/">Home</a>
            <a href="/blog">Blog</a>
            <a href="/contact">Contact</a>
            <a href="/about">About</a>
        </div>
    </nav>
    <header>
        <div class="logo" aria-label="Unknown Anarchist Logo">
            <a href="/">
                <img src="{{asset('images/logo-96.webp')}}" alt="Unknown Anarchist Logo" class='logo-img'>
            </a>
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