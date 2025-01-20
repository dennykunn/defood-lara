<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Defood</title>
    <link rel="shortcut icon" href="/assets/images/logo/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/assets/styles/themify/themify.css" />
    @vite('resources/js/app.js')
    @yield('style')
</head>

<body class="overflow-hidden">
    @include('components.preloader')
    <main>
        @yield('content')
    </main>

    <script>
        const errorMessage = document.getElementById("errorMessage")
        const closeMessage = document.getElementById("closeMessage")

        closeMessage.addEventListener("click", () => {
            errorMessage.classList.add("hidden");
        })
    </script>
    @yield('script')
</body>

</html>
