<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>DC Comics</title>

    @vite('resources/js/app.js')
    @yield('head-content')
</head>
<body>
    @include('partials.header')

    <main>
        @yield('main-content')
    </main>

    <main>
        @yield('products-content')
    </main>

    @include('partials.footer')

    @yield('script-content')
</body>
</html>