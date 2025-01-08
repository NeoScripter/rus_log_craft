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

                            <span class="absolute top-0 right-0 block px-6 py-3 text-xl font-bold bg-white rounded-md text-green-primary">
                                {{ $project->volume }} м²
                            </span>

                            <img class="object-cover object-center w-full h-full" src="{{ Storage::url($project->image) }}" alt="{{ $project->name }}">
                        </div>

                        <div class="flex flex-col flex-1 gap-3 p-4">
                            <div class="text-xl titles">{{ $project->name }}</div>
                            <span class="block mt-auto text-dim-gray">{{ $project->article }}</span>

                            <div class="flex items-center justify-between gap-1">

                                <div class="flex items-center flex-1 gap-2">
                                    <img class="w-6 aspect-square" src="{{ asset('images/svgs/volume.svg') }}" alt="Volume svg">
                                    {{ $project->volume }} м²
                                </div>

                                <div class="flex items-center flex-1 gap-2">
                                    <img class="w-6 aspect-square" src="{{ asset('images/svgs/floors.svg') }}" alt="Volume svg">
                                    {{ $project->floors . $project->floors > 1 ? 'этажа' : 'этаж' }}
                                </div>

                                <div class="flex items-center flex-1 gap-2">
                                    <img class="w-6 aspect-square" src="{{ asset('images/svgs/rooms.svg') }}" alt="Volume svg">
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
</x-user-layout>
