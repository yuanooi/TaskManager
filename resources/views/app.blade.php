<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        @include('layout.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('layout.footer')
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>