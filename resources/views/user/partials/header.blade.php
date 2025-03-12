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
                    {{ __('partials/footer.Санкт-Петербург') }} <br>
                    {{ __('partials/footer.Без выходных с 09:00 до 18:00') }}
                </div>
                <a href="tel:+78123053489" class="block text-xl font-bold"><span class="font-light">(812)</span>
                    305-34-89</a>
                <a href="tel:+79123508524" class="block text-xl font-bold"><span class="font-light">+7 (912)</span>
                    350-85-24</a>
            </div>
            <div class="pl-4 border-l border-gray-200">
                <div class="text-sm text-gray-400">
                    {{ __('partials/footer.Москва') }} <br> {{ __('partials/footer.ПН.-ПТ. с 09:00 до 18:00') }}
                </div>
                <a href="tel:+79165141593" class="block text-xl font-bold"><span class="font-light">+7 (916)</span>
                    514-15-93</a>
            </div>
        </div>

        <div class="hidden h-11 md:flex md:items-center md:gap-10 lg:h-auto lg:flex-col lg:items-start lg:gap-4">
            <ul class="flex items-center gap-6" aria-label="Social media links">
                <li>
                    <a href="{{ __('components.whatsapp link') }}" aria-label="WhatsApp"
                        class="animated-svg block w-11 rounded-md bg-[#E5E3DB] transition-colors hover:bg-[#2C6849]">
                        {!! file_get_contents(public_path('images/partials/header/whatsapp.svg')) !!}
                    </a>
                </li>
                <li>
                    <a href="https://vk.com/share.php?url=https%3A%2F%2Fspbrb.ru%2Fcorp.htm&title=%D0%A1%D1%80%D1%83%D0%B1%D1%8B%20%D0%BE%D1%82%20%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8F%20%D0%A0%D1%83%D1%81%D1%8C%20%D0%91%D1%80%D0%B5%D0%B2%D0%B5%D0%BD%D1%87%D0%B0%D1%8F&utm_source=share2"
                        aria-label="VK"
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

        <div x-cloak x-show="showLanguages || isLarge" x-transition
            class="absolute z-10 grid gap-2 p-2 bg-white right-28 top-14 lg:static lg:p-0">
            <x-user.locale-btn locale_name='ru' aria_label="Русская версия" img_alt='Русский флаг' />
            <x-user.locale-btn locale_name='en' aria_label="Английская версия" img_alt='Английский флаг' />
            <x-user.locale-btn locale_name='cn' aria_label="Китайская версия" img_alt='Китайский флаг' />
            <x-user.locale-btn locale_name='jp' aria_label="Японская версия" img_alt='Японский флаг' />
        </div>


        <div x-data="{ showSearch: false, query: '' }" class="flex items-center gap-2 md:my-2 md:gap-4 lg:hidden">
            <button @click="showLanguages = !showLanguages" aria-label="Open language menu"
                class="flex items-center h-4 gap-1">
                <div class="w-6">
                    <img src="{{ asset('images/partials/header/' . app()->getLocale() . '-flag.svg') }}"
                        alt="English flag" class="object-contain object-center w-full h-full">
                </div>
                <div>
                    <img src="{{ asset('images/partials/header/arrow-down.svg') }}"
                        alt="{{ __('partials/header.Стрелка вниз') }}">
                </div>
            </button>

            <button @click="showSearch = true" aria-label="Search" class="block">
                <img src="{{ asset('images/partials/header/search.svg') }}" alt="{{ __('partials/header.Поиск') }}"
                    aria-hidden="true">
            </button>

            @include('user.partials.search-overlay')

            <button @click="showPopup = true" class="block p-2" aria-label="Open navigation menu">
                <img src="{{ asset('images/partials/header/burger.svg') }}" alt="{{ __('partials/header.Меню') }}">
            </button>
        </div>
    </div>

    <div x-show="showPopup || isLarge" x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="opacity-0 translate-x-full" x-transition:enter-end="opacity-100 translate-x-0"
        x-transition:leave="transition ease-in duration-500" x-transition:leave-start="opacity-0 translate-x-0"
        x-transition:leave-end="opacity-100 translate-x-full" @click.away="showPopup = false" x-cloak
        class="absolute right-0 top-0 z-20 w-full max-w-90 bg-white px-4 pb-8 shadow-md lg:relative lg:max-w-full lg:border-t lg:border-gray-200 lg:bg-[#F6F5EF] lg:px-32 lg:py-6 lg:shadow-none"
        aria-expanded="showPopup || isLarge" role="dialog" aria-labelledby="popup-title"
        aria-hidden="!showPopup && !isLarge">
        <header class="flex items-center justify-between my-8 lg:hidden">
            <div class="text-lg font-bold uppercase">{{ __('partials/header.Меню') }}</div>
            <button @click="showPopup = false" aria-label="{{ __('partials/header.Закрыть меню навигации') }}"
                class="p-2">
                <img src="{{ asset('images/partials/header/close-btn.svg') }}"
                    alt="{{ __('partials/header.Закрыть') }}" aria-hidden="true">
            </button>
        </header>
        <nav x-data="{ showSearch: false, query: '' }" aria-label="Main navigation">
            <ul class="px-3 space-y-6 lg:flex lg:items-center lg:justify-between lg:space-y-0">
                <li>
                    <a href="/" class="header-li {{ request()->routeIs('user.home') ? 'current' : '' }}"
                        aria-label="Go to Home">{{ __('partials/footer.Главная') }}</a>
                </li>
                <li>
                    <a href="/catalog" class="header-li {{ request()->is('catalog') ? 'current' : '' }}"
                        aria-label="View house projects">{{ __('partials/footer.Проекты домов') }}</a>
                </li>
                <li x-data="{ showMenu: false }" @mouseenter="showMenu = true" @mouseleave="showMenu = false"
                    class="relative" aria-haspopup="true" aria-expanded="showMenu">
                    <a href="{{ route('user.services') }}"
                        class="header-li {{ request()->routeIs('user.services') ? 'current' : '' }} inline-flex items-center gap-2">
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
                                role="menuitem">{{ __('partials/header.Строительство деревянных домов и бань «под ключ»') }}</a>
                        </li>
                        <li>
                            <a href="/services/#design"
                                class="text-sm font-semibold uppercase underline-offset-2 hover:underline focus-visible:underline"
                                role="menuitem">{{ __('partials/header.Готовые проекты и Индивидуальное проектирование') }}</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('user.tech') }}"
                        class="header-li {{ request()->routeIs('user.tech') ? 'current' : '' }}"
                        aria-label="Learn about technologies">{{ __('partials/header.Технологии') }}</a>
                </li>
                <li>
                    <a href="{{ route('user.gallery') }}"
                        class="header-li {{ request()->routeIs('user.gallery') ? 'current' : '' }}"
                        aria-label="View gallery">{{ __('partials/footer.Галерея') }}</a>
                </li>
                <li>
                    <a href="{{ route('user.about') }}"
                        class="header-li {{ request()->routeIs('user.about') ? 'current' : '' }}"
                        aria-label="Learn about the company">{{ __('partials/footer.О компании') }}</a>
                </li>
                <li>
                    <a href="{{ route('user.contacts') }}"
                        class="header-li {{ request()->routeIs('user.contacts') ? 'current' : '' }}"
                        aria-label="Contact us">{{ __('partials/footer.Контакты') }}</a>
                </li>
                <li class="hidden lg:flex lg:items-center lg:justify-center">
                    <button @click="showSearch = true" aria-label="{{ __('partials/header.Поиск') }}"
                        class="block">
                        <img src="{{ asset('images/partials/header/search-large.svg') }}"
                            alt="{{ __('partials/header.Поиск') }}" class="w-full h-full">
                    </button>
                </li>

                @include('user.partials.search-overlay')
            </ul>
        </nav>
    </div>


</header>
