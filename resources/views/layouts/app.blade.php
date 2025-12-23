<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Figma Test by Azizbek Jumanazarov</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Киноафиша, расписание сеансов и билеты">
    <link rel="icon" href="/favicon.svg">
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
