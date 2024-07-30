<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>eCommerce</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Ecomerce') }}</title>
    <!--  Links de template -->
    <link rel="shortcut icon" href="{{ asset('img/Logo.png') }}" />
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('cliente/css/bootstrap.min.css') }}" />
    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{ asset('cliente/css/slick.css') }}" />
    <!-- nouislider -->

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('cliente/css/style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style-prefix.css') }}">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>

<body>
    <!-- /NAVIGATION -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div id="store" class="col-md-12">
                    @include('layouts.mensajes')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>

</html>
