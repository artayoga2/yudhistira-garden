<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}">
    <title>Yudhistira Garden</title>
    <meta name="description" content="Hydroponics">
    <meta name="keywords" content="Hydroponics">
    @stack('styles')
</head>
<body class="body-main font-Inter">

    <!-- Navbar -->
    @include('layouts/components/navbar')
    <!-- /.Navbar -->

    <!-- Content -->
    @yield('content')
    <!-- /.Content -->

    <!-- Footer -->
    @include('layouts/components/footer')
    <!-- /.Footer -->

    <script src="{{ URL::asset('js/flowbite/dist/flowbite.min.js') }}"></script>
    @stack('scripts')
</body>
</html>
