<x-user-layout>

    <x-user.breadcrumbs page_name="{{ __('pages/services.Услуги') }}" />

    <section class="section-primary">

        <h1 class="mb-8 text-3xl font-bold titles sm:mb-6 md:mb-14 md:text-6xl">
            {{ __('pages/services.Услуги компании') }}</h1>

        <div x-data class="space-y-6 sm:space-y-8 md:space-y-14">

            <x-user.services.service-section section_id="design" title="{{ __('pages/services.Проектирование') }}"
                image_path="images/services/design/design-">

                <p>{{ __('pages/services.Описание проектирования') }}</p>
                <p>{{ __('pages/services.Стоимость проектирования') }}</p>

                <div class="flex flex-col gap-4 lg:flex-row lg:items-center">
                    <a href="/catalog" class="block text-center btn-primary lg:flex-1">
                        {{ __('pages/services.Наш каталог проектов') }}
                    </a>
                    <button @click="$dispatch('open-form')" class="btn-secondary lg:flex-1">
                        {{ __('pages/services.Заказать проект') }}
                    </button>
                </div>

            </x-user.services.service-section>


            <x-user.services.service-section section_id="saunas" title="{{ __('pages/services.Дома и бани под ключ') }}"
                image_path="images/services/saunas/saunas-">

                <p>{{ __('pages/services.Описание домов и бань') }}</p>

                <div>{{ __('pages/services.Выбор деревянного дома') }}</div>

                <div class="flex flex-col gap-4 lg:flex-row lg:items-center">
                    <button @click="$dispatch('open-form')" class="btn-secondary lg:flex-1">
                        {{ __('pages/services.Заказать обратный звонок') }}
                    </button>
                </div>

            </x-user.services.service-section>

            <x-user.services.service-section section_id="huts" title="{{ __('pages/services.Изготовление срубов') }}"
                :total_slides="4" image_path="images/services/huts/hut-">

                <p>{{ __('pages/services.Описание изготовления срубов') }}</p>

                <div>{{ __('pages/services.Цена сруба') }}</div>

                <div class="flex flex-col gap-4 lg:flex-row lg:items-center">
                    <button @click="$dispatch('open-form')" class="block text-center btn-primary lg:flex-1">
                        {{ __('pages/services.Заказать сруб') }}
                    </button>

                    <button class="btn-secondary lg:flex-1">
                        {{ __('pages/services.Калькулятор стоимости сруба') }}
                    </button>
                </div>

            </x-user.services.service-section>

            <x-user.services.service-section section_id="foundations"
                title="{{ __('pages/services.Строительство фундаментов') }}"
                image_path="images/services/foundations/foundation-">

                <p>{{ __('pages/services.Описание фундамента') }}</p>

                <div>{{ __('pages/services.Цена строительства фундамента') }}</div>

                <div class="flex flex-col gap-4 lg:flex-row lg:items-center">
                    <button @click="$dispatch('open-form')" class="btn-secondary lg:flex-1">
                        {{ __('pages/services.Заказать обратный звонок') }}
                    </button>
                </div>

            </x-user.services.service-section>

            <x-user.services.service-section section_id="roofs" title="{{ __('pages/services.Возведение крыш') }}"
                :total_slides="4" image_path="images/services/roofs/roofs-">

                <p>{{ __('pages/services.Описание крыши') }}</p>

                <div>{{ __('pages/services.Стоимость монтажа крыши') }}</div>

                <div class="flex flex-col gap-4 lg:flex-row lg:items-center">
                    <button @click="$dispatch('open-form')" class="btn-secondary lg:flex-1">
                        {{ __('pages/services.Заказать обратный звонок') }}
                    </button>
                </div>

            </x-user.services.service-section>

            <x-user.services.service-section section_id="benches"
                title="{{ __('pages/services.Беседки, столы и скамейки') }}" :total_slides="4"
                image_path="images/services/benches/bench-">

                <p>{{ __('pages/services.Описание беседок') }}</p>

                <div>{{ __('pages/services.Качество изделий') }}</div>

                <div>{{ __('pages/services.Цена малых форм') }}</div>

                <div class="flex flex-col gap-4 lg:flex-row lg:items-center">
                    <button @click="$dispatch('open-form')" class="btn-secondary lg:flex-1">
                        {{ __('pages/services.Заказать обратный звонок') }}
                    </button>
                </div>

            </x-user.services.service-section>

        </div>

    </section>

    <section class="section-primary">

        <h2 class="mb-4 text-2xl titles sm:mb-6 md:mb-8 md:text-4xl">{{ __('pages/services.Дополнительные услуги') }}
        </h2>

        <div class="grid gap-4 xs:grid-cols-2 sm:gap-6 md:gap-y-8 lg:gap-x-8">

            <x-user.services.service-card title="{{ __('pages/services.Дополнительное утепление сруба') }}">
                {{ __('pages/services.Описание утепления') }}
            </x-user.services.service-card>

            <x-user.services.service-card title="{{ __('pages/services.Монтаж полов и межэтажных перекрытий') }}">
                {{ __('pages/services.Описание монтажа полов') }}
            </x-user.services.service-card>

            <x-user.services.service-card title="{{ __('pages/services.Обсады, наличники, лестницы и др.') }}">
                {{ __('pages/services.Описание обсад и лестниц') }}
            </x-user.services.service-card>

            <x-user.services.service-card title="{{ __('pages/services.Шлифовка и окрашивание рубленых стен') }}">
                {{ __('pages/services.Описание шлифовки') }}
            </x-user.services.service-card>

        </div>

    </section>

    <livewire:pageform />

    @include('user.partials.delivery')

    @include('user.partials.call-form')

    @include('user.partials.articles')

</x-user-layout>
