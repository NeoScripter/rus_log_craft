<header x-data="{
    showPopup: false,
    isLarge: false,
    showLanguages: false,

    init() {
        const mediaQuery = window.matchMedia('(min-width: 1440px)');

        this.isLarge = mediaQuery.matches;

        mediaQuery.addEventListener('change', (e) => {
            this.isLarge = e.matches;
        });
    },
}" x-init="init()" class="sticky top-0 z-50 bg-white border-b border-gray-200">
    <div class="flex items-center justify-between gap-2 px-4 py-3 md:my-6 lg:mx-32 lg:my-0 lg:py-4">
        <div class="w-40 lg:w-80">
            <img src="{{ asset('images/partials/header/logo.webp') }}" alt="Rus Log Craft logo"
                class="object-contain object-center w-full h-full">
        </div>

        <div class="hidden lg:flex lg:items-start">
            <div class="pr-4">
                <div class="text-sm text-gray-400">
                    Санкт-Петербург <br> Без выходных с 09:00 до 18:00
                </div>
                <a href="tel:+78123053489" class="block text-xl font-bold"><span class="font-light">(812)</span>
                    305-34-89</a>
                <a href="tel:+79123508524" class="block text-xl font-bold"><span class="font-light">+7 (912)</span>
                    350-85-24</a>
            </div>
            <div class="pl-4 border-l border-gray-200">
                <div class="text-sm text-gray-400">
                    Москва <br> ПН.-ПТ. с 09:00 до 18:00
                </div>
                <a href="tel:+79165141593" class="block text-xl font-bold"><span class="font-light">+7 (916)</span>
                    514-15-93</a>
            </div>
        </div>

        <div class="hidden h-11 md:flex md:items-center md:gap-10 lg:h-auto lg:flex-col lg:items-start lg:gap-4">
            <ul class="flex items-center gap-6" aria-label="Social media links">
                <li>
                    <a href="" aria-label="WhatsApp"
                        class="animated-svg block w-11 rounded-md bg-[#E5E3DB] transition-colors hover:bg-[#2C6849]">
                        {!! file_get_contents(public_path('images/partials/header/whatsapp.svg')) !!}
                    </a>
                </li>
                <li>
                    <a href="" aria-label="VK"
                        class="animated-svg block w-11 rounded-md bg-[#E5E3DB] p-1.5 transition-colors hover:bg-[#2C6849]">
                        {!! file_get_contents(public_path('images/partials/header/vk.svg')) !!}
                    </a>
                </li>
                <li>
                    <a href="" aria-label="Telegram"
                        class="animated-svg block w-11 rounded-md bg-[#E5E3DB] p-1.5 transition-colors hover:bg-[#2C6849]">
                        {!! file_get_contents(public_path('images/partials/header/telegram.svg')) !!}
                    </a>
                </li>
            </ul>
            <a href="mailto:info@spbrb.ru"
                class="inline-flex items-center gap-2 font-semibold underline uppercase underline-offset-2">
                <img src="{{ asset('images/partials/header/mail.svg') }}" alt="Mail icon" aria-hidden="true">
                <span
                    class="transition-colors duration-300 hover:bg-dark-black hover:text-white focus-visible:bg-dark-black focus-visible:text-white">info@spbrb.ru</span>
            </a>
        </div>

        <div x-cloak x-show="showLanguages || isLarge" x-transition class="absolute z-10 grid gap-2 p-2 bg-white lg:p-0 right-28 top-14 lg:static">
            <x-user.locale-btn locale_name='ru' aria_label="Русская версия" img_alt='Русский флаг'/>
            <x-user.locale-btn locale_name='en' aria_label="Английская версия" img_alt='Английский флаг'/>
            <x-user.locale-btn locale_name='cn' aria_label="Китайская версия" img_alt='Китайский флаг'/>
            <x-user.locale-btn locale_name='jp' aria_label="Японская версия" img_alt='Японский флаг'/>
        </div>


        <div class="flex items-center gap-2 md:my-2 md:gap-4 lg:hidden">
            <button @click="showLanguages = !showLanguages" aria-label="Open language menu" class="flex items-center h-4 gap-1">
                <div class="w-6">
                    <img src="{{ asset('images/partials/header/'.app()->getLocale().'-flag.svg') }}" alt="English flag"
                        class="object-contain object-center w-full h-full">
                </div>
                <div>
                    <img src="{{ asset('images/partials/header/arrow-down.svg') }}" alt="Стрелка вниз">
                </div>
            </button>

            <button aria-label="Search" class="block">
                <img src="{{ asset('images/partials/header/search.svg') }}" alt="Search icon" aria-hidden="true">
            </button>

            <button @click="showPopup = true" class="block p-2" aria-label="Open navigation menu">
                <img src="{{ asset('images/partials/header/burger.svg') }}" alt="Menu icon">
            </button>
        </div>
    </div>

    <div x-show="showPopup || isLarge" x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="opacity-0 translate-x-full" x-transition:enter-end="opacity-100 translate-x-0"
        x-transition:leave="transition ease-in duration-500" x-transition:leave-start="opacity-0 translate-x-0"
        x-transition:leave-end="opacity-100 translate-x-full" @click.away="showPopup = false" x-cloak
        class="absolute right-0 top-0 w-full max-w-90 bg-white px-4 pb-8 shadow-md lg:static lg:max-w-full lg:border-t lg:border-gray-200 lg:bg-[#F6F5EF] lg:px-32 lg:py-6 lg:shadow-none z-20"
        aria-expanded="showPopup || isLarge" role="dialog" aria-labelledby="popup-title"
        aria-hidden="!showPopup && !isLarge">
        <header class="flex items-center justify-between my-8 lg:hidden">
            <div class="text-lg font-bold uppercase">Меню</div>
            <button @click="showPopup = false" aria-label="Закрыть меню навигации" class="p-2">
                <img src="{{ asset('images/partials/header/close-btn.svg') }}" alt="" aria-hidden="true">
            </button>
        </header>
        <nav aria-label="Main navigation">
            <ul class="px-3 space-y-6 lg:flex lg:items-center lg:justify-between lg:space-y-0">
                <li>
                    <a href="/" class="header-li" aria-label="Go to Home">Главная</a>
                </li>
                <li>
                    <a href="" class="header-li" aria-label="View house projects">Проекты домов</a>
                </li>
                <li x-data="{ showMenu: false }" @mouseenter="showMenu = true" @mouseleave="showMenu = false"
                    class="relative" aria-haspopup="true" aria-expanded="showMenu">
                    <a href="{{ route('user.services') }}" class="inline-flex items-center gap-2 header-li">
                        Услуги
                        <img src="{{ asset('images/partials/header/popup-arrow-up.svg') }}" alt="Expand submenu"
                            aria-hidden="true" class="mt-0.5 w-3 transition-transform"
                            :class="showMenu ? '' : 'rotate-180'">
                    </a>
                    <ul x-cloak x-transition:enter="transition ease-in duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                        x-show="showMenu" role="menu"
                        class="ml-2 mt-4 list-inside space-y-4 text-balance lg:absolute lg:-left-20 lg:top-5 lg:w-60 lg:bg-[#F6F5EF] lg:p-4 lg:shadow-md"
                        style="list-style-image: url('{{ asset('images/partials/header/green-ellipse.svg') }}')">
                        <li>
                            <a href="/services/#saunas"
                                class="text-sm font-semibold uppercase underline-offset-2 hover:underline focus-visible:underline"
                                role="menuitem">Строительство деревянных домов и бань «под ключ»</a>
                        </li>
                        <li>
                            <a href="/services/#design"
                                class="text-sm font-semibold uppercase underline-offset-2 hover:underline focus-visible:underline"
                                role="menuitem">Готовые проекты и Индивидуальное проектирование</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('user.tech') }}" class="header-li"
                        aria-label="Learn about technologies">Технологии</a>
                </li>
                <li>
                    <a href="{{ route('user.gallery') }}" class="header-li" aria-label="View gallery">Галерея</a>
                </li>
                <li>
                    <a href="{{ route('user.about') }}" class="header-li" aria-label="Learn about the company">О
                        компании</a>
                </li>
                <li>
                    <a href="{{ route('user.contacts') }}" class="header-li" aria-label="Contact us">Контакты</a>
                </li>
                <li class="hidden lg:flex lg:items-center lg:justify-center">
                    <a href="" aria-label="Search" class="block">
                        <img src="{{ asset('images/partials/header/search-large.svg') }}" alt="Search icon"
                            class="w-full h-full">
                    </a>
                </li>
            </ul>
        </nav>
    </div>


</header>
