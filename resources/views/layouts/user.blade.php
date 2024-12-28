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

    {{ $slot }}

    <footer class="text-[#FAFAFA] bg-[#2F3535]">

        <div>
            <div>
                <img src="{{ asset('images/partials/footer/logo-footer.webp')}}" alt="">
            </div>

            <nav>
                <ul>
                    <li>
                        <a href="">Главная</a>
                    </li>
                    <li>
                        <a href="">О компании</a>
                    </li>
                    <li>
                        <a href="">Контакты</a>
                    </li>
                    <li>
                        <a href="">Проекты домов</a>
                        <ul role="menu" class="mt-4 ml-2 space-y-4 list-inside" style="list-style-image: url('{{ asset('images/partials/footer/ellipse.svg') }}')">
                            <li>
                                <a href="" class="text-sm" role="menuitem">Дома из бревна</a>
                            </li>
                            <li>
                                <a href="" class="text-sm" role="menuitem">Бани из бревна</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div class="flex flex-col items-start gap-10">
                <a href="mailto:info@spbrb.ru" class="inline-flex items-center gap-2 font-semibold underline uppercase underline-offset-2">
                    <img src="{{ asset('images/partials/footer/email.svg')}}" alt="Mail icon" aria-hidden="true">
                    info@spbrb.ru
                </a>
                <ul class="flex items-center gap-6" aria-label="Social media links">
                    <li>
                        <a href="" aria-label="WhatsApp" class="bg-[#E5E3DB] block transition-colors animated-svg w-11 rounded-md hover:bg-[#2C6849]">
                            {!! file_get_contents(public_path('images/partials/footer/whatsapp.svg')) !!}
                        </a>
                    </li>
                    <li>
                        <a href="" aria-label="VK" class="bg-[#E5E3DB] block p-1.5 transition-colors w-11 animated-svg rounded-md hover:bg-[#2C6849]">
                            {!! file_get_contents(public_path('images/partials/footer/vk.svg')) !!}
                        </a>
                    </li>
                    <li>
                        <a href="" aria-label="Telegram" class="bg-[#E5E3DB] block p-1.5 transition-colors w-11 animated-svg rounded-md hover:bg-[#2C6849]">
                            {!! file_get_contents(public_path('images/partials/footer/telegram.svg')) !!}
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex items-start">
            <div class="pr-4">
                <div class="text-sm">
                    Санкт-Петербург <br> Без выходных с 09:00 до 18:00
                </div>
                <a href="tel:+78123053489" class="block text-xl font-bold"><span class="font-light">(812)</span> 305-34-89</a>
                <a href="tel:+79123508524" class="block text-xl font-bold"><span class="font-light">+7 (912)</span> 350-85-24</a>
            </div>
            <div class="pl-4 border-l border-gray-200">
                <div class="text-sm text-gray-400">
                    Москва <br> ПН.-ПТ. с 09:00 до 18:00
                </div>
                <a href="tel:+79165141593" class="block text-xl font-bold"><span class="font-light">+7 (916)</span> 514-15-93</a>
            </div>
        </div>

        <div>
            <div>
                <p>ООО “Русь Бревенчатая”</p>
                <p>ИНН 7806399979</p>
                <a href="">Политика конфиденциальности</a>
            </div>

            <div>
                © 2024 spbrb.ru — Проектирование и строительство деревянных домов и срубов бань. Вся информация размещенная на сайте является охраняемой в соответствии с Российским и международным законодательством о правах на результаты интеллектуальной деятельности, включаяя авторское право. Информация размещенная на сайте носит информационный характер и ни при каких условиях не является публичной офертой определяемой положениями Статьи 437 (2) Гражданского кодекса РФ.
            </div>
        </div>

        <a href="">Разработчик сайта</a>

    </footer>

</body>

</html>
