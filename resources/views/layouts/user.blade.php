<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="overflow-x-clip">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-main overflow-x-clip">

    @include('user.partials.header')

    <main class="py-16 space-y-16 sm:space-y-8 md:space-y-10 lg:space-y-16 md:py-8 lg:py-16">
        {{ $slot }}
    </main>

    @include('user.partials.footer')

</body>

</html>
