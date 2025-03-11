<x-user-layout :top-padding="false">


    <section
        class="relative grid gap-4 text-white bg-center bg-no-repeat bg-cover section-primary sm:gap-6 place-content-center h-52 sm:h-160"
        style="background-image: url('{{ asset('images/about/about-hero.webp') }}')">
        <div class="absolute inset-0 z-10 bg-black/40"></div>

        <div class="z-20 font-bold sm:text-2xl">
            {{ __('pages/about.О компании') }}
        </div>

        <h1 class="titles z-20 text-xl text-balance sm:text-4xl !text-white">
            {{ __('pages/about.Русь Бревенчатая - Уют и экологичность') }}
        </h1>
    </section>

    <section class="grid gap-12 sm:gap-6 md:gap-18 section-primary sm:grid-cols-3">

        <x-user.about.highlight top="{{ __('pages/about.20 лет') }}" small="{{ __('pages/about.с 2014 года на рынке') }}" />
        <x-user.about.highlight top="{{ __('pages/about.160+') }}" small="{{ __('pages/about.проекта построено по России') }}" />
        <x-user.about.highlight top="{{ __('pages/about.300+') }}" small="{{ __('pages/about.специалистов в штате') }}" />

    </section>

    <section class="flex flex-col gap-4 section-primary sm:gap-0 lg:flex-row lg:flex-wrap lg:justify-between lg:items-start">

        <div class="z-20 p-4 font-bold text-white bg-green-primary sm:w-150 sm:p-6">
            <p class="pb-8 text-xl">
                {{ __('pages/about.Телеканал Россия Санкт-Петербург') }}
            </p>

            <div class="sm:flex sm:items-center sm:gap-8">
                <div class="w-40 pb-8 sm:pb-0">
                    <img class="object-cover object-center" src="{{ asset('images/about/tv-logo.webp') }}" alt="{{ __('pages/about.Россия телеканал') }}">
                </div>
                <a href="https://spbrb.ru/tv5-Canal-Angel-day.htm" target="_blank"
                    class="block px-6 py-2 text-sm font-bold tracking-wide text-center text-white uppercase transition-colors duration-300 bg-transparent border-2 border-white rounded-lg sm:flex-1 hover:text-green-primary focus-visible:text-green-primary hover:bg-white focus-visible:bg-white md:text-base">
                    {{ __('pages/about.Подробнее') }}
                </a>
            </div>
        </div>

        <div class="w-4/5 sm:w-3/5 md:w-1/2 sm:order-1 sm:relative sm:-top-20 md:-top-32 lg:basis-1/3 lg:static lg:z-10">
            <img class="object-cover object-center w-full" src="{{ asset('images/about/report-1.webp') }}" alt="new report">
        </div>

        <div class="w-4/5 ml-auto sm:w-3/5 sm:relative sm:-top-10 md:-top-16 lg:order-1 lg:basis-[36rem] lg:mr-auto lg:ml-80 lg:-top-20">
            <img class="object-cover object-center w-full" src="{{ asset('images/about/report-2.webp') }}" alt="new report">
        </div>

    </section>

    @include('user.partials.service-links')

    <section class="section-primary">

        <p class="mb-4 text-xl font-bold sm:mb-6 md:text-2xl">{{ __('pages/about.Видео, снятое дроном') }}</p>

        <div class="lg:w-4/5 lg:mx-auto">
            <livewire:aboutVideo lazy="on-load" />
        </div>

    </section>

    <section class="section-primary">

        <div class="flex flex-col gap-10 p-4 border border-gray-300 rounded-lg md:flex-row">

            <div class="rounded-lg overflow-clip h-75 md:h-auto md:basis-[28em] md:shrink-0 relative">
                <img src="{{ asset('images/home/intro-1.webp')}}" alt="" class="absolute inset-0 object-cover object-center w-full h-full">
            </div>

            <div class="space-y-4 md:space-y-6">
                <h2 class="text-xl titles md:text-4xl">
                    {{ __('pages/about.Материалы') }}
                </h2>

                <p>{{ __('pages/about.Материалом для строительства') }}</p>

                <p>{{ __('pages/about.Дополнительно к этому наша компания') }}</p>
            </div>
        </div>

    </section>

    @include('user.partials.home-accordion')

    <livewire:pageform />

    @include('user.partials.delivery')

    @include('user.partials.house-grid', ['title' => 'Популярные проекты домов'])

    @include('user.partials.call-form', ['class' => 'aligned-mb'])

</x-user-layout>
