<x-user-layout>

    <section class="section-primary">

        <div class="flex flex-col gap-10 sm:flex-row">
            <h1 class="block text-3xl titles text-balance sm:flex-1 md:text-[4rem]">
                Проектирование и строительство домов и бань из бревна</h1>

            <div class="ml-auto w-72 sm:w-auto sm:basis-1/2 md:basis-1/3 lg:basis-1/4">
                <img class="w-full rounded-lg" src="{{ asset('images/home/hero-top.webp') }}" alt="Top of a wooden arc">
                <p class="text-sm text-dim-gray md:text-base">Уют и экологичность в домах из натурального бревна. <br>
                    Ручная работа и индивидуальный подход в каждом проекте.</p>
            </div>

        </div>

        <div class="flex flex-col gap-4 my-6 sm:flex-row md:gap-10">
            <button class="flex-1 btn-primary">наш каталог проектов</button>
            <button class="flex-1 btn-secondary">заказать звонок</button>
        </div>

        <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-4 md:gap-6 lg:gap-8">

            @php
                $links = ['#', '#', '#', '#'];
                $names = ['Дома из бревна', 'Дома с баней', 'Бани из бревна', 'Хозпостройки'];
            @endphp

            @foreach ($names as $idx => $name)
                <a href="{{ $links[$idx] }}" class="flex flex-col gap-4 px-4 py-6 bg-light-gray">
                    <img class="flex-1 object-center" src="{{ asset('images/home/hero-' . $idx + 1 . '.webp') }}"
                        alt="{{ $name }}">
                    <div class="text-xl font-bold text-center text-dark-black md:text-2xl">{{ $name }}</div>
                </a>
            @endforeach
        </div>

    </section>

    @include('user.partials.home-carousel')

    <section class="relative pb-6 section-primary sm:pb-10">

        <div class="absolute inset-0 bg-left-top bg-no-repeat bg-cover -top-10 bg-light-gray -z-10"
            style="background-image: url({{ asset('images/svgs/green-circle.svg') }})"></div>

        <h2 class="text-xl uppercase titles md:text-3xl">новые проекты</h2>

        @isset($projects)
            <div class="grid my-6 sm:my-10 gap-y-6 gap-x-4 sm:grid-cols-2 md:gap-x-6 lg:gap-x-10 md:grid-cols-3">
                @foreach ($projects as $project)
                    <div class="flex flex-col bg-white rounded-lg overflow-clip">
                        <div class="relative h-72">

                            <span
                                class="absolute top-0 right-0 block px-6 py-3 text-xl font-bold bg-white rounded-md text-green-primary">
                                {{ $project->volume }} м²
                            </span>

                            <img class="object-cover object-center w-full h-full" src="{{ Storage::url($project->image) }}"
                                alt="{{ $project->name }}">
                        </div>

                        <div class="flex flex-col flex-1 gap-3 p-4">
                            <div class="text-xl titles">{{ $project->name }}</div>
                            <span class="block mt-auto text-dim-gray">{{ $project->article }}</span>

                            <div class="flex items-center justify-between gap-1">

                                <div class="flex items-center flex-1 gap-2">
                                    <img class="w-6 aspect-square" src="{{ asset('images/svgs/volume.svg') }}"
                                        alt="Volume svg">
                                    {{ $project->volume }} м²
                                </div>

                                <div class="flex items-center flex-1 gap-2">
                                    <img class="w-6 aspect-square" src="{{ asset('images/svgs/floors.svg') }}"
                                        alt="Volume svg">
                                    {{ $project->floors . $project->floors > 1 ? 'этажа' : 'этаж' }}
                                </div>

                                <div class="flex items-center flex-1 gap-2">
                                    <img class="w-6 aspect-square" src="{{ asset('images/svgs/rooms.svg') }}"
                                        alt="Volume svg">
                                    {{ $project->rooms }}
                                </div>


                            </div>

                            <a href="{{ $project->link }}" class="block mt-1 text-center btn-secondary">Подробнее</a>
                        </div>


                    </div>
                @endforeach
            </div>

        @endisset

        <a href="" class="block w-full text-center btn-primary"> Смотреть все проекты</a>

    </section>

    <section class="section-primary">

        <div class="md:flex sm:py-16 md:gap-10">

            <div class="relative mb-8 md:mb-0 md:basis-2/3 lg:basis-1/2">
                <h2 class="absolute inset-0 text-2xl uppercase titles md:text-4xl sm:w-3/4 md:w-full md:max-w-154">Если
                    вы точно знаете, как должен выглядеть ваш будущий дом, мы знаем, как его построить.</h2>

                <div class="ml-auto w-68 h-60 md:h-104 md:w-114">
                    <img class="object-contain object-center w-full h-full"
                        src="{{ asset('images/home/house-icon.webp') }}" alt="">
                </div>
            </div>

            <div class="md:basis-1/3 lg:basis-1/2">
                <p class="mb-4">Мы разрабатываем уникальные проекты из бревна, учитывая все ваши требования и
                    пожелания.</p>

                <p>Наши квалифицированные архитекторы и дизайнеры сопровождают вас на каждом этапе, чтобы ваш дом был
                    оригинальным, удобным и отражал вашу индивидуальность. Мы применяем современные технологии и
                    качественные материалы, чтобы обеспечить долговечность и эстетическую привлекательность вашего
                    жилья.</p>

                <div class="my-6 text-xl font-bold text-dark-black">Разработка проекта БЕСПЛАТНО при заказе сруба</div>

                <button class="block w-full text-center btn-secondary">РАССЧИТАТЬ ПРОЕКТ</button>
            </div>

        </div>


    </section>

    <section class="section-primary">

        <h2 class="w-4/5 mb-6 text-2xl uppercase sm:w-full titles md:text-4xl md:w-5/6 lg:w-3/4">Более 20 лет мы
            занимаемся <span class="golden-title">проектированием</span> и <span
                class="golden-title">строительством</span> элитных домов и бань ручной рубки</h2>

        <div class="md:flex md:gap-10 md:justify-between">

            <div class="w-4/5 mb-16 md:mb-0 sm:w-1/2 md:basis-1/2 md:max-w-120 md:flex md:flex-col md:justify-between">
                <img class="mb-6" src="{{ asset('images/home/intro-1.webp') }}" alt="">
                <p class="block font-medium">Производим дома на нашей площадке в Ленинградской области, затем собираем
                    на участке Заказчика.</p>
            </div>

            <div class="-mx-4 sm:mx-0 md:max-w-180">

                @include('user.partials.gallery-carousel')

            </div>

        </div>


    </section>

    <section class="py-10 lg:py-16 section-primary"
        style="background: linear-gradient(180deg, rgba(229, 227, 219, 0.20) 0%, #E5E3DB 100%);">

        <div class="sm:flex sm:gap-6 md:gap-10">

            <div class="sm:flex sm:flex-col sm:justify-between sm:w-90 lg:w-125">
                <h2 class="text-4xl titles sm:text-2xl md:text-4xl">мы <br> предлагаем</h2>
                <p class="my-6 text-xl font-semibold">стройте с легкостью</p>
                <button class="hidden btn-primary sm:block md:max-w-[25rem]">смотреть все услуги</button>
            </div>

            <ul class="space-y-4 md:flex-1">

                @php
                    $titles = [
                        'Проектирование',
                        'Дома и бани "под ключ',
                        'Изготовление срубов',
                        'Строительство фундаментов',
                        'Возведение крыш',
                        'Беседки, столы и скамейки',
                    ];
                @endphp

                @for ($i = 0; $i < count($titles); $i++)
                    <li class="rounded-xl bg-[#FAFAFA] md:flex md:gap-8">

                        <div class="aspect-[3/1] md:aspect-auto md:flex-1 h-auto relative ">
                            <img class="absolute inset-0 object-cover object-center w-full h-full rounded-xl"
                                src="{{ asset('images/home/home-services-' . $i + 1 . '.webp') }}" alt="">
                        </div>

                        <div class="p-4 md:flex-1">
                            <p class="mb-2 text-xl font-bold">{{ $titles[$i] }}</p>
                            <p class="mb-3 text-dim-gray">Архитекторы компании воплотят ваши идеи в качественных
                                проектах бревенчатых коттеджей и бань</p>

                            <a href=""
                                class="grid content-center w-8 h-8 p-2 ml-auto rounded-md bg-green-primary">
                                <img class="w-5 h-5" src="{{ asset('images/svgs/arrow-down-right.svg') }}"
                                    alt="">
                            </a>
                        </div>

                    </li>
                @endfor
            </ul>

            <button class="w-full mt-6 btn-primary sm:hidden">смотреть все услуги</button>

        </div>

    </section>

    @include('user.partials.home-quality')

    <section class="py-8 section-primary md:py-12 lg:py-15"
        style="background: linear-gradient(180deg, rgba(229, 233, 236, 0.00) 0%, #E5E9EC 100%);">

        <div class="md:flex md:gap-10 lg:gap-32">

            <div class="md:flex-1 md:flex md:flex-col">
                <p class="mb-4 text-2xl titles md:mb-6 md:text-4xl">Хотите узнать больше о строительстве вашего будущего
                    дома?</p>
                <p class="mb-8 md:mb-6">Оставьте свои контактные данные, и наш специалист свяжется с вами в ближайшее
                    время. Ответим на все ваши вопросы и поможем сделать первый шаг к уютному и экологичному дому из
                    бревна!</p>

                <div class="hidden md:block md:mt-auto md:max-w-140 md:flex-1">
                    <img class="object-cover object-center w-full h-full"
                        src="{{ asset('images/home/webform.webp') }}" alt="">
                </div>
            </div>

            <form action="" class="space-y-4 md:flex-1 lg:space-y-6">

                <div class="">
                    <label for="name" class="sr-only">Ваше ФИО</label>
                    <input type="text" id="name"
                        class="w-full px-6 py-4 bg-transparent border rounded-md border-dim-gray"
                        placeholder="Ваше ФИО" required>
                </div>

                <div class="">
                    <label for="phone" class="sr-only">Телефон для связи</label>
                    <input type="tel" id="phone"
                        class="w-full px-6 py-5 bg-transparent border rounded-md border-dim-gray"
                        placeholder="Телефон для связи" required>
                </div>

                <div class="">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" id="email"
                        class="w-full px-6 py-5 bg-transparent border rounded-md border-dim-gray" placeholder="E-mail"
                        required>
                </div>

                <div class="">
                    <label for="message" class="sr-only">Сообщение</label>
                    <textarea id="message" rows="4" class="w-full px-6 py-5 bg-transparent border rounded-md border-dim-gray"
                        placeholder="Сообщение" required></textarea>
                </div>

                <div>
                    <div class="flex items-start gap-6 me-4">
                        <input checked id="checkbox" type="checkbox" value=""
                            class="w-6 h-6 bg-gray-100 border-gray-300 rounded-sm text-green-primary focus:ring-green-primary focus:ring-2">
                        <label for="checkbox" class="text-sm font-bold text-gray-900">Нажимая кнопку отправить, вы
                            соглашаетесь с Политикой в отношении обработки персональных данных , а так же с обработкой
                            персональных данных</label>
                    </div>
                </div>

                <button class="w-full btn-primary">Отправить</button>

            </form>

            <div class="mt-8 md:hidden">
                <img src="{{ asset('images/home/webform.webp') }}" alt="">
            </div>

        </div>

    </section>

    @include('user.partials.home-accordion')

    <section class="lg:px-32 xl:px-40">

        <div
            class="relative flex flex-col pt-8 sm:py-8 md:py-14 bg-[#F6F5EF] gap-6 sm:flex-row sm:flex-wrap sm:items-start sm:justify-between sm:ml-auto md:flex-nowrap md:gap-10 lg:justify-end px-4">

            <div class="text-2xl titles sm:basis-full md:basis-[50%] md:text-4xl lg:hidden">Дом под ключ </div>

            <p class="z-10 sm:basis-full md:hidden">Свяжитесь с нами сегодня, и мы начнем создавать ваш идеальный дом!
            </p>

            <p class="z-10 sm:basis-full md:hidden">Закажите строительство под ключ и наслаждайтесь уютом и красотой
                натурального дерева.</p>

            <button class="!bg-[#F6F5EF] btn-secondary z-10 sm:basis-[50%] md:basis-[60%] md:hidden">Заказать
                звонок</button>

            <div
                class="hidden md:flex md:flex-col md:gap-6 lg:gap-4 basis-[40%] ml-auto lg:basis-[30%] xl:basis-[28rem] z-10">
                <div class="hidden text-4xl titles lg:block">Дом под ключ </div>

                <p class="">Свяжитесь с нами сегодня, и мы начнем создавать ваш идеальный дом!</p>

                <p class="">Закажите строительство под ключ и наслаждайтесь уютом и красотой натурального дерева.
                </p>

                <button class="!bg-[#F6F5EF] btn-secondary z-10 w-full lg:mt-2">Заказать звонок</button>
            </div>

            <ul
                class="grid gap-6 sm:basis-[max-content] sm:mr-8 md:mr-0 sm:ml-4 md:basis-[50%] lg:basis-[30%] xl:basis-[24rem]">
                @php
                    $turnkey_items = [
                        'Проектирование объекта',
                        'Согласование с заказчиком',
                        'Подписание договора',
                        'Доставка стройматериалов',
                        'Строительство под ключ',
                        'прием объекта заказчиком',
                    ];
                @endphp

                @for ($i = 0; $i < count($turnkey_items); $i++)
                    <li class="inline-flex items-center gap-2">
                        <img src="{{ asset('images/svgs/turnkey/turnkey-' . $i + 1 . '.svg') }}" alt=""
                            class="w-8 h-8">
                        <div class="font-semibold uppercase">{{ $turnkey_items[$i] }}</div>
                    </li>
                @endfor
            </ul>

            <div
                class="sm:absolute sm:bottom-1 lg:bottom-[-4%] sm:left-0 sm:w-104 sm:h-68 lg:h-84 lg:w-120 xl:w-164 xl:bottom-0 xl:h-auto">
                <img src="{{ asset('images/home/home-turnkey.webp') }}" alt="">
            </div>

        </div>

    </section>

    <section class="section-primary overflow-clip">

        <div class="lg:flex lg:items-center lg:justify-between">
            <h2 class="text-2xl titles md:text-4xl"><span class="golden-title">Галерея</span> домов</h2>

            <a href="" class="hidden text-center lg:block btn-primary w-100">СМОТРЕТЬ ПРОЕКТЫ ДОМОВ</a>
        </div>

        <div class="my-6 lg:mt-8 lg:mb-0">


            @php
                $SLIDES = 5;
            @endphp

            <div x-data="carousel({ totalSlides: {{ $SLIDES }} })" class="relative">
                <!-- Carousel Track -->
                <div :style="{ transform: `translateX(${offset}px)` }"
                    class="flex items-center gap-2 transition-transform duration-500 md:gap-14" @touchstart="startSwipe($event)"
                    @touchmove="moveSwipe($event)" @touchend="endSwipe()">
                    @for ($i = 0; $i < $SLIDES; $i++)
                        <div class="relative basis-3/4 home-slide shrink-0" :class="currentSlide !== {{ $i }} ? 'after:absolute after:inset-0 after:bg-white/70' : ''">
                            <img class="object-cover object-center w-full h-full"
                                src="{{ asset('images/home/home-carousel.webp') }}" alt="Home carousel">
                        </div>
                    @endfor
                </div>

                <!-- Navigation Arrows -->
                <div class="absolute items-center justify-between hidden md:flex top-1/2 left-4 right-4 sm:left-[8.5%] sm:right-[8.5%] lg:left-[9%] lg:right-[9%] xl:left-[9.5%] xl:right-[9.5%]">
                    <button @click="prevSlide"
                        class="flex items-center justify-center w-10 p-2 rounded-md aspect-square bg-light-gray">
                        <img class="h-5" src="{{ asset('images/svgs/arrow-left.svg') }}" alt="">
                    </button>

                    <button @click="nextSlide"
                        class="flex items-center justify-center w-10 p-2 rounded-md aspect-square bg-light-gray">
                        <img class="h-5" src="{{ asset('images/svgs/arrow-right.svg') }}" alt="">
                    </button>
                </div>

                <!-- Pagination Dots -->
                <div class="flex items-center justify-center gap-2 mt-4">
                    <template x-for="(slide, index) in totalSlides" :key="index">
                        <button @click="goToSlide(index)"
                            :class="currentSlide === index ? 'bg-dim-gray w-2.5' :
                                'bg-light-gray w-2'"
                            class="rounded-full aspect-square"></button>
                    </template>
                </div>
            </div>

            <script>
                function carousel({
                    totalSlides
                }) {
                    return {
                        totalSlides,
                        currentSlide: 2,
                        slideWidth: 0,
                        containerWidth: 0,
                        gap: 0,
                        offset: 0,
                        touchStartX: 0,
                        touchEndX: 0,

                        init() {
                            // Calculate slide dimensions on initialization and resize
                            this.calculateDimensions();
                            this.updateOffset();

                            // Recalculate dimensions and offsets on window resize
                            window.addEventListener('resize', () => {
                                this.calculateDimensions();
                                this.updateOffset();
                            });
                        },

                        calculateDimensions() {
                            // Get a single slide to measure its width and the gap between slides
                            const slide = document.querySelector('.home-slide');
                            const container = slide.parentNode;
                            this.slideWidth = slide.offsetWidth;
                            this.gap = parseFloat(getComputedStyle(container).gap) || 0;

                            this.containerWidth = container.offsetWidth;
                        },

                        updateOffset() {
                            // Calculate the width of a single slide including the gap
                            const slideWidthWithGap = this.slideWidth + this.gap;

                            // Adjust the offset to center the current slide
                            this.offset = ((this.currentSlide * slideWidthWithGap) - ((this.containerWidth - this.slideWidth) / 2)) * -1;

                            // Special case for the first slide to ensure it is properly centered
                            if (this.currentSlide === 0) {
                                this.offset = (this.containerWidth - this.slideWidth) / 2;
                            }
                        },

                        nextSlide() {
                            this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
                            this.updateOffset();
                        },

                        prevSlide() {
                            this.currentSlide =
                                this.currentSlide === 0 ? this.totalSlides - 1 : this.currentSlide - 1;
                            this.updateOffset();
                        },

                        goToSlide(index) {
                            this.currentSlide = index;
                            this.updateOffset();
                        },

                        startSwipe(event) {
                            this.touchStartX = event.touches[0].clientX;
                        },

                        moveSwipe(event) {
                            this.touchEndX = event.touches[0].clientX;
                        },

                        endSwipe() {
                            const swipeDistance = this.touchStartX - this.touchEndX;

                            if (swipeDistance > 100) {
                                this.nextSlide();
                            } else if (swipeDistance < -100) {
                                this.prevSlide();
                            }

                            this.touchStartX = 0;
                            this.touchEndX = 0;
                        },
                    };
                }
            </script>

        </div>

        <a href="" class="block w-full text-center md:w-100 md:mx-auto btn-primary lg:hidden">СМОТРЕТЬ ПРОЕКТЫ
            ДОМОВ</a>

    </section>

</x-user-layout>
