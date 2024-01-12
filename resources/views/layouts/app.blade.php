<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])

    <!-- Fonts -->

</head>

<body>
    <x-navigation-menu />
    <div class="py-5">
        <div class="container">
            {{ $slot }}
        </div>
    </div>
</body>

</html>