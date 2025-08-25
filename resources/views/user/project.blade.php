<x-user-layout>

    @isset($project)
        <x-user.breadcrumbs :page_name="$project->{'name_' . app()->getLocale()} ?? __('components.без названия')">
            <x-slot:second_path>
                <a class="select-none underline-offset-2 hover:underline focus-visible:underline" href="/catalog">{{ __('pages/project.Каталог') }}</a>
                <div class="mt-1">
                    <img src="{{ asset('images/svgs/black-line.svg') }}" alt="{{ __('pages/project.Разделительная линия') }}">
                </div>
            </x-slot:second_path>
        </x-user.breadcrumbs>

        <section class="section-primary">

            <h1 class="mb-8 text-3xl font-bold titles sm:mb-6 md:mb-14 md:text-4xl">
                {{ $project->{'name_' . app()->getLocale()} ?? __('pages/project.Название проекта отсутствует') }}</h1>

            <div class="md:flex md:items-start md:gap-10 xl:gap-16">

                <div class="md:hidden">
                    <p>{{ $project->article ?? __('pages/project.Артикул отсутствует') }}</p>

                    <div class="my-4 flex flex-wrap items-center gap-6 bg-[#F6F5EF] p-4 sm:my-6">
                        <x-user.projects.icon class="basis-[100px]" :src="asset('images/svgs/volume.svg')" alt="__('components.Объем дома')" :value="($project->total_area ?? __('components.Не указано')) . __('components.м²')" />

                        <x-user.projects.icon class="basis-[100px]" :src="asset('images/svgs/floors.svg')" alt="__('components.Этажность')" :value="($project->floors ?? 1) . (($project->floors ?? 1) > 1 ? __('components.этажа') : __('components.этаж'))" />

                        <x-user.projects.icon class="basis-[200px]" :src="asset('images/svgs/rooms.svg')" alt="__('components.Тип комнат')" :value="$project->{'room_type_' . app()->getLocale()} ?? __('components.Не указано')" />
                    </div>
                </div>

                <div x-data="{ preview: '' }" class="mb-6 ms:mb-10 overflow-x-auto md:w-1/2">
                    <div class="mb-4 hidden overflow-clip shrink-0 rounded-md sm:block md:h-[363px] lg:h-[435px] xl:h-[670px]">
                        <img :src="preview || '{{ $project->firstImage ? Storage::url($project->firstImage->path) : asset('images/house-placeholder.webp') }}'"
                            alt="Фото проекта {{ $project->{'name_' . app()->getLocale()} ?? __('components.без названия') }}"
                            class="object-cover object-center w-full h-full">
                    </div>

                    <div class="flex items-center gap-2 overflow-x-auto sm:gap-5">

                        @foreach ($project->images as $image)
                            <div class="rounded-md aspect-square h-72 overflow-clip sm:h-26 shrink-0 sm:cursor-pointer">
                                <img @click="preview = $el.src" src={{ Storage::url($image->path) }}
                                    alt="Изображение проекта {{ $project->{'name_' . app()->getLocale()} ?? __('components.без названия') }}"
                                    class="object-cover object-center w-full h-full">
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="md:w-1/2">
                    <div class="hidden md:block">
                        <p>{{ $project->article ?? __('pages/project.Артикул отсутствует') }}</p>

                        <div class="my-4 flex flex-wrap items-center gap-6 bg-[#F6F5EF] p-4 sm:my-6">
                            <x-user.projects.icon class="basis-[100px]" :src="asset('images/svgs/volume.svg')"
                                alt="{{ __('components.Объем дома') }}" :value="($project->total_area ?? __('components.Не указано')) . __('components.м²')" />

                            <x-user.projects.icon class="basis-[100px]" :src="asset('images/svgs/floors.svg')"
                                alt="{{ __('components.Этажность') }}" :value="($project->floors ?? 1) . (($project->floors ?? 1) > 1 ? __('components.этажа') : __('components.этаж'))" />

                            <x-user.projects.icon class="basis-[200px]" :src="asset('images/svgs/rooms.svg')"
                                alt="{{ __('components.Тип комнат') }}" :value="$project->{'room_type_' . app()->getLocale()} ?? __('components.Не указано')" />

                        </div>
                    </div>

                    <div class="grid gap-4">
                        <x-user.projects.table-row title="{{ __('pages/project.Площадь застройки') }}">
                            {{ $project->build_area ?? __('components.Не указано') }} {{__('components.м²')}}
                        </x-user.projects.table-row>
                        <x-user.projects.table-row title="{{ __('pages/project.Этажи') }}">
                            {{ $project->floors ?? __('components.Не указано') }}
                        </x-user.projects.table-row>
                        <x-user.projects.table-row title="{{ __('pages/project.Общая площадь дома') }}">
                            {{ $project->total_area ?? __('components.Не указано') }} {{__('components.м²')}}
                        </x-user.projects.table-row>
                        <x-user.projects.table-row title="{{ __('pages/project.Жилая площадь') }}">
                            {{ $project->living_area ?? __('components.Не указано') }} {{__('components.м²')}}
                        </x-user.projects.table-row>
                        <x-user.projects.table-row title="{{ __('pages/project.Площадь кровли') }}">
                            {{ $project->roof_area ?? __('components.Не указано') }} {{__('components.м²')}}
                        </x-user.projects.table-row>
                        <x-user.projects.table-row title="{{ __('pages/project.Спальня') }}">
                            {{ $project->bedrooms > 1 ? $project->bedrooms : __('components.нет') }}
                        </x-user.projects.table-row>
                        <x-user.projects.table-row title="{{ __('pages/project.Санузел') }}">
                            {{ $project->bathrooms > 1 ? $project->bathrooms : __('components.нет') }}
                        </x-user.projects.table-row>
                        <x-user.projects.table-row title="{{ __('pages/project.Количество жилых комнат') }}">
                            {{ $project->rooms > 1 ? $project->rooms : __('components.нет') }}
                        </x-user.projects.table-row>
                    </div>

                    <div class="my-8">
                        <p class="mb-3 text-xl font-bold md:text-2xl">{{ __('pages/project.Цена сруба дома или бани') }}
                            {{ $project->price_per_sqm ?? __('components.Не указано') }} {{ __('components.руб. за кв.м') }}</p>
                        <p class="text-sm uppercase md:text-base">{{ __('pages/project.При заказе сруба проект бесплатно') }}</p>
                    </div>

                    <button x-data @click="$dispatch('open-form')" class="block w-full text-center btn-primary">{{ __('pages/project.Заказать проект') }}</button>
                </div>

            </div>

            <div x-data="{ showPlan: false }">
                <div class="flex flex-col items-center gap-4 my-8 sm:flex-row">
                    <button @click="showPlan = false" class="w-full btn-filter sm:w-60" :class="showPlan ? '' : 'active'"
                        aria-pressed="!showPlan">{{ __('pages/project.Описание') }}</button>
                    <button @click="showPlan = true" class="w-full btn-filter sm:w-60" :class="showPlan ? 'active' : ''"
                        aria-pressed="showPlan">{{ __('pages/project.Планировка') }}</button>
                </div>

                <div x-show="showPlan" x-transition
                    class="flex flex-col items-center gap-6 overflow-x-auto scrollbar-hidden sm:flex-row">
                    @forelse ($project->plans as $plan)
                        <div class="shrink-0 sm:w-80 md:w-105 lg:w-120">
                            <img src="{{ Storage::url($plan->path) }}"
                                alt="{{ __('pages/project.Планировка проекта') }} {{ $project->{'name_' . app()->getLocale()} ?? __('components.без названия') }}"
                                class="object-cover object-center w-full h-full">
                        </div>
                    @empty
                        <p class="text-gray-500">{{ __('pages/project.Планировка отсутствует') }}</p>
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
