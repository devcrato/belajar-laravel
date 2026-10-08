<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
@include('layouts.navbar')
<main class="container mt-4">
    @yield('content')
</main>
@include('layouts.footer')
<script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
