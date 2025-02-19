<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- JavaScript (deferred for better performance) -->
    <script src="{{ asset('js/dropdown.js') }}" defer></script>
    
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<!-- Header -->
<header>
    <!-- Include the Navigation Partial -->
    @include('partials.nav')
</header>

<!-- Main Content -->
<main>
    @yield('content')
</main>

<!-- Footer -->
<footer>
    @include('partials.footer')
</footer>

</body>
</html>
