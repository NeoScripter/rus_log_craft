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

    <main {{ $attributes->class([
        'space-y-16 sm:space-y-8 md:space-y-10 lg:space-y-16',
        'pt-16 md:pt-8 lg:pt-16' => $top_padding,
        'pt-0 md:pt-0 lg:pt-0' => !$top_padding,
        'pb-16 md:pb-8 lg:pb-16' => $bottom_padding,
        'pb-0 md:pb-0 lg:pb-0' => !$bottom_padding
    ]) }}>
        {{ $slot }}

        <livewire:webform />

        @include('user.partials.call-popup')
    </main>

    @include('user.partials.footer')

</body>

</html>
