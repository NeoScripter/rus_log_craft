<x-user-layout :bottom-padding="false">

    <x-user.breadcrumbs page_name="{{ __('pages/tech.Технологии') }}" />

    <section class="section-primary text-balance">

        <h1 class="text-4xl titles md:text-6xl">
            {{ __('pages/tech.Технология рубки домов и бань') }}
        </h1>

        <p class="my-6">
            {{ __('pages/tech.Деревянное домостроение сложный процесс') }}
        </p>

        <p class="text-xl font-bold md:text-2xl">
            {{ __('pages/tech.Мастера отличаемся технологиями') }}
        </p>
    </section>

    <section class="section-primary">

        <div class="p-4 space-y-4 border border-gray-200 rounded-lg sm:space-y-6 md:space-y-8 md:p-6 lg:flex-nowrap">

            <h2 class="text-2xl titles md:text-4xl">
                {{ __('pages/tech.Завешивание наружных углов') }}
            </h2>

            <p class="md:text-2xl">
                {{ __('pages/tech.Предотвращение щелей в срубе') }}
            </p>

            <div class="flex flex-col gap-3 sm:flex-row sm:flex-wrap sm:gap-4 lg:gap-8">

                <div class="max-w-75 md:max-w-90 lg:flex-1">
                    <img class="object-contain object-center w-full h-full"
                        src="{{ asset('images/tech/top/manual-1.webp') }}" alt="">
                </div>

                <div class="max-w-75 md:max-w-90 lg:flex-1">
                    <img class="object-contain object-center w-full h-full"
                        src="{{ asset('images/tech/top/manual-2.webp') }}" alt="">
                </div>

                <div class="sm:mt-3 lg:mt-0 lg:flex-1">
                    <p class="mb-2 md:mb-6">
                        {{ __('pages/tech.Силы действующие на бревно') }}
                    </p>
                    <p>
                        {{ __('pages/tech.Мягкая посадка верхнего бревна') }}
                    </p>

                    <a href="https://spbrb.ru/tech_zavesh_uglov.htm" target="_blank"
                        class="block mt-6 text-center btn-secondary md:mt-10 md:max-w-90">
                        {{ __('pages/tech.Подробнее о технологии') }}
                    </a>
                </div>
            </div>

            <div class="flex flex-col gap-4 xs:flex-row xs:flex-wrap xl:gap-10">
                <div
                    class="my-6 md:order-1 lg:order-none lg:mt-0 lg:basis-[45%] xl:flex xl:flex-col xl:justify-between xl:gap-6">
                    <div class="p-6 bg-light-gray">
                        <p class="mb-4 text-xl font-bold">
                            {{ __('pages/tech.Совет от генерального директора') }}
                        </p>

                        <p>
                            {{ __('pages/tech.Продольный паз и поднутрение') }}
                        </p>
                    </div>

                    <div class="hidden xl:block">
                        {{ __('pages/tech.Продуманный шаг защитит стены') }}
                    </div>
                </div>

                <div class="xs:order-2 sm:flex sm:basis-[35%] sm:items-end md:basis-full xl:hidden">
                    {{ __('pages/tech.Продуманный шаг защитит стены') }}</div>

                <div
                    class="flex max-w-36 sm:max-w-full sm:basis-[20%] md:ml-auto lg:ml-0 lg:mt-[3.8%] lg:items-start xl:basis-[18%] xl:items-end">
                    <img class="object-contain mt-auto lg:mt-0" src="{{ asset('images/tech/top/demo-1.webp') }}"
                        alt="">
                </div>

                <div class="max-w-72 sm:max-w-full sm:basis-[40%] lg:basis-[30%] xl:basis-[28%]">
                    <img class="object-cover object-left-bottom xl:h-full"
                        src="{{ asset('images/tech/top/demo-2.webp') }}" alt="">
                </div>
            </div>

        </div>

    </section>

    <section class="section-primary">

        <div class="p-4 space-y-10 border border-gray-200 rounded-lg md:space-y-8 md:p-6 lg:space-y-12">

            <div class="space-y-4 sm:space-y-6 md:space-y-8">
                <h2 class="text-2xl titles md:text-4xl">
                    {{ __('pages/tech.Торцевое соединение бревен') }}
                </h2>

                <p class="md:text-2xl">
                    {{ __('pages/tech.Описание стяжки') }}
                </p>
            </div>

            <div class="space-y-6 md:space-y-8 lg:space-y-12">

                <div class="flex flex-col gap-10 md:flex-row">
                    <div class="flex flex-col gap-8 sm:flex-row sm:gap-4 md:flex-1 md:flex-col md:gap-10">
                        <div class="sm:flex-1 md:flex-auto">
                            <p class="mb-4 text-xl font-bold md:mb-6">
                                {{ __('pages/tech.Плюсы использования стяжек') }}</p>
                            <ul class="ml-3 space-y-4 md:space-y-6"
                                style="list-style-image: url('{{ asset('images/tech/green-dot.png') }}')">
                                <li class="pl-1">{{ __('pages/tech.Металлические шайбы и гайки') }}</li>
                                <li class="pl-1">{{ __('pages/tech.Плотное соединение бревен') }}</li>
                                <li class="pl-1">{{ __('pages/tech.Большая площадь соприкосновения') }}</li>
                                <li class="pl-1">{{ __('pages/tech.Металл не подвержен коррозии') }}</li>
                            </ul>
                        </div>
                        <div class="sm:flex-1 md:w-3/4 md:flex-auto lg:max-w-80">
                            <x-user.tech-carousel :total_slides="4" image_path="images/tech/slides/tech-slide-" />
                        </div>
                    </div>

                    <div class="flex flex-col gap-10 sm:flex-row md:flex-1 lg:max-w-140">
                        <div>
                            <img src="{{ asset('images/tech/second/manual-3.webp') }}" alt="Tech image">
                        </div>

                        <div class="md:hidden">
                            <img src="{{ asset('images/tech/second/demo-3.webp') }}" alt="Tech image">
                        </div>
                    </div>
                </div>

                <div class="md:flex md:gap-10">
                    <div class="hidden md:block md:flex-1 lg:max-w-140">
                        <img src="{{ asset('images/tech/second/demo-3.webp') }}" alt="Tech image">
                    </div>

                    <div class="space-y-4 md:flex-1 md:space-y-6">
                        <p class="titles">
                            {{ __('pages/tech.Сложность методики') }}
                        </p>

                        <p>
                            {{ __('pages/tech.Процесс закладки шпильки') }}
                        </p>

                        <p>
                            {{ __('pages/tech.Шпилька должна быть утоплена') }}
                        </p>

                        <a href="https://spbrb.ru/tech_stjagka.htm" class="block text-center btn-secondary max-w-100">
                            {{ __('pages/tech.Подробнее о технологии') }}
                        </a>
                    </div>
                </div>


            </div>
        </div>

    </section>

    <section class="section-primary">

        <div class="p-4 space-y-10 border border-gray-200 rounded-lg md:space-y-8 md:p-6">

            <div class="space-y-4 sm:space-y-6 md:space-y-8">
                <h2 class="text-2xl titles md:text-4xl">
                    {{ __('pages/tech.Рубка сруба в канадскую чашку') }}
                </h2>

                <p class="md:text-2xl">
                    {{ __('pages/tech.Канадская технология рубки') }}
                </p>
            </div>

            <div class="space-y-10 md:space-y-8">
                <div class="flex flex-col gap-10 md:flex-row md:gap-8">
                    <div class="md:flex-1">
                        <div class="md:mb-8">
                            <p class="mb-4 text-xl font-bold md:mb-6">
                                {{ __('pages/tech.Преимущества технологии') }}
                            </p>

                            <ul class="ml-3 space-y-4 md:space-y-6"
                                style="list-style-image: url('{{ asset('images/tech/green-dot.png') }}')">
                                <li class="pl-1">{{ __('pages/tech.Точность и качество') }}</li>
                                <li class="pl-1">{{ __('pages/tech.Быстрота строительства') }}</li>
                                <li class="pl-1">{{ __('pages/tech.Надежность и долговечность') }}</li>
                            </ul>
                        </div>
                        <div class="hidden space-y-6 md:block md:flex-1 xl:hidden">
                            <div class="md:max-w-60">
                                <img src="{{ asset('images/tech/third/demo-6.webp') }}" alt="">
                            </div>

                            <p class="text-2xl font-bold">
                                {{ __('pages/tech.Отличие канадской чашки') }}
                            </p>

                            <a href="https://spbrb.ru/tech_canadsk_zates.htm" target="_blank"
                                class="block text-center btn-secondary md:max-w-90">
                                {{ __('pages/tech.Подробнее о технологии') }}
                            </a>
                        </div>

                    </div>

                    <div
                        class="flex flex-col gap-4 sm:flex-row md:max-w-100 md:flex-1 md:flex-col xl:max-w-210 xl:flex-row xl:gap-10">
                        <div>
                            <img src="{{ asset('images/tech/third/demo-4.webp') }}" alt="">
                        </div>

                        <div>
                            <img src="{{ asset('images/tech/third/demo-5.webp') }}" alt="">
                        </div>
                    </div>

                    <a href="https://spbrb.ru/tech_canadsk_zates.htm" target="_blank"
                        class="hidden text-center btn-secondary sm:block md:hidden">{{ __('pages/tech.Подробнее о технологии') }}</a>

                    <div class="hidden gap-4 sm:flex md:hidden">
                        <p class="flex-1 block text-xl font-bold">
                            {{ __('pages/tech.Основное отличие канадской чашки') }}</p>
                        <div class="flex-1">
                            <img src="{{ asset('images/tech/third/demo-6.webp') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-3 md:gap-10 xl:flex-row">

                    <div class="md:order-1 xl:flex xl:flex-1 xl:flex-col xl:justify-between">
                        <div class="hidden xl:flex xl:gap-6">

                            <div class="flex flex-col justify-between flex-1">
                                <p class="text-xl font-bold">{{ __('pages/tech.Основное отличие канадской чашки') }}
                                </p>
                                <a href="https://spbrb.ru/tech_canadsk_zates.htm" target="_blank"
                                    class="block text-center btn-secondary">{{ __('pages/tech.Подробнее о технологии') }}</a>
                            </div>

                            <div class="max-w-60">
                                <img src="{{ asset('images/tech/third/demo-6.webp') }}" alt="">
                            </div>
                        </div>
                        <p>{{ __('pages/tech.Описание русской и канадской чашки') }}</p>
                    </div>

                    <div class="grid gap-3 xs:grid-cols-2 sm:grid-cols-3 md:max-w-220">

                        @for ($i = 4; $i <= 9; $i++)
                            <div @class(['hidden' => $i >= 7, 'xs:block' => $i >= 7])>
                                <img src="{{ asset('images/tech/third/manual-' . $i . '.webp') }}" alt="">
                            </div>
                        @endfor
                    </div>

                    <div class="mt-4 space-y-6 sm:hidden">
                        <p class="text-xl font-bold">{{ __('pages/tech.Основное отличие канадской чашки') }}</p>
                        <div class="max-w-60">
                            <img src="{{ asset('images/tech/third/demo-6.webp') }}" alt="">
                        </div>
                        <a href="https://spbrb.ru/tech_canadsk_zates.htm" target="_blank"
                            class="block text-center btn-secondary md:max-w-90">{{ __('pages/tech.Подробнее о технологии') }}</a>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="section-primary">

        <div class="p-4 space-y-8 border border-gray-200 rounded-lg md:p-6">

            <div class="flex flex-col gap-10 sm:flex-row">
                <div class="space-y-4 sm:flex-1 sm:space-y-6 md:space-y-8">
                    <h2 class="text-2xl titles md:text-4xl">{{ __('pages/tech.Использование шипа в чашке') }}</h2>
                    <p class="md:text-2xl">{{ __('pages/tech.Описание шипа') }}</p>
                </div>

                <div class="sm:flex-1 md:hidden">
                    <img src="{{ asset('images/tech/fouth/fourth-1.webp') }}" alt="">
                </div>
            </div>

            <div class="sm:flex sm:flex-col sm:gap-10 md:flex-row">
                <div class="hidden md:block md:max-w-142 md:flex-1">
                    <img src="{{ asset('images/tech/fouth/fourth-1.webp') }}" alt="">
                </div>

                <div class="flex flex-col gap-10 md:flex-1">
                    <div class="p-6 space-y-6 bg-light-gray">
                        <p class="mb-4 text-xl font-bold">
                            {{ __('pages/tech.Совет от генерального директора') }}
                        </p>

                        <p>
                            {{ __('pages/tech.Комплексный подход к срубам') }}
                        </p>

                        <p>
                            {{ __('pages/tech.Технические условия для строителей') }}
                        </p>

                        <p>
                            {{ __('pages/tech.Как избежать щелей между бревнами') }}
                        </p>
                    </div>

                    <a href="https://spbrb.ru/tech_canadsk_ship.htm" target="_blank"
                        class="block text-center btn-secondary md:max-w-90">{{ __('pages/tech.Подробнее о технологии') }}</a>
                </div>
            </div>

            <div class="md:flex md:items-start md:gap-10 lg:justify-between">

                <div class="flex flex-col gap-6 sm:gap-10 md:flex-1 xl:max-w-200">
                    <p>{{ __('pages/tech.Точность при изготовлении шипа') }}</p>

                    <div>
                        <img src="{{ asset('images/tech/fouth/fourth-2.webp') }}" alt="">
                    </div>
                </div>

                <div class="hidden md:block md:max-w-80 md:flex-1 xl:max-w-150">
                    <img src="{{ asset('images/tech/fouth/fourth-3.webp') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="section-primary">

        <div class="p-4 space-y-6 border border-gray-200 rounded-lg md:space-y-10 md:p-6 xl:space-y-12">

            <div class="space-y-4 sm:space-y-6 md:space-y-8">
                <h2 class="text-2xl titles md:text-4xl">
                    {{ __('pages/tech.Рубка в норвежскую чашку') }}
                </h2>

                <p class="md:text-2xl">
                    {{ __('pages/tech.О технологии лафета') }}
                </p>
            </div>

            <div class="md:flex md:gap-10">
                <div
                    class="flex flex-col gap-8 sm:flex-row sm:flex-wrap sm:justify-between md:flex-1 md:flex-col md:flex-nowrap">
                    <div class="sm:order-1 sm:basis-[46%] md:order-none md:max-w-80">
                        <img src="{{ asset('images/tech/bottom/bottom-1.webp') }}" alt="">
                    </div>

                    <a href="https://spbrb.ru/tech_lafet.htm" target="_blank"
                        class="block text-center btn-secondary sm:order-2 sm:flex-1 md:order-none md:max-w-90">{{ __('pages/tech.Подробнее о технологии') }}</a>

                    <div class="sm:basis-[46%]">
                        <p class="mb-4 text-xl font-bold md:mb-6">{{ __('pages/tech.Преимущества стен из лафета') }}
                        </p>
                        <ul class="ml-3 space-y-4 md:space-y-6"
                            style="list-style-image: url('{{ asset('images/tech/green-dot.png') }}')">
                            <li class="pl-1">{{ __('pages/tech.Лафет сочетает традиции и стиль') }}</li>
                            <li class="pl-1">{{ __('pages/tech.Лафет обеспечивает теплоизоляцию') }}</li>
                            <li class="pl-1">{{ __('pages/tech.Готовность лафета к отделке') }}</li>
                        </ul>
                    </div>
                </div>

                <div class="hidden max-w-140 md:block md:flex-1">
                    <img src="{{ asset('images/tech/bottom/bottom-2.webp') }}" alt="">
                </div>
            </div>

            <div class="flex flex-col gap-10 md:flex-row">
                <div class="md:max-w-130 md:flex-1">
                    <img src="{{ asset('images/tech/bottom/bottom-3.webp') }}" alt="">
                </div>

                <div class="sm:text-xl md:flex-1 md:text-2xl">
                    {{ __('pages/tech.Норвежская рубка устойчива к деформациям') }}
                </div>
            </div>

            <div class="flex flex-col gap-6 sm:gap-10 md:flex-row md:gap-6 lg:hidden">
                <div class="md:order-1 md:flex-1">
                    <p class="mb-6">{{ __('pages/tech.Процесс изготовления лафета') }}</p>

                    <p>{{ __('pages/tech.Угловые соединения и стиль') }}</p>
                </div>
                <div class="max-w-52 md:flex-1">
                    <img src="{{ asset('images/tech/bottom/bottom-4.webp') }}" alt="">
                </div>
            </div>

            <div class="md:flex md:gap-10 lg:items-start">
                <div class="md:flex-1">
                    <div class="hidden lg:flex lg:gap-6">
                        <div class="max-w-52 lg:hidden lg:flex-1 xl:block">
                            <img src="{{ asset('images/tech/bottom/bottom-4.webp') }}" alt="">
                        </div>

                        <div class="lg:flex-1">
                            <p class="mb-4">{{ __('pages/tech.Процесс изготовления лафета') }}</p>

                            <p>{{ __('pages/tech.Угловые соединения и стиль') }}</p>
                        </div>
                    </div>

                    <p class="mb-6 lg:mt-6">{{ __('pages/tech.Подбор древесины и традиции') }}</p>

                    <p class="md:text-2xl">{{ __('pages/tech.Выбор между кругляком и лафетом') }}</p>
                </div>

                <div class="hidden md:block md:flex-1 lg:max-w-130">
                    <img src="{{ asset('images/tech/bottom/bottom-5.webp') }}" alt="">
                </div>
            </div>
        </div>

    </section>

    <div class="text-xl font-bold section-primary sm:text-2xl">
        {{ __('pages/tech.Выбор технологии строительства') }}
    </div>

    <livewire:pageform />

    @include('user.partials.call-form')

    @include('user.partials.articles')



</x-user-layout>
