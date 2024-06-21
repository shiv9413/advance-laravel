<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Extra -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	    <link rel="stylesheet" href="{{ asset('custom/style.css')}}">

        <!-- Scripts -->
        @routes
        @viteReactRefresh
        @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
        @inertiaHead
    </head>
    <body class="img js-fullheight font-sans antialiased" style="background-image: url({{asset('custom/images/bg.jpg')}});">
        @inertia
    </body>
    <script src="{{ asset('custom/jquery.min.js') }}"></script>
    <script src="{{ asset('custom/popper.js') }}"></script>
    <script src="{{ asset('custom/bootstrap.min.js') }}"></script>
    <script src="{{ asset('custom/main.js') }}"></script>
</html>
