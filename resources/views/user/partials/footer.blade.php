<footer class="text-[#FAFAFA] bg-[#2F3535] py-10 px-4 space-y-8 xs:space-y-6  lg:px-32">

    <div class="flex flex-col flex-wrap gap-8 pb-8 border-b border-gray-300 xs:gap-6 xs:flex-row xs:justify-between">
        <div class="w-80">
            <img src="{{ asset('images/partials/footer/logo-footer.webp')}}" alt="" class="w-full">
        </div>

        <nav class="xs:order-2 xs:basis-full xl:basis-2/3">
            <ul class="flex flex-col justify-between text-xl xs:flex-row gap-11">
                <div class="space-y-11 basis-full md:flex md:space-y-0 md:items-start md:gap-11 md:justify-around">
                    <div class="space-y-4">
                        <li>
                            <a href="">Главная</a>
                        </li>
                        <li>
                            <a href="">О компании</a>
                        </li>
                        <li>
                            <a href="">Контакты</a>
                        </li>
                    </div>
                    <div>
                        <li>
                            <a href="">Проекты домов</a>
                            <ul role="menu" class="mt-1 ml-1 space-y-1 list-inside" style="list-style-image: url('{{ asset('images/partials/footer/ellipse.svg') }}')">
                                <li>
                                    <a href="" class="text-sm hover:underline focus-visible:underline underline-offset-4" role="menuitem">Дома из бревна</a>
                                </li>
                                <li>
                                    <a href="" class="text-sm hover:underline focus-visible:underline underline-offset-4" role="menuitem">Бани из бревна</a>
                                </li>
                                <li>
                                    <a href="" class="text-sm hover:underline focus-visible:underline underline-offset-4" role="menuitem">Гаражи из бревна</a>
                                </li>
                                <li>
                                    <a href="" class="text-sm hover:underline focus-visible:underline underline-offset-4" role="menuitem">Хозпостройки</a>
                                </li>
                            </ul>
                        </li>
                    </div>
                </div>
                <div class="space-y-11 basis-full md:flex md:space-y-0 md:items-start md:gap-11 md:justify-around">
                    <div>
                        <li>
                            <a href="">Услуги</a>
                            <ul role="menu" class="mt-1 ml-1 space-y-1 list-inside" style="list-style-image: url('{{ asset('images/partials/footer/ellipse.svg') }}')">
                                <li>
                                    <a href="" class="text-sm hover:underline focus-visible:underline underline-offset-4" role="menuitem">Проектирование</a>
                                </li>
                                <li>
                                    <a href="" class="text-sm hover:underline focus-visible:underline underline-offset-4" role="menuitem">Дома и бани "под ключ"</a>
                                </li>
                                <li>
                                    <a href="" class="text-sm hover:underline focus-visible:underline underline-offset-4" role="menuitem">Изготовление срубов</a>
                                </li>
                                <li>
                                    <a href="" class="text-sm hover:underline focus-visible:underline underline-offset-4" role="menuitem">Строительство фундаментов</a>
                                </li>
                                <li>
                                    <a href="" class="text-sm hover:underline focus-visible:underline underline-offset-4" role="menuitem">Возведение крыш</a>
                                </li>
                                <li>
                                    <a href="" class="text-sm hover:underline focus-visible:underline underline-offset-4" role="menuitem">Беседки, столы и скамейки</a>
                                </li>
                            </ul>
                        </li>
                    </div>
                    <div>
                        <li>
                            <a href="">Галерея</a>
                            <ul role="menu" class="mt-1 ml-1 space-y-1 list-inside" style="list-style-image: url('{{ asset('images/partials/footer/ellipse.svg') }}')">
                                <li>
                                    <a href="" class="text-sm hover:underline focus-visible:underline underline-offset-4" role="menuitem">Готовые проекты</a>
                                </li>
                                <li>
                                    <a href="" class="text-sm hover:underline focus-visible:underline underline-offset-4" role="menuitem">Процесс строительства</a>
                                </li>
                            </ul>
                        </li>
                    </div>
                </div>
            </ul>
        </nav>

        <div class="flex flex-col items-start gap-6 xs:order-1 xl:order-4">
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

    <div class="flex flex-col border-gray-200 xs:flex-row xs:border-b md:min-h-[10rem]">
        <div class="hidden space-y-4 lg:block lg:basis-2/3">
            <p class="block">ООО “Русь Бревенчатая”</p>
            <p class="block uppercase">ИНН 7806399979</p>
            <a href="" class="block underline uppercase underline-offset-2">Политика конфиденциальности</a>
        </div>
        <div class="pb-6 border-b border-gray-200 xs:pr-4 xs:border-b-0 xs:basis-full md:flex md:items-center md:gap-5">
            <div class="mb-4 text-sm">
                Санкт-Петербург <br> Без выходных с 09:00 до 18:00
            </div>
            <div>
                <a href="tel:+78123053489" class="block mb-2 text-2xl font-bold"><span class="font-light">(812)</span> 305-34-89</a>
                <a href="tel:+79123508524" class="block text-2xl font-bold"><span class="font-light">+7 (912)</span> 350-85-24</a>
            </div>
        </div>
        <div class="pb-6 mt-6 border-b border-gray-200 xs:pb-0 xs:mb-6 xs:pl-4 xs:border-l xs:border-b-0 xs:mt-0 xs:basis-full md:flex md:items-center md:gap-5">
            <div class="mb-4 text-sm">
                Москва <br> ПН.-ПТ. с 09:00 до 18:00
            </div>
            <div>
                <a href="tel:+74997056113" class="block mb-2 text-2xl font-bold"><span class="font-light">(499)</span> 705-61-13</a>
                <a href="tel:+79165141593" class="block text-2xl font-bold"><span class="font-light">+7 (916)</span> 514-15-93</a>
            </div>
        </div>
    </div>

    <div class="flex flex-col gap-8 xs:flex-row">
        <div class="space-y-4 lg:hidden">
            <p class="block">ООО “Русь Бревенчатая”</p>
            <p class="block uppercase">ИНН 7806399979</p>
            <a href="" class="block underline uppercase underline-offset-2">Политика конфиденциальности</a>
        </div>

        <div class="xs:basis-1/2 md:basis-2/3 lg:basis-full">
            © 2024 spbrb.ru — Проектирование и строительство деревянных домов и срубов бань. Вся информация размещенная на сайте является охраняемой в соответствии с Российским и международным законодательством о правах на результаты интеллектуальной деятельности, включаяя авторское право. Информация размещенная на сайте носит информационный характер и ни при каких условиях не является публичной офертой определяемой положениями Статьи 437 (2) Гражданского кодекса РФ.
        </div>
    </div>

    <a href="https://github.com/NeoScripter" target="_blank" class="block text-center hover:underline focus-visible:underline underline-offset-4">Разработчик сайта</a>

</footer>
