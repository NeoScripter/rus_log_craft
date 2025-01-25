<x-user-layout>

    <section class="section-primary">

        <div class="flex flex-col gap-10 sm:flex-row">
            <h1 class="block text-3xl titles text-balance sm:flex-1 md:text-[4rem]">
                Проектирование и строительство домов и бань из бревна</h1>

            <div class="ml-auto w-72 sm:w-auto sm:basis-1/2 md:basis-1/3 lg:basis-1/4">
                <img class="w-full rounded-lg" src="{{ asset('images/home/hero-top.webp') }}" alt="Top of a wooden arc">
                <p class="text-sm text-dim-gray md:text-base">Уют и экологичность в домах из натурального бревна. <br>
                    Ручная работа и индивидуальный подход в каждом проекте.</p>
            </div>

        </div>

        <div x-data class="flex flex-col gap-4 my-6 sm:flex-row md:gap-10">
            <button class="flex-1 btn-primary">наш каталог проектов</button>
            <button @click="$dispatch('open-form')" class="flex-1 btn-secondary">заказать звонок</button>
        </div>

        <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-4 md:gap-6 lg:gap-8">

            @php
                $links = ['#', '#', '#', '#'];
                $names = ['Дома из бревна', 'Дома с баней', 'Бани из бревна', 'Хозпостройки'];
            @endphp

            @foreach ($names as $idx => $name)
                <a href="{{ $links[$idx] }}" class="flex flex-col gap-4 px-4 py-6 bg-light-gray">
                    <img class="flex-1 object-center" src="{{ asset('images/home/hero-' . $idx + 1 . '.webp') }}"
                        alt="{{ $name }}">
                    <div class="text-xl font-bold text-center text-dark-black md:text-2xl">{{ $name }}</div>
                </a>
            @endforeach
        </div>

    </section>

    @include('user.partials.home-carousel')

    @include('user.partials.house-grid', ['title' => 'новые проекты'])

    <section class="section-primary">

        <div class="md:flex sm:py-16 md:gap-10">

            <div class="relative mb-8 md:mb-0 md:basis-2/3 lg:basis-1/2">
                <h2 class="absolute inset-0 text-2xl uppercase titles md:text-4xl sm:w-3/4 md:w-full md:max-w-154">Если
                    вы точно знаете, как должен выглядеть ваш будущий дом, мы знаем, как его построить.</h2>

                <div class="ml-auto w-68 h-60 md:h-104 md:w-114">
                    <img class="object-contain object-center w-full h-full"
                        src="{{ asset('images/home/house-icon.webp') }}" alt="">
                </div>
            </div>

            <div class="md:basis-1/3 lg:basis-1/2">
                <p class="mb-4">Мы разрабатываем уникальные проекты из бревна, учитывая все ваши требования и
                    пожелания.</p>

                <p>Наши квалифицированные архитекторы и дизайнеры сопровождают вас на каждом этапе, чтобы ваш дом был
                    оригинальным, удобным и отражал вашу индивидуальность. Мы применяем современные технологии и
                    качественные материалы, чтобы обеспечить долговечность и эстетическую привлекательность вашего
                    жилья.</p>

                <div class="my-6 text-xl font-bold text-dark-black">Разработка проекта БЕСПЛАТНО при заказе сруба</div>

                <button class="block w-full text-center btn-secondary">РАССЧИТАТЬ ПРОЕКТ</button>
            </div>

        </div>


    </section>

    <section class="section-primary">

        <h2 class="w-4/5 mb-6 text-2xl uppercase sm:w-full titles md:text-4xl md:w-5/6 lg:w-3/4">Более 20 лет мы
            занимаемся <span class="golden-title">проектированием</span> и <span
                class="golden-title">строительством</span> элитных домов и бань ручной рубки</h2>

        <div class="md:flex md:gap-10 md:justify-between">

            <div class="w-4/5 mb-16 md:mb-0 sm:w-1/2 md:basis-1/2 md:max-w-120 md:flex md:flex-col md:justify-between">
                <img class="mb-6" src="{{ asset('images/home/intro-1.webp') }}" alt="">
                <p class="block font-medium">Производим дома на нашей площадке в Ленинградской области, затем собираем
                    на участке Заказчика.</p>
            </div>

            <div class="-mx-4 sm:mx-0 md:max-w-180">

                @include('user.partials.gallery-carousel')

            </div>

        </div>


    </section>

    @include('user.partials.service-links')

    @include('user.partials.home-quality')

    <livewire:pageform />

    @include('user.partials.home-accordion')

    <section class="lg:px-32 xl:px-40">

        <div x-data
            class="relative flex flex-col pt-8 sm:py-8 md:py-14 bg-[#F6F5EF] gap-6 sm:flex-row sm:flex-wrap sm:items-start sm:justify-between sm:ml-auto md:flex-nowrap md:gap-10 lg:justify-end px-4">

            <div class="text-2xl titles sm:basis-full md:basis-[50%] md:text-4xl lg:hidden">Дом под ключ </div>

            <p class="z-10 sm:basis-full md:hidden">Свяжитесь с нами сегодня, и мы начнем создавать ваш идеальный дом!
            </p>

            <p class="z-10 sm:basis-full md:hidden">Закажите строительство под ключ и наслаждайтесь уютом и красотой
                натурального дерева.</p>

            <button @click="$dispatch('open-form')" class="btn-secondary z-10 sm:basis-[50%] md:basis-[60%] md:hidden">Заказать
                звонок</button>

            <div
                class="hidden md:flex md:flex-col md:gap-6 lg:gap-4 basis-[40%] ml-auto lg:basis-[30%] xl:basis-[28rem] z-10">
                <div class="hidden text-4xl titles lg:block">Дом под ключ </div>

                <p class="">Свяжитесь с нами сегодня, и мы начнем создавать ваш идеальный дом!</p>

                <p class="">Закажите строительство под ключ и наслаждайтесь уютом и красотой натурального дерева.
                </p>

                <button @click="$dispatch('open-form')" class="z-10 w-full btn-secondary lg:mt-2">Заказать звонок</button>
            </div>

            <ul
                class="grid gap-6 sm:basis-[max-content] sm:mr-8 md:mr-0 sm:ml-4 md:basis-[50%] lg:basis-[30%] xl:basis-[24rem]">
                @php
                    $turnkey_items = [
                        'Проектирование объекта',
                        'Согласование с заказчиком',
                        'Подписание договора',
                        'Доставка стройматериалов',
                        'Строительство под ключ',
                        'прием объекта заказчиком',
                    ];
                @endphp

                @for ($i = 0; $i < count($turnkey_items); $i++)
                    <li class="inline-flex items-center gap-2">
                        <img src="{{ asset('images/svgs/turnkey/turnkey-' . $i + 1 . '.svg') }}" alt=""
                            class="w-8 h-8">
                        <div class="font-semibold uppercase">{{ $turnkey_items[$i] }}</div>
                    </li>
                @endfor
            </ul>

            <div
                class="sm:absolute sm:bottom-1 lg:bottom-[-4%] sm:left-0 sm:w-104 sm:h-68 lg:h-84 lg:w-120 xl:w-164 xl:bottom-0 xl:h-auto">
                <img src="{{ asset('images/home/home-turnkey.webp') }}" alt="">
            </div>

        </div>

    </section>

    @include('user.partials.home-bottom-carousel')

    <section class="section-primary">

        <div class="rounded-lg overflow-clip bg-[#E5E3DB] md:flex">

            <div class="w-full h-72 sm:h-100 md:w-1/2 md:h-110 lg:w-2/5 lg:h-90">
                <img class="object-cover object-bottom w-full h-full"
                    src="{{ asset('images/home/calculator.webp') }}" alt="">
            </div>

            <div class="px-4 py-6 md:py-8 md:px-10 md:w-1/2 lg:py-10 lg:w-3/5 xl:px-16">
                <h2 class="mb-4 text-2xl titles md:text-4xl">Рассчитайте стоимость сруба для вашего дома</h2>

                <p class="mb-6">Хотите узнать, сколько будет стоить строительство вашего дома из бревна? Мы
                    предлагаем удобный и быстрый способ расчета стоимости сруба, чтобы вы могли спланировать свой бюджет
                    и сделать первый шаг к реализации вашей мечты.</p>

                <a href="" class="block w-full text-center btn-secondary">ПЕРЕЙТИ В
                    КАЛЬКУЛЯТОР</a>
            </div>
        </div>

    </section>

    @include('user.partials.call-form')

    @include('user.partials.articles')

    <livewire:videos lazy="on-load" />

</x-user-layout>
