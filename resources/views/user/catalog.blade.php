<x-user-layout>

    <x-user.breadcrumbs page_name="Каталог" />

    <section class="section-primary" x-data="{
        showFilters: true,
        isLarge: false,

        init() {
            const mediaQuery = window.matchMedia('(min-width: 1024px)');

            this.isLarge = mediaQuery.matches;

            mediaQuery.addEventListener('change', (e) => {
                this.isLarge = e.matches;
            });
        },
    }" x-init="init()">

        <h1 class="mb-8 text-3xl font-bold titles sm:mb-6 md:mb-14 md:text-6xl">{{ __('pages/catalog.Проекты домов') }}
        </h1>

        <button @click="showFilters = !showFilters" class="flex items-center gap-1 mb-6 transition-colors duration-300 md:hidden hover:text-green-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
            </svg>

            {{ __('pages/catalog.Фильтры') }}
        </button>

        <livewire:project-filters />


    </section>


    <livewire:pageform />


    @include('user.partials.home-bottom-carousel')

    @include('user.partials.calculate-price')

    @include('user.partials.call-form', ['class' => 'aligned-mb'])

</x-user-layout>
