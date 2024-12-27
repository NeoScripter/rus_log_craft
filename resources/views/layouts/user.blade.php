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

    <header x-data="{ showPopup: false }" class="sticky top-0">
        <div class="flex items-center justify-between gap-2 px-4 py-3">
            <div class="w-40">
                <img src="{{ asset('images/partials/logo.webp') }}" alt="Rus Log Craft logo" class="object-contain object-center w-full h-full">
            </div>

            <div class="hidden md:flex md:items-center md:gap-10 h-11">
                <ul class="flex items-center gap-6">
                    <li>
                        <a href="">
                            {!! file_get_contents(public_path('images/partials/whatsapp.svg')) !!}
                        </a>
                    </li>
                    <li>
                        <a href="">
                            {!! file_get_contents(public_path('images/partials/vk.svg')) !!}
                        </a>
                    </li>
                    <li>
                        <a href="">
                            {!! file_get_contents(public_path('images/partials/telegram.svg')) !!}
                        </a>
                    </li>
                </ul>
                <a href="" class="inline-flex items-center gap-1">
                    <img src="{{ asset('images/partials/mail.svg')}}" alt="" aria-hidden="true">
                    info@spbrb.ru
                </a>
            </div>

            <div class="flex items-center gap-2">
                <button class="flex items-center h-4 gap-1">
                    <div class="w-6">
                        <img src="{{ asset('images/partials/eng_flag.svg') }}" alt="" class="object-contain object-center w-full h-full">
                    </div>
                    <div>
                        <img src="{{ asset('images/partials/arrow-down.svg')}}" alt="">
                    </div>
                </button>

                <button class="block">
                    <img src="{{ asset('images/partials/search.svg')}}" alt="">
                </button>

                <button
                    @click="showPopup = true"
                    class="block p-2">
                    <img src="{{ asset('images/partials/burger.svg')}}" alt="">
                </button>
            </div>
        </div>

        <div x-show="showPopup" x-transition x-cloak class="absolute top-0 right-0 p-2 bg-white shadow-md" aria-expanded="showPopup">
            <header class="flex items-center justify-between">
                <div>Меню</div>
                <button
                    @click="showPopup = false"
                    aria-labelledby="close-popup-btn">
                    <p id="close-popup-btn" class="sr-only">Закрыть меню навигации</p>
                    <img src="{{ asset('images/partials/close-btn.svg') }}" alt="" aria-hidden="true">
                </button>
            </header>
            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href="">Главная</a>
                    </li>
                    <li>
                        <a href="">Проекты домов</a>
                    </li>
                    <li>
                        <a href="">Услуги</a>
                    </li>
                    <li>
                        <a href="">Технологии</a>
                    </li>
                    <li>
                        <a href="">Галерея</a>
                    </li>
                    <li>
                        <a href="">О компании</a>
                    </li>
                    <li>
                        <a href="">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>


    </header>

    {{ $slot }}

</body>

</html>
