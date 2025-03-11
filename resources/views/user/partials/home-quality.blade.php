<section class="section-primary">

    <div class="md:flex md:items-start md:justify-between md:gap-10">
        <div class="mb-6 md:flex-1">
            <h2 class="text-xl font-bold !leading-[120%] tracking-wide text-dark-black md:text-2xl">{{ __('partials/home_quality.Наши клиенты выбирают') }}
                <br class="mb-1"> <span class="text-2xl golden-title md:text-4xl">{{ __('partials/home_quality.качество') }}</span>
            </h2>
        </div>

        <div class="md:flex-1">
            <p class="mb-6">
                {{ __('partials/home_quality.мы понимаем, что строительство дома связано со стрессом') }}
            </p>
            <p>
                {{ __('partials/home_quality.наши дома решают эти проблемы') }}
            </p>
        </div>
    </div>

    <div
        class="my-8 mb-4 text-xl font-bold !leading-[120%] tracking-wide text-dark-black md:mb-8 md:text-2xl md:font-normal">
        {{ __('partials/home_quality.наше производство') }}</div>

    <div class="flex flex-wrap items-center gap-3 md:gap-x-10 md:gap-y-8">

        <x-user.index.card class="h-60 md:h-80 md:basis-[48%] lg:basis-[27%]">
            <x-slot:title>
                {{ __('partials/home_quality.Древесина из экологически чистых источников') }}
            </x-slot>
            {{ __('partials/home_quality.премиум древесина поступает из лесов') }}
        </x-user.index.card>

        <x-user.index.card class="h-60 md:h-80 md:basis-[48%] lg:basis-[27%]">
            <x-slot:title>
                {{ __('partials/home_quality.Доступные цены') }}
            </x-slot>
            {{ __('partials/home_quality.мы ценим нашу репутацию') }}
        </x-user.index.card>

        <x-user.index.card class="h-60 sm:h-80 md:order-1 md:h-80 md:basis-[38%] lg:basis-[27%]">
            <x-slot:title>
                {{ __('partials/home_quality.Удобная доставка до участка') }}
            </x-slot>
            {{ __('partials/home_quality.рубка и строительство на нашей площадке') }}
        </x-user.index.card>

        <x-user.index.card class="h-80 md:basis-[58%] lg:basis-[38%]">
            <x-slot:title>
                {{ __('partials/home_quality.Собственное производство и изготовление') }}
            </x-slot>
            {{ __('partials/home_quality.Мы берем на себя всю работу по проектированию') }}
        </x-user.index.card>

        <x-user.index.card class="h-80 md:order-3 md:basis-[38%] lg:order-2 lg:basis-[28%]">
            <x-slot:title>
                {{ __('partials/home_quality.Подходящий вариант для каждого') }}
            </x-slot>
            {{ __('partials/home_quality.каждый проект уникален') }}
        </x-user.index.card>

        <div class="h-80 sm:basis-[49%] md:order-2 md:basis-[58%] lg:basis-[38%]">
            <img class="object-cover object-center w-full h-full" src="{{ asset('images/home/home-quality.webp') }}"
                alt="{{ __('components.Фото деревянного дома')}}">
        </div>
    </div>

</section>
