<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/log/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/log/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/log/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/log/css/icomoon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/log/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/log/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/log/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/log/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/log/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/log/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/log/css/style.css')}}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    


    <script>
        function enviarMensaje() {
            var response = grecaptcha.getResponse();
            if (response.length === 0) {
                console.log("Usuario sospechoso");
                return false;
            } else {
                return true;
            }
        }
    </script>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>

</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@yield('scriptsFotter')

</html>