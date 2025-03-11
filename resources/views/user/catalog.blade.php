<x-user-layout>

    <x-user.breadcrumbs page_name="Каталог" />

    <section class="section-primary" x-data="{
        showFilters: false,
        isLarge: false,

        init() {
            const mediaQuery = window.matchMedia('(min-width: 1024px)');

            this.isLarge = mediaQuery.matches;

            mediaQuery.addEventListener('change', (e) => {
                this.isLarge = e.matches;
            });
        },
    }" x-init="init()">

        <h1 class="mb-8 text-3xl font-bold titles sm:mb-6 md:mb-14 md:text-6xl">{{ __('pages/catalog.Проекты домов')}}</h1>

        <button @click="showFilters = !showFilters" class="flex items-center gap-2 mb-6 md:hidden">
            <img src="{{ asset('images/catalog/filter-btn.svg') }}" alt="Фильтр">
            {{ __('pages/catalog.Фильтры')}}
        </button>

        <livewire:project-filters />


    </section>


    <livewire:pageform />


    @include('user.partials.home-bottom-carousel')

    @include('user.partials.calculate-price')

    @include('user.partials.call-form', ['class' => 'aligned-mb'])

</x-user-layout>
