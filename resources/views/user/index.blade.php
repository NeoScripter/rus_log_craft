<x-user-layout>

    <section class="section-primary">

        <div class="flex flex-col gap-10 sm:flex-row">
            <h1
                class="block text-3xl font-bold tracking-wide uppercase leading-[120%] text-balance sm:flex-1 md:text-[4rem]">
                Проектирование и строительство домов и бань из бревна</h1>

            <div class="ml-auto w-72 sm:w-auto sm:basis-1/2 md:basis-1/3 lg:basis-1/4">
                <img class="w-full rounded-lg" src="{{ asset('images/home/hero-top.webp') }}" alt="Top of a wooden arc">
                <p class="text-sm text-light-gray md:text-base">Уют и экологичность в домах из натурального бревна. <br>
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
                    <div class="text-xl font-bold text-center md:text-2xl">{{ $name }}</div>
                </a>
            @endforeach
        </div>

    </section>

    @php
        $SLIDES = 5;
    @endphp

    <section x-data="{
        currentSlide: 0,
        totalSlides: {{ $SLIDES }},
        touchStartX: 0,
        touchEndX: 0,
        startSwipe(event) {
            if (event.target.tagName === 'A' || event.target.closest('a')) {
                return;
            }
            this.touchStartX = event.touches[0].clientX;
        },

        moveSwipe(event) {
            if (event.target.tagName === 'A' || event.target.closest('a')) {
                return;
            }
            this.touchEndX = event.touches[0].clientX;
        },

        endSwipe() {
            const swipeDistance = this.touchStartX - this.touchEndX;

            if (swipeDistance > 100) {
                this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
            } else if (swipeDistance < -100) {
                this.currentSlide = this.currentSlide === 0 ? this.totalSlides - 1 : this.currentSlide - 1;
            }

            this.touchStartX = 0;
            this.touchEndX = 0;
        },
    }" class="relative overflow-clip">

        <div :style="{ transform: `translateX(-${currentSlide * 100}%)` }"
            class="flex items-center transition-transform duration-500"
            @touchstart="startSwipe($event)"
            @touchmove="moveSwipe($event)"
            @touchend="endSwipe()">

            @for ($i = 0; $i < $SLIDES; $i++)
                <div class="basis-full shrink-0">
                    <img class="object-cover object-center w-full h-full"
                        src="{{ asset('images/home/home-carousel.webp') }}" alt="Home carousel">
                </div>
            @endfor
        </div>

        <div class="absolute items-center justify-between hidden h-10 sm:flex top-1/2 left-4 lg:right-32 xl:left-40 right-4 lg:left-32 xl:right-40">
            <button
                @click="currentSlide = currentSlide === 0 ? totalSlides - 1 : currentSlide - 1"
                class="flex items-center justify-center w-10 p-2 rounded-md aspect-square bg-light-gray">
                <img class="h-5 mr-0.5" src="{{ asset('images/svgs/arrow-left.svg')}}" alt="">
            </button>

            <button
                @click="currentSlide = (currentSlide + 1) % totalSlides"
                class="flex items-center justify-center w-10 p-2 rounded-md aspect-square bg-light-gray">
                <img class="h-5 ml-0.5" src="{{ asset('images/svgs/arrow-right.svg')}}" alt="">
            </button>
        </div>

        <div class="flex items-center justify-center gap-2 mt-4 sm:gap-4 sm:absolute sm:bottom-8 sm:left-0 sm:right-0">
            <template x-for="(i, index) in [...Array(totalSlides).keys()]">
                <button
                    @click="currentSlide = index"
                    :aria-current="currentSlide === i"
                    class="rounded-full aspect-square"
                    :class="currentSlide === index ? 'bg-dim-gray w-2 sm:bg-light-gray sm:w-4' : 'bg-light-gray w-1.5 sm:bg-dim-gray sm:w-2'"
                ></button>
            </template>
        </div>

    </section>



    @isset($projects)
        @foreach ($projects as $project)
            <div>
                {{ $project->name }}
                {{ $project->image }}
                {{ $project->volume }}
                {{ $project->article }}
                {{ $project->floors }}
                {{ $project->rooms }}
                {{ $project->link }}
            </div>
        @endforeach

    @endisset

</x-user-layout>
