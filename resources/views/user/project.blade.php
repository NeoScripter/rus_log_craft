<x-user-layout>

    @isset($project)
        <x-user.breadcrumbs :page_name="$project->{'name_' . app()->getLocale()}">
            <x-slot:second_path>
                <a class="select-none underline-offset-2 hover:underline focus-visible:underline" href="/catalog">Каталог</a>
                <div class="mt-1">
                    <img src="{{ asset('images/svgs/black-line.svg') }}" alt="Черный дефис">
                </div>
            </x-slot:second_path>
        </x-user.breadcrumbs>

        <section class="section-primary">

            <h1 class="mb-8 text-3xl font-bold titles sm:mb-6 md:mb-14 md:text-4xl">
                {{ $project->{'name_' . app()->getLocale()} }}</h1>

            <div class="md:flex md:items-start md:gap-10 xl:gap-16">

                <div class="md:hidden">
                    <p>{{ $project->article }}</p>

                    <div class="my-4 flex flex-wrap items-center gap-6 bg-[#F6F5EF] p-4 sm:my-6">

                        <x-user.projects.icon class="basis-[100px]" :src="asset('images/svgs/volume.svg')" alt="Иконка объема"
                            :value="$project->total_area . 'м²'" />

                        <x-user.projects.icon class="basis-[100px]" :src="asset('images/svgs/floors.svg')" alt="Иконка этажей"
                            :value="$project->floors . ($project->floors > 1 ? ' этажа' : ' этаж')" />

                        <x-user.projects.icon class="basis-[200px]" :src="asset('images/svgs/rooms.svg')" alt="Иконка типа комнаты"
                            :value="$project->{'room_type_' . app()->getLocale()}" />

                    </div>
                </div>

                <div x-data="{ preview: '' }" class="mb-6 ms:mb-10 overflow-x-clip md:w-1/2">
                    <div class="hidden mb-4 rounded-md overflow-clip sm:block md:h-[363px] lg:h-[435px] xl:h-[670px]">
                        <img :src="preview ||
                            '{{ Storage::url($project->firstImage->path) }}'"
                            alt="Фото деревянного дома" class="object-cover object-center w-full h-full">
                    </div>

                    <div class="flex items-center gap-2 overflow-x-auto scrollbar-hidden sm:gap-5">

                        @foreach ($project->images as $image)
                            <div class="rounded-md cursor-pointer aspect-square h-72 overflow-clip sm:h-26">
                                <img @click="preview = $el.src" src={{ Storage::url($image->path) }} alt="Фото избы"
                                    class="object-cover object-center w-full h-full">
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="md:w-1/2">
                    <div class="hidden md:block">
                        <p>{{ $project->article }}</p>

                        <div class="my-4 flex flex-wrap items-center gap-6 bg-[#F6F5EF] p-4 sm:my-6">

                            <x-user.projects.icon class="basis-[100px]" :src="asset('images/svgs/volume.svg')" alt="Иконка объема"
                                :value="$project->total_area . 'м²'" />

                            <x-user.projects.icon class="basis-[100px]" :src="asset('images/svgs/floors.svg')" alt="Иконка этажей"
                                :value="$project->floors . ($project->floors > 1 ? ' этажа' : ' этаж')" />

                            <x-user.projects.icon class="basis-[200px]" :src="asset('images/svgs/rooms.svg')" alt="Иконка типа комнаты"
                                :value="$project->{'room_type_' . app()->getLocale()}" />

                        </div>
                    </div>

                    <div class="grid gap-4">
                        <x-user.projects.table-row title="Площадь застройки">
                            {{ $project->build_area }} м2
                        </x-user.projects.table-row>
                        <x-user.projects.table-row title="Этажи">
                            {{ $project->floors }}
                        </x-user.projects.table-row>
                        <x-user.projects.table-row title="Общая площадь дома">
                            {{ $project->total_area }} м2
                        </x-user.projects.table-row>
                        <x-user.projects.table-row title="Жилая площадь">
                            {{ $project->living_area }} м2
                        </x-user.projects.table-row>
                        <x-user.projects.table-row title="Площадь кровли">
                            {{ $project->roof_area }} м2
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
                            {{ $project->price_per_sqm }} руб. за кв.м</p>
                        <p class="text-sm uppercase md:text-base">При заказе сруба или дома под ключ - проект бесплатно</p>
                    </div>

                    <button x-data @click="$dispatch('open-form')" class="block w-full text-center btn-primary">Заказать
                        проект</button>
                </div>

            </div>

        </section>
    @endisset

    <livewire:pageform />

    @include('user.partials.calculate-price')

    @include('user.partials.call-form', ['class' => 'aligned-mb'])

</x-user-layout>
