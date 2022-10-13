<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Admin - PPKIJK</title>

    <meta name="description" content="Admin - PPKIJK">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="{{ asset('media/favicons/logo.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/logo.png') }}">
  @yield('css')

  @vite(['resources/sass/main.scss', 'resources/js/dashmix/app.js'])

  @yield('js')
</head>

<body>
    <div id="page-container">
        <main id="main-container">
            @yield('content')
        </main>
    </div>
</body>
</html>
