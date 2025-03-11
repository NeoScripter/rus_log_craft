<x-user-layout>

    <x-user.breadcrumbs page_name="{{ __('pages/contacts.Контакты') }}" />

    <div class="section-primary">
        <h1 class="text-4xl titles md:text-6xl">
            {{ __('pages/contacts.Контактная информация') }}
        </h1>
    </div>

    <section class="section-primary">

        <div x-data class="space-y-6">
            <div class="md:flex md:items-center md:justify-between">
                <h2 class="text-2xl font-bold tracking-wider uppercase text-green-primary md:text-4xl">
                    {{ __('pages/contacts.Телефоны') }}
                </h2>
                <button @click="$dispatch('open-form')" class="hidden w-full text-center btn-primary md:block md:max-w-128">
                    {{ __('pages/contacts.Заказать звонок') }}
                </button>
            </div>

            <div class="grid gap-6 md:grid-cols-2 md:gap-10">

                <x-user.contacts.card title="{{ __('pages/contacts.В Санкт-Петербурге') }}">
                    (812) 305-34-89 {{ __('pages/contacts.Офис') }} <br> +7 921 350-85-24 ({{ __('pages/contacts.Мобильный') }})
                </x-user.contacts.card>

                <x-user.contacts.card title="{{ __('pages/contacts.В Москве') }}">
                    +7 916 514-15-93 ({{ __('pages/contacts.Мобильный') }})
                </x-user.contacts.card>

            </div>

            <button @click="$dispatch('open-form')" class="block w-full text-center btn-primary md:hidden">{{ __('pages/contacts.Заказать звонок') }}</button>
        </div>

        <a href="mailto:info@spbrb.ru"
            class="inline-flex items-center gap-2 mt-8 font-semibold underline uppercase underline-offset-2 md:mt-10 lg:mt-16">
            <img src="{{ asset('images/partials/header/mail.svg') }}" alt="Mail icon" aria-hidden="true">
            <span
                class="transition-colors duration-300 hover:bg-dark-black hover:text-white focus-visible:bg-dark-black focus-visible:text-white">info@spbrb.ru</span>
        </a>

    </section>

    <section class="section-primary">

        <div class="grid gap-8 md:gap-6 lg:grid-cols-2 lg:gap-10">

            <div class="flex flex-col justify-between">
                <h2 class="text-2xl font-bold tracking-wider uppercase text-green-primary md:text-4xl">
                    {{ __('pages/contacts.Строительная площадка и офис') }}
                </h2>
                <p class="my-4 md:text-2xl">
                    {{ __('pages/contacts.Адрес площадки') }}
                </p>

                <div style="position:relative;overflow:hidden;" class="mt-auto"><a
                        href="https://yandex.com/maps/2/saint-petersburg/?utm_medium=mapframe&utm_source=maps"
                        style="color:#eee;font-size:12px;position:absolute;top:0px;">Saint Petersburg</a><a
                        href="https://yandex.com/maps/10174/saint-petersburg-and-leningrad-oblast/geo/koltsevaya_ulitsa/1587748825/?ll=30.649449%2C59.918769&utm_medium=mapframe&utm_source=maps&z=10.67"
                        style="color:#eee;font-size:12px;position:absolute;top:14px;">Yandex Maps: search for places,
                        transport, and routes</a><iframe
                        src="https://yandex.com/map-widget/v1/?ll=30.649449%2C59.918769&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgoxNTg3NzQ4ODI1EqsB0KDQvtGB0YHQuNGPLCDQm9C10L3QuNC90LPRgNCw0LTRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwg0JLRgdC10LLQvtC70L7QttGB0LrQuNC5INGA0LDQudC-0L0sINCz0L7RgNC-0LTRgdC60L7QuSDQv9C-0YHRkdC70L7QuiDQr9C90LjQvdC-LTEsINCa0L7Qu9GM0YbQtdCy0LDRjyDRg9C70LjRhtCwIgoNNm_0QRXDzG9C&z=10.67"
                        width="100%" height="400" frameborder="1" allowfullscreen="true"
                        style="position:relative;"></iframe></div>
            </div>

            <div class="flex flex-col justify-between">
                <h2 class="text-2xl font-bold tracking-wider uppercase text-green-primary md:text-4xl">
                    {{ __('pages/contacts.Служебный офис компании') }}
                </h2>
                <p class="my-4 md:text-2xl">
                    {{ __('pages/contacts.Адрес офиса') }}
                </p>
                <div style="position:relative;overflow:hidden;" class="mt-auto"><a
                        href="https://yandex.com/maps/2/saint-petersburg/?utm_medium=mapframe&utm_source=maps"
                        style="color:#eee;font-size:12px;position:absolute;top:0px;">Saint Petersburg</a><a
                        href="https://yandex.com/maps/2/saint-petersburg/house/bolsheokhtinskiy_prospekt_10/Z0kYcgdpTEQAQFtjfXV0c35hZw==/?ll=30.412062%2C59.947543&utm_medium=mapframe&utm_source=maps&z=14.41"
                        style="color:#eee;font-size:12px;position:absolute;top:14px;">Bolsheokhtinskiy Avenue, 10 —
                        Yandex Maps</a><iframe
                        src="https://yandex.com/map-widget/v1/?ll=30.412062%2C59.947543&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NzM5NDc3MBJg0KDQvtGB0YHQuNGPLCDQodCw0L3QutGCLdCf0LXRgtC10YDQsdGD0YDQsywg0JHQvtC70YzRiNC10L7RhdGC0LjQvdGB0LrQuNC5INC_0YDQvtGB0L_QtdC60YIsIDEwIgoNr0bzQRUUz29C&z=14.41"
                        width="100%" height="400" frameborder="1" allowfullscreen="true"
                        style="position:relative;"></iframe></div>
            </div>
        </div>

    </section>


    <div class="section-primary">
        <h2 class="text-2xl font-bold tracking-wider uppercase text-green-primary md:text-4xl">
            {{ __('pages/contacts.Время работы офиса') }}
        </h2>
        <p class="mt-4 md:text-2xl">
            {{ __('pages/contacts.График работы') }}
        </p>
    </div>

    <div class="text-xl font-bold section-primary md:text-2xl">
        {{ __('pages/contacts.Рекомендация по маршруту') }}
    </div>

    <div class="section-primary">
        <p class="mb-4 text-xl font-bold text-center md:text-2xl"> {{ __('pages/contacts.Схема проезда') }}
        </p>
        <div class="mx-auto max-w-250">
            <img src="{{ asset('images/contacts/contacts-map.webp') }}" alt="">
        </div>
    </div>


    <livewire:pageform />

    @include('user.partials.house-grid', ['title' => __('pages/contacts.Популярные проекты домов')])

    @include('user.partials.home-bottom-carousel')

    @include('user.partials.call-form', ['class' => 'aligned-mb'])

</x-user-layout>
