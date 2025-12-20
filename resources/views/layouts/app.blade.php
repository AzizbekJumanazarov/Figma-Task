<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Figma Test by Azizbek Jumanazarov</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<x-header />

<main>
    @yield('content')
</main>

<x-footer />

<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
