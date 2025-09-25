<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <h1>This is my Blog website</h1>
    <header>
        <a href="/home">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
          <p>&copy; {{ date('Y') }} My Blog</p>
    </footer>
</body>
</html>