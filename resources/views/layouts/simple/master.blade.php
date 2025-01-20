<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Defood | Restauran & Food Delivery</title>
    <link rel="shortcut icon" href="/assets/images/logo/favicon.ico" type="image/x-icon" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="/assets/styles/font-awesome/font-awesome.css" />
    <!-- Themify -->
    <link rel="stylesheet" href="/assets/styles/themify/themify.css" />
    <!-- AOS -->
    <link href="/assets/styles/aos/aos.css" rel="stylesheet">
    @yield('style')
    @vite('resources/js/app.js')
</head>

<body class="overflow-hidden">
    @include('components.preloader')
    @include('layouts.simple.topbar')
    @include('layouts.simple.navbar')

    <x-success-message />

    <main>
        @yield('content')
    </main>
    @include('layouts.simple.footer')
    @include('components.backtotop')

    <!-- Flowbite -->
    <script src="/assets/script/flowbite.bundle.js"></script>
    <!-- AOS -->
    <script src="/assets/script/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @yield('script')
</body>

</html>
