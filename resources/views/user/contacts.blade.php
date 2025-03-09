<x-user-layout :bottom-padding="false">

    <x-user.breadcrumbs page_name="Контакты" />

    <div class="section-primary">

        <h1 class="text-4xl titles md:text-6xl">Контактная информация</h1>

    </div>

    <section class="section-primary">

        <div x-data class="space-y-6">
            <div class="md:flex md:items-center md:justify-between">
                <h2 class="text-2xl font-bold tracking-wider uppercase md:text-4xl text-green-primary">Телефоны</h2>
                <button @click="$dispatch('open-form')"
                    class="hidden w-full text-center md:block btn-primary md:max-w-128">Заказать звонок</button>
            </div>

            <div class="grid gap-6 md:gap-10 md:grid-cols-2">
                <div
                    class="p-4 rounded-xl border border-[#E5E3DB] flex flex-col justify-between h-38 md:h-50 transition-colors duration-300 group hover:bg-golden-primary">

                    <div class="flex items-start justify-between gap-6">
                        <p
                            class="text-xl font-bold tracking-wide !leading-[120%] text-green-primary md:text-2xl group-hover:text-white">
                            в Санкт-Петербурге</p>
                        <div class="w-2 h-2 rounded-sm bg-green-primary shrink-0 group-hover:bg-white"></div>
                    </div>

                    <div class="text-xl font-bold md:text-2xl group-hover:text-white">
                        (812) 305-34-89 офис <br> +7 921 350-85-24 (моб.)
                    </div>
                </div>

                <div
                    class="p-4 rounded-xl border border-[#E5E3DB] flex flex-col justify-between h-38 md:h-50 transition-colors duration-300 group hover:bg-golden-primary">

                    <div class="flex items-start justify-between gap-6">
                        <p
                            class="text-xl font-bold tracking-wide !leading-[120%] text-green-primary md:text-2xl group-hover:text-white">
                            в Москве</p>
                        <div class="w-2 h-2 rounded-sm bg-green-primary shrink-0 group-hover:bg-white"></div>
                    </div>

                    <div class="text-xl font-bold md:text-2xl group-hover:text-white">
                        +7 916 514-15-93 (моб.)
                    </div>
                </div>
            </div>

            <button @click="$dispatch('open-form')" class="block w-full text-center btn-primary md:hidden">Заказать
                звонок</button>
        </div>

        <a href="mailto:info@spbrb.ru"
            class="inline-flex items-center gap-2 mt-8 font-semibold underline uppercase md:mt-10 lg:mt-16 underline-offset-2">
            <img src="{{ asset('images/partials/header/mail.svg') }}" alt="Mail icon" aria-hidden="true">
            <span
                class="transition-colors duration-300 hover:text-white hover:bg-dark-black focus-visible:text-white focus-visible:bg-dark-black">info@spbrb.ru</span>
        </a>

    </section>

    <section class="section-primary">

        <div class="grid gap-8 md:gap-6 lg:gap-10 lg:grid-cols-2">

            <div class="flex flex-col justify-between">
                <h2 class="text-2xl font-bold tracking-wider uppercase md:text-4xl text-green-primary">Строительная
                    площадка и основной офис</h2>
                <p class="my-4 md:text-2xl">расположена в 5 минутах от КАД Санкт-Петербурга по адресу: Санкт-Петербург,
                    пос. Янино, ул. Кольцевая.</p>
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
                <h2 class="text-2xl font-bold tracking-wider uppercase md:text-4xl text-green-primary">Служебный офис
                    компании (юридический отдел и тп)</h2>
                <p class="my-4 md:text-2xl">195027, Санкт-Петербург, Большеохтинский проспект, дом 10.</p>
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
        <h2 class="text-2xl font-bold tracking-wider uppercase md:text-4xl text-green-primary">Время работы офиса
            и площадки:</h2>
        <p class="mt-4 md:text-2xl">понедельник - пятница: 09.00 - 18.00</p>
    </div>

    <div class="text-xl font-bold section-primary md:text-2xl">
        При первой поездке в наш офис или на площадку рекомендуем распечатать данную страницу, либо записать наши телефоны, чтобы, при необходимости, уточнить свой маршрут при возникновении затруднений.
    </div>

    <div class="section-primary">
        <p class="mb-4 text-xl font-bold text-center md:text-2xl">Схема проезда к офису и строительной площадке в Янино:</p>
        <div class="mx-auto max-w-250">
            <img src="{{ asset('images/contacts/contacts-map.webp')}}" alt="">
        </div>
    </div>


    <livewire:pageform />

    @include('user.partials.house-grid', ['title' => 'Популярные проекты домов'])

    @include('user.partials.home-bottom-carousel')

    @include('user.partials.call-form')

</x-user-layout>
