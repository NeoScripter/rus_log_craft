<header x-data="{
    showPopup: false,
    isLarge: false,

    init() {
        const mediaQuery = window.matchMedia('(min-width: 1440px)');

        this.isLarge = mediaQuery.matches;

        mediaQuery.addEventListener('change', (e) => {
            this.isLarge = e.matches;
        });
    },
}"
x-init="init()"
class="sticky top-0 z-50 bg-white border-b border-gray-200">
<div class="flex items-center justify-between gap-2 px-4 py-3 md:my-6 lg:my-0 lg:py-4 lg:mx-32">
    <div class="w-40 lg:w-80">
        <img src="{{ asset('images/partials/header/logo.webp') }}" alt="Rus Log Craft logo" class="object-contain object-center w-full h-full">
    </div>

    <div class="hidden lg:flex lg:items-start">
        <div class="pr-4">
            <div class="text-sm text-gray-400">
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

    <div class="hidden md:flex md:items-center md:gap-10 h-11 lg:flex-col lg:items-start lg:gap-4 lg:h-auto">
        <ul class="flex items-center gap-6" aria-label="Social media links">
            <li>
                <a href="" aria-label="WhatsApp" class="bg-[#E5E3DB] block transition-colors animated-svg w-11 rounded-md hover:bg-[#2C6849]">
                    {!! file_get_contents(public_path('images/partials/header/whatsapp.svg')) !!}
                </a>
            </li>
            <li>
                <a href="" aria-label="VK" class="bg-[#E5E3DB] block p-1.5 transition-colors w-11 animated-svg rounded-md hover:bg-[#2C6849]">
                    {!! file_get_contents(public_path('images/partials/header/vk.svg')) !!}
                </a>
            </li>
            <li>
                <a href="" aria-label="Telegram" class="bg-[#E5E3DB] block p-1.5 transition-colors w-11 animated-svg rounded-md hover:bg-[#2C6849]">
                    {!! file_get_contents(public_path('images/partials/header/telegram.svg')) !!}
                </a>
            </li>
        </ul>
        <a href="mailto:info@spbrb.ru" class="inline-flex items-center gap-2 font-semibold underline uppercase underline-offset-2">
            <img src="{{ asset('images/partials/header/mail.svg')}}" alt="Mail icon" aria-hidden="true">
            <span class="transition-colors duration-300 hover:text-white hover:bg-dark-black focus-visible:text-white focus-visible:bg-dark-black">info@spbrb.ru</span>
        </a>
    </div>

    <div class="hidden gap-2 lg:grid">
        <button aria-label="Switch to English" class="w-6">
            <img src="{{ asset('images/partials/header/eng-flag.svg') }}" alt="" aria-hidden="true" class="object-contain object-center w-full h-full">
        </button>
        <button aria-label="Switch to Chinese" class="w-6">
            <img src="{{ asset('images/partials/header/chinese-flag.svg') }}" alt="" aria-hidden="true" class="object-contain object-center w-full h-full">
        </button>
        <button aria-label="Switch to Japanese" class="w-6">
            <img src="{{ asset('images/partials/header/japanese-flag.svg') }}" alt="" aria-hidden="true" class="object-contain object-center w-full h-full">
        </button>
    </div>

    <div class="flex items-center gap-2 md:gap-4 md:my-2 lg:hidden">
        <button aria-label="Open language menu" class="flex items-center h-4 gap-1">
            <div class="w-6">
                <img src="{{ asset('images/partials/header/eng-flag.svg') }}" alt="English flag"  class="object-contain object-center w-full h-full">
            </div>
            <div>
                <img src="{{ asset('images/partials/header/arrow-down.svg')}}" alt="">
            </div>
        </button>

        <button aria-label="Search" class="block">
            <img src="{{ asset('images/partials/header/search.svg')}}" alt="Search icon" aria-hidden="true">
        </button>

        <button
            @click="showPopup = true"
            class="block p-2"
            aria-label="Open navigation menu">
            <img src="{{ asset('images/partials/header/burger.svg')}}" alt="Menu icon">
        </button>
    </div>
</div>

<div x-show="showPopup || isLarge"
    x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="opacity-0 translate-x-full"
    x-transition:enter-end="opacity-100 translate-x-0"
    x-transition:leave="transition ease-in duration-500"
    x-transition:leave-start="opacity-0 translate-x-0"
    x-transition:leave-end="opacity-100 translate-x-full"
    @click.away="showPopup = false"
    x-cloak class="absolute top-0 right-0 w-full px-4 pb-8 bg-white shadow-md max-w-90 lg:static lg:max-w-full lg:bg-[#F6F5EF] lg:border-t lg:border-gray-200 lg:px-32 lg:shadow-none lg:py-6" aria-expanded="showPopup || isLarge" role="dialog"
    aria-labelledby="popup-title"
    aria-hidden="!showPopup && !isLarge">
    <header class="flex items-center justify-between my-8 lg:hidden">
        <div class="text-lg font-bold uppercase">Меню</div>
        <button
            @click="showPopup = false"
            aria-label="Закрыть меню навигации"
            class="p-2">
            <img src="{{ asset('images/partials/header/close-btn.svg') }}" alt="" aria-hidden="true">
        </button>
    </header>
    <nav aria-label="Main navigation">
        <ul class="px-3 space-y-6 lg:flex lg:space-y-0 lg:items-center lg:justify-between">
            <li>
                <a href="/" class="header-li" aria-label="Go to Home">Главная</a>
            </li>
            <li>
                <a href="" class="header-li" aria-label="View house projects">Проекты домов</a>
            </li>
            <li x-data="{ showMenu: false }" @mouseenter="showMenu = true" @mouseleave="showMenu = false" class="relative"  aria-haspopup="true" aria-expanded="showMenu">
                <a href="{{ route('user.services') }}" class="inline-flex items-center gap-2 header-li">
                    Услуги
                    <img src="{{ asset('images/partials/header/popup-arrow-up.svg')}}" alt="Expand submenu" aria-hidden="true" class="w-3 mt-0.5 transition-transform" :class="showMenu ? '' : 'rotate-180'">
                </a>
                <ul x-cloak x-transition x-show="showMenu" role="menu" class="mt-4 ml-2 space-y-4 list-inside lg:absolute lg:top-5 lg:p-4 lg:w-60 lg:shadow-md lg:-left-20 lg:bg-[#F6F5EF]" style="list-style-image: url('{{ asset('images/partials/header/green-ellipse.svg') }}')">
                    <li>
                        <a href="/services/#saunas" class="text-sm font-semibold uppercase hover:underline focus-visible:underline underline-offset-2" role="menuitem">Строительство деревянных домов и бань «под ключ»</a>
                    </li>
                    <li>
                        <a href="/services/#design" class="text-sm font-semibold uppercase hover:underline focus-visible:underline underline-offset-2" role="menuitem">Готовые проекты и Индивидуальное проектирование</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('user.tech') }}" class="header-li" aria-label="Learn about technologies">Технологии</a>
            </li>
            <li>
                <a href="{{ route('user.gallery') }}" class="header-li" aria-label="View gallery">Галерея</a>
            </li>
            <li>
                <a href="{{ route('user.about') }}" class="header-li" aria-label="Learn about the company">О компании</a>
            </li>
            <li>
                <a href="{{ route('user.contacts') }}" class="header-li" aria-label="Contact us">Контакты</a>
            </li>
            <li class="hidden lg:flex lg:items-center lg:justify-center">
                <a href="" aria-label="Search" class="block">
                    <img src="{{ asset('images/partials/header/search-large.svg')}}"  alt="Search icon" class="w-full h-full">
                </a>
            </li>
        </ul>
    </nav>
</div>


</header>
