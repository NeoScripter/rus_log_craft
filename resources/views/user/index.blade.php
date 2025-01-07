<x-user-layout>

    <section class="section-primary">

        <div class="flex flex-col gap-10 sm:flex-row">
            <h1
                class="block text-3xl font-bold tracking-wide uppercase leading-[120%] text-balance sm:flex-1 md:text-[4rem]">
                Проектирование и строительство домов и бань из бревна</h1>

            <div class="ml-auto w-72 sm:w-auto sm:basis-1/2 md:basis-1/3 lg:basis-1/4">
                <img class="w-full rounded-lg" src="{{ asset('images/home/hero-top.webp') }}" alt="Top of a wooden arc">
                <p class="text-sm text-light-gray md:text-base">Уют и экологичность в домах из натурального бревна. <br>
                    Ручная работа и индивидуальный подход в каждом проекте.</p>
            </div>

        </div>

        <div class="flex flex-col gap-4 my-6 sm:flex-row md:gap-10">
            <button class="flex-1 btn-primary">наш каталог проектов</button>
            <button class="flex-1 btn-secondary">заказать звонок</button>
        </div>

        <div class="grid gap-4">

            @php
                $links = ['#', '#', '#', '#'];
                $names = ['Дома из бревна', 'Дома с баней', 'Бани из бревна', 'Хозпостройки'];
            @endphp

            @foreach ($names as $idx => $name)
                <a href="{{ $links[$idx] }}" class="flex flex-col gap-4 px-4 py-6 bg-dim-gray">
                    <img src="{{ asset('images/home/hero-' . $idx + 1 . '.webp')}}" alt="{{ $name }}">
                    <div class="font-bold text-center">{{ $name }}</div>
                </a>
            @endforeach
        </div>

    </section>





    @isset($projects)
        @foreach ($projects as $project)
            <div>
                {{ $project->name }}
                {{ $project->image }}
                {{ $project->volume }}
                {{ $project->article }}
                {{ $project->floors }}
                {{ $project->rooms }}
                {{ $project->link }}
            </div>
        @endforeach

    @endisset

</x-user-layout>
