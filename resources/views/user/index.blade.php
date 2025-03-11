<x-user-layout>

    <section class="section-primary">

        <div class="flex flex-col gap-10 sm:flex-row">
            <h1 class="titles block text-balance text-3xl sm:flex-1 md:text-[4rem]">
                {{ __('pages/index.Проектирование и строительство') }}</h1>

            <div class="ml-auto w-72 sm:w-auto sm:basis-1/2 md:basis-1/3 lg:basis-1/4">
                <img class="w-full rounded-lg" src="{{ asset('images/home/hero-top.webp') }}" alt="Top of a wooden arc">
                <p class="text-sm text-dim-gray md:text-base">{{ __('pages/index.Уют и экологичность') }} <br>
                    {{ __('pages/index.Ручная работа и индивидуальный подход в каждом проекте.') }}</p>
            </div>

        </div>

        <div x-data class="flex flex-col gap-4 my-6 sm:flex-row md:gap-10">
            <button class="flex-1 btn-primary">{{ __('pages/index.наш каталог проектов') }}</button>
            <button @click="$dispatch('open-form')"
                class="flex-1 btn-secondary">{{ __('pages/index.заказать звонок') }}</button>
        </div>

        <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-4 md:gap-6 lg:gap-8">

            @php
                $links = ['house', 'house_bath', 'bath', 'utility'];
                $names = [
                    __('pages/index.Дома из бревна'),
                    __('pages/index.Дома с баней'),
                    __('pages/index.Бани из бревна'),
                    __('pages/index.Хозпостройки'),
                ];
            @endphp

            @foreach ($names as $idx => $name)
                <a href="{{ '/catalog?type=' . $links[$idx] }}" class="flex flex-col gap-4 px-4 py-6 bg-light-gray">
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

        <div class="sm:py-16 md:flex md:gap-10">

            <div class="relative mb-8 md:mb-0 md:basis-2/3 lg:basis-1/2">
                <h2 class="absolute inset-0 text-2xl uppercase titles sm:w-3/4 md:w-full md:max-w-154 md:text-4xl">
                    {{ __('pages/index.Если вы точно знаете') }}
                </h2>

                <div class="ml-auto h-60 w-68 md:h-104 md:w-114">
                    <img class="object-contain object-center w-full h-full"
                        src="{{ asset('images/home/house-icon.webp') }}" alt="">
                </div>
            </div>

            <div x-data class="md:basis-1/3 lg:basis-1/2">
                <p class="mb-4">{{ __('pages/index.Мы разрабатываем уникальные проекты') }}</p>

                <p>{{ __('pages/index.Наша команда сопровождает вас') }}</p>

                <div class="my-6 text-xl font-bold text-dark-black">
                    {{ __('pages/index.Разработка проекта бесплатно') }}</div>

                <button @click="$dispatch('open-form')"
                    class="block w-full text-center btn-secondary">{{ __('pages/index.Рассчитать проект') }}</button>
            </div>

        </div>


    </section>

    <section class="section-primary">

        <h2 class="w-4/5 mb-6 text-2xl uppercase titles sm:w-full md:w-5/6 md:text-4xl lg:w-3/4">
            {{ __('pages/index.Более 20 лет мы занимаемся') }}<span
                class="golden-title">{{ __('pages/index.проектированием') }}</span> {{ __('pages/index.и') }}<span
                class="golden-title">{{ __('pages/index.строительством') }}</span>
            {{ __('pages/index.элитных домов и бань ручной рубки') }}</h2>

        <div class="md:flex md:justify-between md:gap-10">

            <div class="w-4/5 mb-16 sm:w-1/2 md:mb-0 md:flex md:max-w-120 md:basis-1/2 md:flex-col md:justify-between">
                <img class="mb-6" src="{{ asset('images/home/intro-1.webp') }}" alt="">
                <p class="block font-medium">{{ __('pages/index.Производим дома на нашей площадке') }}</p>
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
            class="relative flex flex-col gap-6 bg-[#F6F5EF] px-4 pt-8 sm:ml-auto sm:flex-row sm:flex-wrap sm:items-start sm:justify-between sm:py-8 md:flex-nowrap md:gap-10 md:py-14 lg:justify-end">

            <div class="titles text-2xl sm:basis-full md:basis-[50%] md:text-4xl lg:hidden">
                {{ __('pages/index.Дом под ключ') }}
            </div>

            <p class="z-10 sm:basis-full md:hidden">{{ __('pages/index.Свяжитесь с нами сегодня') }}</p>

            <p class="z-10 sm:basis-full md:hidden">{{ __('pages/index.Закажите строительство под ключ') }}</p>

            <button @click="$dispatch('open-form')" class="btn-secondary z-10 sm:basis-[50%] md:hidden md:basis-[60%]">
                {{ __('pages/index.Заказать звонок') }}
            </button>

            <div
                class="z-10 ml-auto hidden basis-[40%] md:flex md:flex-col md:gap-6 lg:basis-[30%] lg:gap-4 xl:basis-[28rem]">
                <div class="hidden text-4xl titles lg:block">
                    {{ __('pages/index.Дом под ключ') }}
                </div>

                <p>{{ __('pages/index.Свяжитесь с нами сегодня') }}</p>

                <p>{{ __('pages/index.Закажите строительство под ключ') }}</p>

                <button @click="$dispatch('open-form')" class="z-10 w-full btn-secondary lg:mt-2">
                    {{ __('pages/index.Заказать звонок') }}
                </button>
            </div>

            <ul
                class="grid gap-6 sm:ml-4 sm:mr-8 sm:basis-[max-content] md:mr-0 md:basis-[50%] lg:basis-[30%] xl:basis-[24rem]">
                @php
                    $turnkey_items = [
                        __('pages/index.Проектирование объекта'),
                        __('pages/index.Согласование с заказчиком'),
                        __('pages/index.Подписание договора'),
                        __('pages/index.Доставка стройматериалов'),
                        __('pages/index.Строительство под ключ'),
                        __('pages/index.Прием объекта заказчиком'),
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
                class="sm:absolute sm:bottom-1 sm:left-0 sm:h-68 sm:w-104 lg:bottom-[-4%] lg:h-84 lg:w-120 xl:bottom-0 xl:h-auto xl:w-164">
                <img src="{{ asset('images/home/home-turnkey.webp') }}" alt="">
            </div>

        </div>

    </section>

    @include('user.partials.home-bottom-carousel')

    @include('user.partials.calculate-price')

    @include('user.partials.call-form')

    @include('user.partials.articles')

    <livewire:videos lazy="on-load" />

</x-user-layout>
