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

        <div class="flex flex-col gap-4 my-6 sm:flex-row md:gap-10">
            <button class="flex-1 btn-primary">наш каталог проектов</button>
            <button class="flex-1 btn-secondary">заказать звонок</button>
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
                        <div class="relative h-72">

                            <span
                                class="absolute top-0 right-0 block px-6 py-3 text-xl font-bold bg-white rounded-md text-green-primary">
                                {{ $project->volume }} м²
                            </span>

                            <img class="object-cover object-center w-full h-full" src="{{ Storage::url($project->image) }}"
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

        <a href="" class="block w-full text-center btn-primary"> Смотреть все проекты</a>

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
                <button class="hidden btn-primary sm:block md:max-w-[25rem]">смотреть все услуги</button>
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
                @endphp

                @for ($i = 0; $i < count($titles); $i++)
                    <li class="rounded-xl bg-[#FAFAFA] md:flex md:gap-8">

                        <div class="aspect-[3/1] md:aspect-auto md:flex-1 h-auto relative ">
                            <img class="absolute inset-0 object-cover object-center w-full h-full rounded-xl"
                                src="{{ asset('images/home/home-services-' . $i + 1 . '.webp') }}" alt="">
                        </div>

                        <div class="p-4 md:flex-1">
                            <p class="mb-2 text-xl font-bold">{{ $titles[$i] }}</p>
                            <p class="mb-3 text-dim-gray">Архитекторы компании воплотят ваши идеи в качественных проектах бревенчатых коттеджей и бань</p>

                            <a href="" class="grid content-center w-8 h-8 p-2 ml-auto rounded-md bg-green-primary">
                                <img class="w-5 h-5" src="{{ asset('images/svgs/arrow-down-right.svg') }}" alt="">
                            </a>
                        </div>

                    </li>
                @endfor
            </ul>

            <button class="w-full mt-6 btn-primary sm:hidden">смотреть все услуги</button>

        </div>

    </section>

    @include('user.partials.home-quality')

    <section class="py-8 section-primary md:py-12 lg:py-15" style="background: linear-gradient(180deg, rgba(229, 233, 236, 0.00) 0%, #E5E9EC 100%);">

        <div>

            <div>

            </div>

            <form action="">


            </form>

        </div>

    </section>

</x-user-layout>
