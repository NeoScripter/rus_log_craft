<footer class="space-y-8 bg-[#2F3535] px-4 py-10 text-[#FAFAFA] xs:space-y-6 lg:px-32">

    <div class="flex flex-col flex-wrap gap-8 pb-8 border-b border-gray-300 xs:flex-row xs:justify-between xs:gap-6">
        <div class="w-80">
            <img src="{{ asset('images/partials/footer/logo-footer.webp') }}" alt="Логотип компании 'Русь бревенчатая'"
                class="w-full">
        </div>

        <nav class="xs:order-2 xs:basis-full xl:basis-2/3">
            <ul class="flex flex-col justify-between text-xl gap-11 xs:flex-row">
                <div class="basis-full space-y-11 md:flex md:items-start md:justify-around md:gap-11 md:space-y-0">
                    <div class="space-y-4">
                        <li>
                            <a href="/" class="underline-offset-4 hover:underline focus-visible:underline">
                                {{ __('partials/footer.Главная') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('user.about') }}"
                                class="underline-offset-4 hover:underline focus-visible:underline">
                                {{ __('partials/footer.О компании') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('user.contacts') }}"
                                class="underline-offset-4 hover:underline focus-visible:underline">
                                {{ __('partials/footer.Контакты') }}</a>
                        </li>
                    </div>
                    <div>
                        <li>
                            <a href="/catalog" class="underline-offset-4 hover:underline focus-visible:underline">
                                {{ __('partials/footer.Проекты домов') }}</a>
                            <ul role="menu" class="mt-1 ml-1 space-y-1 list-inside"
                                style="list-style-image: url('{{ asset('images/partials/footer/ellipse.svg') }}')">
                                <li><a href="/catalog?type=house"
                                        class="text-sm underline-offset-4 hover:underline focus-visible:underline"
                                        role="menuitem">
                                        {{ __('partials/footer.Дома из бревна') }}</a></li>
                                <li><a href="/catalog?type=bath"
                                        class="text-sm underline-offset-4 hover:underline focus-visible:underline"
                                        role="menuitem">
                                        {{ __('partials/footer.Бани из бревна') }}</a></li>
                                <li><a href="/catalog?type=house_bath"
                                        class="text-sm underline-offset-4 hover:underline focus-visible:underline"
                                        role="menuitem">
                                        {{ __('partials/footer.Дома с баней') }}</a></li>
                                <li><a href="/catalog?type=utility"
                                        class="text-sm underline-offset-4 hover:underline focus-visible:underline"
                                        role="menuitem">
                                        {{ __('partials/footer.Хозпостройки') }}</a></li>
                            </ul>
                        </li>
                    </div>
                </div>
                <div class="basis-full space-y-11 md:flex md:items-start md:justify-around md:gap-11 md:space-y-0">
                    <div>
                        <li>
                            <a href="{{ route('user.services') }}"
                                class="underline-offset-4 hover:underline focus-visible:underline">
                                {{ __('partials/footer.Услуги') }}</a>
                            <ul role="menu" class="mt-1 ml-1 space-y-1 list-inside"
                                style="list-style-image: url('{{ asset('images/partials/footer/ellipse.svg') }}')">
                                <li>
                                    <a href="/services/#design"
                                        class="text-sm underline-offset-4 hover:underline focus-visible:underline"
                                        role="menuitem">
                                        {{ __('partials/footer.Проектирование') }}</a>
                                </li>
                                <li>
                                    <a href="/services/#saunas"
                                        class="text-sm underline-offset-4 hover:underline focus-visible:underline"
                                        role="menuitem">
                                        {{ __('partials/footer.Дома и бани под ключ') }}</a>
                                </li>
                                <li>
                                    <a href="/services/#huts"
                                        class="text-sm underline-offset-4 hover:underline focus-visible:underline"
                                        role="menuitem">
                                        {{ __('partials/footer.Изготовление срубов') }}</a>
                                </li>
                                <li>
                                    <a href="/services/#foundations"
                                        class="text-sm underline-offset-4 hover:underline focus-visible:underline"
                                        role="menuitem">
                                        {{ __('partials/footer.Строительство фундаментов') }}</a>
                                </li>
                                <li>
                                    <a href="/services/#roofs"
                                        class="text-sm underline-offset-4 hover:underline focus-visible:underline"
                                        role="menuitem">
                                        {{ __('partials/footer.Возведение крыш') }}</a>
                                </li>
                                <li>
                                    <a href="/services/#benches"
                                        class="text-sm underline-offset-4 hover:underline focus-visible:underline"
                                        role="menuitem">
                                        {{ __('partials/footer.Беседки, столы и скамейки') }}</a>
                                </li>
                            </ul>
                        </li>
                    </div>
                    <div>
                        <li>
                            <a href="{{ route('user.gallery') }}"
                                class="underline-offset-4 hover:underline focus-visible:underline">
                                {{ __('partials/footer.Галерея') }}</a>
                            <ul role="menu" class="mt-1 ml-1 space-y-1 list-inside"
                                style="list-style-image: url('{{ asset('images/partials/footer/ellipse.svg') }}')">
                                <li>
                                    <a href="/catalog"
                                        class="text-sm underline-offset-4 hover:underline focus-visible:underline"
                                        role="menuitem">
                                        {{ __('partials/footer.Готовые проекты') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.tech') }}"
                                        class="text-sm underline-offset-4 hover:underline focus-visible:underline"
                                        role="menuitem">
                                        {{ __('partials/footer.Процесс строительства') }}</a>
                                </li>
                            </ul>
                        </li>
                    </div>
                </div>

            </ul>
        </nav>

        <div class="flex flex-col items-start gap-6 xs:order-1 xl:order-4">
            <a href="mailto:info@spbrb.ru"
                class="inline-flex items-center gap-2 font-semibold underline uppercase underline-offset-2">
                <img src="{{ asset('images/partials/footer/email.svg') }}" alt="Mail icon" aria-hidden="true">
                <span
                    class="transition-colors duration-300 hover:bg-white hover:text-dark-black focus-visible:bg-white focus-visible:text-dark-black">info@spbrb.ru</span>
            </a>
            <ul class="flex items-center gap-6" aria-label="Social media links">
                <li>
                    <a href="{{ __('components.whatsapp link') }}" aria-label="WhatsApp"
                        class="animated-svg block w-11 rounded-md bg-[#E5E3DB] transition-colors hover:bg-[#2C6849]">
                        {!! file_get_contents(public_path('images/partials/footer/whatsapp.svg')) !!}
                    </a>
                </li>
                <li>
                    <a href="https://vk.com/share.php?url=https%3A%2F%2Fspbrb.ru%2Fcorp.htm&title=%D0%A1%D1%80%D1%83%D0%B1%D1%8B%20%D0%BE%D1%82%20%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8F%20%D0%A0%D1%83%D1%81%D1%8C%20%D0%91%D1%80%D0%B5%D0%B2%D0%B5%D0%BD%D1%87%D0%B0%D1%8F&utm_source=share2"
                        aria-label="VK"
                        class="animated-svg block w-11 rounded-md bg-[#E5E3DB] p-1.5 transition-colors hover:bg-[#2C6849]">
                        {!! file_get_contents(public_path('images/partials/footer/vk.svg')) !!}
                    </a>
                </li>
                <li>
                    <a href="" aria-label="Telegram"
                        class="animated-svg block w-11 rounded-md bg-[#E5E3DB] p-1.5 transition-colors hover:bg-[#2C6849]">
                        {!! file_get_contents(public_path('images/partials/footer/telegram.svg')) !!}
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex flex-col border-gray-200 xs:flex-row xs:border-b md:min-h-[10rem]">
        <div class="hidden space-y-4 lg:block lg:basis-2/3">
            <p class="block">{{ __('partials/footer.ООО “Русь Бревенчатая”') }}</p>
            <p class="block uppercase">{{ __('partials/footer.ИНН 7806399979') }}</p>
            <a href=""
                class="block underline uppercase underline-offset-2">{{ __('partials/footer.Политика конфиденциальности') }}</a>
        </div>
        <div class="pb-6 border-b border-gray-200 xs:basis-full xs:border-b-0 xs:pr-4 md:flex md:items-center md:gap-5">
            <div class="mb-4 text-sm">
                {{ __('partials/footer.Санкт-Петербург') }} <br>
                {{ __('partials/footer.Без выходных с 09:00 до 18:00') }}
            </div>
            <div>
                <a href="tel:+78123053489" class="block mb-2 text-2xl font-bold"><span class="font-light">(812)</span>
                    305-34-89</a>
                <a href="tel:+79123508524" class="block text-2xl font-bold"><span class="font-light">+7 (912)</span>
                    350-85-24</a>
            </div>
        </div>
        <div
            class="pb-6 mt-6 border-b border-gray-200 xs:mb-6 xs:mt-0 xs:basis-full xs:border-b-0 xs:border-l xs:pb-0 xs:pl-4 md:flex md:items-center md:gap-5">
            <div class="mb-4 text-sm">
                {{ __('partials/footer.Москва') }} <br> {{ __('partials/footer.ПН.-ПТ. с 09:00 до 18:00') }}
            </div>
            <div>
                <a href="tel:+74997056113" class="block mb-2 text-2xl font-bold"><span
                        class="font-light">(499)</span> 705-61-13</a>
                <a href="tel:+79165141593" class="block text-2xl font-bold"><span class="font-light">+7 (916)</span>
                    514-15-93</a>
            </div>
        </div>
    </div>

    <div class="flex flex-col gap-8 xs:flex-row">
        <div class="space-y-4 lg:hidden">
            <p class="block">{{ __('partials/footer.ООО “Русь Бревенчатая”') }}</p>
            <p class="block uppercase">{{ __('partials/footer.ИНН 7806399979') }}</p>
            <a href=""
                class="block underline uppercase underline-offset-2">{{ __('partials/footer.Политика конфиденциальности') }}</a>
        </div>

        <div class="xs:basis-1/2 md:basis-2/3 lg:basis-full">
            {{ __('partials/footer.Авторские права') }}
        </div>
    </div>

    <a href="https://bespokewebsites.pro/" target="_blank"
        class="block text-center underline-offset-4 hover:underline focus-visible:underline">
        {{ __('partials/footer.Разработчик сайта') }}
    </a>

</footer>
