<x-user-layout>

    @isset($project)
        <x-user.breadcrumbs :page_name="$project->{'name_' . app()->getLocale()} ?? 'Проект без названия'">
            <x-slot:second_path>
                <a class="select-none underline-offset-2 hover:underline focus-visible:underline" href="/catalog">Каталог</a>
                <div class="mt-1">
                    <img src="{{ asset('images/svgs/black-line.svg') }}" alt="Разделительная линия">
                </div>
            </x-slot:second_path>
        </x-user.breadcrumbs>

        <section class="section-primary">

            <h1 class="mb-8 text-3xl font-bold titles sm:mb-6 md:mb-14 md:text-4xl">
                {{ $project->{'name_' . app()->getLocale()} ?? 'Название проекта отсутствует' }}</h1>

            <div class="md:flex md:items-start md:gap-10 xl:gap-16">

                <div class="md:hidden">
                    <p>{{ $project->article ?? 'Артикул отсутствует' }}</p>

                    <div class="my-4 flex flex-wrap items-center gap-6 bg-[#F6F5EF] p-4 sm:my-6">
                        <x-user.projects.icon class="basis-[100px]" :src="asset('images/svgs/volume.svg')" alt="Объем дома" :value="($project->total_area ?? 'Не указано') . 'м²'" />

                        <x-user.projects.icon class="basis-[100px]" :src="asset('images/svgs/floors.svg')" alt="Этажность" :value="($project->floors ?? 1) . (($project->floors ?? 1) > 1 ? ' этажа' : ' этаж')" />

                        <x-user.projects.icon class="basis-[200px]" :src="asset('images/svgs/rooms.svg')" alt="Тип комнат" :value="$project->{'room_type_' . app()->getLocale()} ?? 'Не указано'" />
                    </div>
                </div>

                <div x-data="{ preview: '' }" class="mb-6 ms:mb-10 overflow-x-clip md:w-1/2">
                    <div class="mb-4 hidden overflow-clip rounded-md sm:block md:h-[363px] lg:h-[435px] xl:h-[670px]">
                        <img :src="preview ||
                            '{{ $project->firstImage ? Storage::url($project->firstImage->path) : asset('images/house-placeholder.webp') }}'"
                            alt="Фото проекта {{ $project->{'name_' . app()->getLocale()} ?? 'без названия' }}"
                            class="object-cover object-center w-full h-full">
                    </div>

                    <div class="flex items-center gap-2 overflow-x-auto scrollbar-hidden sm:gap-5">

                        @foreach ($project->images as $image)
                            <div class="rounded-md aspect-square h-72 overflow-clip sm:h-26 sm:cursor-pointer">
                                <img @click="preview = $el.src" src={{ Storage::url($image->path) }}
                                    alt="Изображение проекта {{ $project->{'name_' . app()->getLocale()} ?? 'без названия' }}"
                                    class="object-cover object-center w-full h-full">
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="md:w-1/2">
                    <div class="hidden md:block">
                        <p>{{ $project->article ?? 'Артикул отсутствует' }}</p>

                        <div class="my-4 flex flex-wrap items-center gap-6 bg-[#F6F5EF] p-4 sm:my-6">
                            <x-user.projects.icon class="basis-[100px]" :src="asset('images/svgs/volume.svg')" alt="Объем дома"
                                :value="($project->total_area ?? 'Не указано') . 'м²'" />

                            <x-user.projects.icon class="basis-[100px]" :src="asset('images/svgs/floors.svg')" alt="Этажность"
                                :value="($project->floors ?? 1) . (($project->floors ?? 1) > 1 ? ' этажа' : ' этаж')" />

                            <x-user.projects.icon class="basis-[200px]" :src="asset('images/svgs/rooms.svg')" alt="Тип комнат"
                                :value="$project->{'room_type_' . app()->getLocale()} ?? 'Не указано'" />
                        </div>
                    </div>

                    <div class="grid gap-4">
                        <x-user.projects.table-row title="Площадь застройки">
                            {{ $project->build_area ?? 'Не указано' }} м2
                        </x-user.projects.table-row>
                        <x-user.projects.table-row title="Этажи">
                            {{ $project->floors ?? 'Не указано' }}
                        </x-user.projects.table-row>
                        <x-user.projects.table-row title="Общая площадь дома">
                            {{ $project->total_area ?? 'Не указано' }} м2
                        </x-user.projects.table-row>
                        <x-user.projects.table-row title="Жилая площадь">
                            {{ $project->living_area ?? 'Не указано' }} м2
                        </x-user.projects.table-row>
                        <x-user.projects.table-row title="Площадь кровли">
                            {{ $project->roof_area ?? 'Не указано' }} м2
                        </x-user.projects.table-row>
                        <x-user.projects.table-row title="Спальня">
                            {{ $project->bedrooms > 1 ? $project->bedrooms : 'нет' }}
                        </x-user.projects.table-row>
                        <x-user.projects.table-row title="Санузел">
                            {{ $project->bathrooms > 1 ? $project->bathrooms : 'нет' }}
                        </x-user.projects.table-row>
                        <x-user.projects.table-row title="Количество жилых комнат">
                            {{ $project->rooms > 1 ? $project->rooms : 'нет' }}
                        </x-user.projects.table-row>
                    </div>

                    <div class="my-8">
                        <p class="mb-3 text-xl font-bold md:text-2xl">Цена сруба дома или бани: от
                            {{ $project->price_per_sqm ?? 'Не указано' }} руб. за кв.м</p>
                        <p class="text-sm uppercase md:text-base">При заказе сруба или дома под ключ - проект бесплатно</p>
                    </div>

                    <button x-data @click="$dispatch('open-form')" class="block w-full text-center btn-primary">Заказать
                        проект</button>
                </div>

            </div>

            <div x-data="{ showPlan: false }">
                <div class="flex flex-col items-center gap-4 my-8 sm:flex-row">
                    <button @click="showPlan = false" class="w-full btn-filter sm:w-60" :class="showPlan ? '' : 'active'"
                        aria-pressed="!showPlan">Описание</button>
                    <button @click="showPlan = true" class="w-full btn-filter sm:w-60" :class="showPlan ? 'active' : ''"
                        aria-pressed="showPlan">Планировка</button>
                </div>

                <div x-show="showPlan" x-transition
                    class="flex flex-col items-center gap-6 overflow-x-auto scrollbar-hidden sm:flex-row">
                    @forelse ($project->plans as $plan)
                        <div class="shrink-0 sm:w-80 md:w-105 lg:w-120">
                            <img src="{{ Storage::url($plan->path) }}"
                                alt="Планировка проекта {{ $project->{'name_' . app()->getLocale()} ?? 'без названия' }}"
                                class="object-cover object-center w-full h-full">
                        </div>
                    @empty
                        <p class="text-gray-500">Планировка отсутствует</p>
                    @endforelse
                </div>

                <div x-show="!showPlan" x-transition class="max-w-300 lg:text-xl">
                    {{ $project->{'description_' . app()->getLocale()} }}
                </div>
            </div>

        </section>
    @endisset

    <livewire:pageform />

    @include('user.partials.calculate-price')

    @include('user.partials.call-form', ['class' => 'aligned-mb'])

</x-user-layout>
