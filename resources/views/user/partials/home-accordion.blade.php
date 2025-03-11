<section class="section-primary">

    <h2 class="text-2xl titles text-balance md:text-4xl">
        {{ __('partials/home_accordion.6 причин выбрать бревенчатый дом') }} <br>
        <a href="{{ route('user.tech') }}" class="mb-6 golden-title">
            {{ __('partials/home_accordion.ручной рубки') }}
        </a>
    </h2>

    <div class="md:flex md:items-end md:justify-between md:gap-10">

        @php
            $questions = [
                __('partials/home_accordion.Эстетика и уникальность'),
                __('partials/home_accordion.Экологичность'),
                __('partials/home_accordion.Энергоэффективность'),
                __('partials/home_accordion.Прочность и долговечность'),
                __('partials/home_accordion.Индивидуальность'),
                __('partials/home_accordion.Психологический эффект'),
            ];

            $answers = [
                __('partials/home_accordion.дома из ручной рубки обладают неповторимым характером'),
                __('partials/home_accordion.строительство осуществляется с использованием натуральных материалов'),
                __('partials/home_accordion.благодаря толстым стенам из натурального дерева'),
                __('partials/home_accordion.древесина, используемая при строительстве домов из ручной рубки'),
                __(
                    'partials/home_accordion.возможность ручной обработки бревен позволяет создавать уникальные дизайны',
                ),
                __('partials/home_accordion.благодаря естественной текстуре и аромату дерева'),
            ];
        @endphp

        <div class="my-6 space-y-4 md:mb-0 md:basis-[60%] lg:basis-1/2">
            @for ($i = 0; $i < count($questions); $i++)
                <div x-data="{ expanded: false }"
                    class="rounded-md border border-[#E5E3DB] transition-colors duration-300 focus-within:border-golden-primary hover:border-golden-primary">
                    <button
                        class="flex items-center justify-between w-full p-6 transition-colors outline-none durat ion-300 group"
                        @click="expanded = !expanded">

                        <div
                            class="font-semibold group-hover:text-golden-primary group-focus-visible:text-golden-primary">
                            {{ $questions[$i] }}</div>

                        <div class="w-4 h-4 transition-transform duration-500" :class="expanded ? '-rotate-180' : ''">
                            <svg width="100%" height="100%" viewBox="0 0 18 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="arrow">
                                    <path id="Vector 12" d="M1 1.5L17 17.5M17 17.5V1.5M17 17.5H1" stroke-width="2"
                                        class="stroke-[#212125] transition-colors duration-300 group-hover:stroke-golden-primary group-focus-visible:stroke-golden-primary" />
                                </g>
                            </svg>

                        </div>
                    </button>
                    <div x-show="expanded" x-transition:enter="transition-all duration-500 ease-in-out"
                        x-transition:enter-start="grid-rows-[0fr]" x-transition:enter-end="grid-rows-[1fr]"
                        x-transition:leave="transition-all duration-500 ease-in"
                        x-transition:leave-start="grid-rows-[1fr]" x-transition:leave-end="grid-rows-[0fr]" x-cloak
                        class="grid p-6 pt-0 text-dim-gray">
                        <div class="overflow-hidden">{{ $answers[$i] }}</div>
                    </div>
                </div>
            @endfor
        </div>

        <div class="max-w-100 md:max-w-176 md:basis-[40%] lg:basis-1/2">
            <img class="object-cover object-center w-full h-full" src="{{ asset('images/home/home-accordion.webp') }}"
                alt="{{ __('Фото деревянного дома') }}">
        </div>
    </div>

</section>
