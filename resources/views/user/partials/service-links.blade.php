<section class="py-10 lg:py-16 section-primary"
    style="background: linear-gradient(180deg, rgba(229, 227, 219, 0.20) 0%, #E5E3DB 100%);">

    <div class="sm:flex sm:gap-6 md:gap-10">

        <div class="sm:flex sm:flex-col sm:justify-between sm:w-90 lg:w-125">
            <h2 class="text-4xl titles sm:text-2xl md:text-4xl">
                {{ __('partials/service_links.мы предлагаем') }}
            </h2>
            <p class="my-6 text-xl font-semibold">
                {{ __('partials/service_links.стройте с легкостью') }}
            </p>
            <a href="{{ route('user.services') }}"
                class="hidden text-center btn-primary sm:block md:max-w-[25rem]">
                {{ __('partials/service_links.смотреть все услуги') }}
            </a>
        </div>

        <ul class="space-y-4 md:flex-1">

            @php
                $titles = [
                    __('partials/service_links.Проектирование'),
                    __('partials/service_links.Дома и бани "под ключ"'),
                    __('partials/service_links.Изготовление срубов'),
                    __('partials/service_links.Строительство фундаментов'),
                    __('partials/service_links.Возведение крыш'),
                    __('partials/service_links.Беседки, столы и скамейки'),
                ];

                $paths = [
                    '/services/#design',
                    '/services/#saunas',
                    '/services/#huts',
                    '/services/#foundations',
                    '/services/#roofs',
                    '/services/#benches',
                ];
            @endphp

            @for ($i = 0; $i < count($titles); $i++)
                <li class="block">

                    <a href="{{ $paths[$i] }}"
                        class="block rounded-xl bg-[#F6F5EF] md:flex md:gap-8 transition-colors hover:bg-[#FAFAFA] group duration-300">
                        <div class="aspect-[3/1] md:aspect-auto md:flex-1 h-auto relative ">
                            <img class="absolute inset-0 object-cover object-center w-full h-full rounded-xl"
                                src="{{ asset('images/home/home-services-' . $i + 1 . '.webp') }}" alt="">
                        </div>
                        <div class="p-4 md:flex-1">
                            <p class="mb-2 text-xl font-bold">{{ $titles[$i] }}</p>
                            <p class="mb-3 text-dim-gray">{{ __('partials/service_links.Архитекторы компании воплотят ваши идеи') }}</p>
                            <div
                                class="grid content-center w-8 h-8 p-2 ml-auto transition-colors duration-300 rounded-md bg-green-primary group-hover:bg-golden-primary">
                                <img class="w-5 h-5" src="{{ asset('images/svgs/arrow-down-right.svg') }}"
                                    alt="">
                            </div>
                        </div>
                    </a>

                </li>
            @endfor
        </ul>

        <a href="{{ route('user.services') }}" class="block w-full mt-6 text-center btn-primary sm:hidden">{{ __('partials/service_links.смотреть все услуги') }}</a>

    </div>

</section>
