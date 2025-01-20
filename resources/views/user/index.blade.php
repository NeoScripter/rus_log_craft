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

    <section class="relative pb-6 section-primary sm:pb-10">

        <div class="absolute inset-0 bg-left-top bg-no-repeat bg-cover -top-10 bg-light-gray -z-10"
            style="background-image: url({{ asset('images/svgs/green-circle.svg') }})"></div>

        <h2 class="text-xl uppercase titles md:text-3xl">новые проекты</h2>

        @isset($projects)
            <div class="grid my-6 sm:my-10 gap-y-6 gap-x-4 sm:grid-cols-2 md:gap-x-6 lg:gap-x-10 md:grid-cols-3">
                @foreach ($projects as $project)
                    <div class="flex flex-col bg-white rounded-lg overflow-clip">
                        <div class="relative h-72 group overflow-clip">

                            <span class="absolute inset-0 z-10 transition-colors duration-500 group-hover:bg-black/50"></span>

                            <span
                                class="absolute top-0 right-0 block px-6 py-3 text-xl font-bold bg-white rounded-md text-green-primary">
                                {{ $project->volume }} м²
                            </span>

                            <img class="object-cover object-center w-full h-full transition-transform duration-500 group-hover:scale-110" src="{{ Storage::url($project->image) }}"
                                alt="{{ $project->name }}">
                        </div>

                        <div class="flex flex-col flex-1 gap-3 p-4">
                            <div class="text-xl titles">{{ $project->name }}</div>
                            <span class="block mt-auto text-dim-gray">{{ $project->article }}</span>

                            <div class="flex items-center justify-between gap-1">

                                <div class="flex items-center flex-1 gap-2">
                                    <img class="w-6 aspect-square" src="{{ asset('images/svgs/volume.svg') }}"
                                        alt="Volume svg">
                                    {{ $project->volume }} м²
                                </div>

                                <div class="flex items-center flex-1 gap-2">
                                    <img class="w-6 aspect-square" src="{{ asset('images/svgs/floors.svg') }}"
                                        alt="Volume svg">
                                    {{ $project->floors . $project->floors > 1 ? 'этажа' : 'этаж' }}
                                </div>

                                <div class="flex items-center flex-1 gap-2">
                                    <img class="w-6 aspect-square" src="{{ asset('images/svgs/rooms.svg') }}"
                                        alt="Volume svg">
                                    {{ $project->rooms }}
                                </div>


                            </div>

                            <a href="{{ $project->link }}" class="block mt-1 text-center btn-secondary">Подробнее</a>
                        </div>


                    </div>
                @endforeach
            </div>

        @endisset

        <a href="{{ route('user.services') }}" class="block w-full text-center btn-primary"> Смотреть все проекты</a>

    </section>

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

    <section class="py-10 lg:py-16 section-primary"
        style="background: linear-gradient(180deg, rgba(229, 227, 219, 0.20) 0%, #E5E3DB 100%);">

        <div class="sm:flex sm:gap-6 md:gap-10">

            <div class="sm:flex sm:flex-col sm:justify-between sm:w-90 lg:w-125">
                <h2 class="text-4xl titles sm:text-2xl md:text-4xl">мы <br> предлагаем</h2>
                <p class="my-6 text-xl font-semibold">стройте с легкостью</p>
                <a href="{{ route('user.services') }}" class="hidden text-center btn-primary sm:block md:max-w-[25rem]">смотреть все услуги</a>
            </div>

            <ul class="space-y-4 md:flex-1">

                @php
                    $titles = [
                        'Проектирование',
                        'Дома и бани "под ключ',
                        'Изготовление срубов',
                        'Строительство фундаментов',
                        'Возведение крыш',
                        'Беседки, столы и скамейки',
                    ];

                    $paths = [
                        '/services/#design',
                        '/services/#saunas',
                        '/services/#huts',
                        '/services/#foundations',
                        '/services/#roofs',
                        '/services/#benches',
                    ];
                @endphp

                @for ($i = 0; $i < count($titles); $i++)
                    <li
                        class="block">

                        <a href="{{ $paths[$i] }}" class="block rounded-xl bg-[#F6F5EF] md:flex md:gap-8 transition-colors hover:bg-[#FAFAFA] group duration-300">
                            <div class="aspect-[3/1] md:aspect-auto md:flex-1 h-auto relative ">
                                <img class="absolute inset-0 object-cover object-center w-full h-full rounded-xl"
                                    src="{{ asset('images/home/home-services-' . $i + 1 . '.webp') }}" alt="">
                            </div>
                            <div class="p-4 md:flex-1">
                                <p class="mb-2 text-xl font-bold">{{ $titles[$i] }}</p>
                                <p class="mb-3 text-dim-gray">Архитекторы компании воплотят ваши идеи в качественных
                                    проектах бревенчатых коттеджей и бань</p>
                                <div
                                    class="grid content-center w-8 h-8 p-2 ml-auto transition-colors duration-300 rounded-md bg-green-primary group-hover:bg-golden-primary">
                                    <img class="w-5 h-5" src="{{ asset('images/svgs/arrow-down-right.svg') }}"
                                        alt="">
                                </div>
                            </div>
                        </a>

                    </li>
                @endfor
            </ul>

            <a href="{{ route('user.services') }}" class="block w-full mt-6 text-center btn-primary sm:hidden">смотреть все услуги</a>

        </div>

    </section>

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
