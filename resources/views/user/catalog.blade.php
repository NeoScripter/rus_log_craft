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

        <h1 class="mb-8 text-3xl font-bold titles sm:mb-6 md:mb-14 md:text-6xl">Проекты домов</h1>

        <button @click="showFilters = !showFilters" class="flex items-center gap-2 mb-6 md:hidden">
            <img src="{{ asset('images/catalog/filter-btn.svg') }}" alt="Фильтр">
            Фильтры
        </button>

        {{-- @isset($projects)
        <div class="relative items-start gap-8 uppercase md:flex">

            <form x-show="isLarge || showFilters" x-collapse class="p-6 mb-6 space-y-4 border border-gray-400 rounded-md md:sticky top-32 md:basis-1/2 md:max-w-[374px]">
                <header class="flex items-center justify-between pb-4">
                    <div class="text-xl font-bold">Фильтры</div>

                    <button @click="showFilters = false" aria-label="Закрыть меню навигации" class="p-2 md:hidden">
                        <img src="{{ asset('images/partials/header/close-btn.svg') }}" alt="Закрыть" aria-hidden="true">
                    </button>
                </header>

                <div class="pb-4 space-y-2 border-b border-gray-400">
                    <button class="w-full btn-filter">Показать все</button>
                    <button class="w-full btn-filter">Дома</button>
                    <button class="w-full btn-filter">Дома с баней</button>
                    <button class="w-full btn-filter">Бани</button>
                    <button class="w-full btn-filter">Хозпостройки</button>

                </div>

                <div class="pb-4 border-b border-gray-400">

                    <div class="mb-4 font-medium">Этажность</div>

                    <div class="flex flex-wrap items-center gap-2">
                        <button class="btn-filter">Все</button>
                        <button class="btn-filter">1</button>
                        <button class="btn-filter">2</button>
                        <button class="btn-filter">3</button>
                    </div>

                </div>

                <div class="pb-4 border-b border-gray-400">

                    <div class="mb-4 font-medium">Площадь</div>

                    <div class="flex flex-wrap items-center gap-2">
                        <button class="btn-filter">Все</button>
                        <button class="btn-filter">До 50</button>
                        <button class="btn-filter">50-130</button>
                        <button class="btn-filter">130-190</button>
                        <button class="btn-filter">Более 190</button>
                    </div>

                </div>

                <div class="pb-4">
                    <div class="flex items-start gap-2 mb-4 me-4">
                        <input id="terrace" type="checkbox" value="1"
                            class="w-6 h-6 bg-gray-100 border-gray-300 rounded-sm text-green-primary focus:ring-green-primary focus:ring-2">
                        <label for="terrace" class="font-medium tracking-wider text-gray-900 capitalize">Терраса</label>
                    </div>
                    <div class="flex items-start gap-2 me-4">
                        <input id="garage" type="checkbox" value="1"
                            class="w-6 h-6 bg-gray-100 border-gray-300 rounded-sm text-green-primary focus:ring-green-primary focus:ring-2">
                        <label for="garage" class="font-medium tracking-wider text-gray-900 capitalize">Гараж</label>
                    </div>
                </div>

                <button class="w-full btn-secondary">Показать</button>
            </form>

            <div class="grid gap-x-4 gap-y-6 md:grid-cols-2 xl:grid-cols-3 md:gap-x-6 lg:gap-x-10">
                @foreach ($projects as $project)
                    <x-user.project-card :project="$project" />
                @endforeach
            </div>
        </div>

        <div class="px-6 my-8 lg:px-0">{{ $projects->links() }}</div>
        @endisset --}}

        <livewire:project-filters />


    </section>


    <livewire:pageform />


    @include('user.partials.home-bottom-carousel')

    @include('user.partials.calculate-price')

    @include('user.partials.call-form')

</x-user-layout>
