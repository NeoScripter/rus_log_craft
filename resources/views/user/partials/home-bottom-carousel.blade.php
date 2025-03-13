<section class="section-primary overflow-clip">

    <div class="lg:flex lg:items-center lg:justify-between">
        <h2 class="text-2xl titles md:text-4xl"><a href="/gallery" class="golden-title">{{ __('partials/home_bottom_carousel.Галерея') }}</a> {{ __('partials/home_bottom_carousel.домов') }}</h2>

        <a href="/catalog" class="hidden text-center lg:block btn-primary w-100">{{ __('partials/home_bottom_carousel.СМОТРЕТЬ ПРОЕКТЫ ДОМОВ') }}</a>
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
                    <div class="relative basis-3/4 home-slide shrink-0 after:absolute after:inset-0 after:transition-colors after:duration-500" :class="currentSlide !== {{ $i }} ? ' after:bg-white/70' : 'after:bg-transparent'">
                        <img class="object-cover object-center w-full h-full"
                            src="{{ asset('images/home/home-carousel-'. $i + 1 .'.webp') }}" alt="Home carousel">
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
                        this.calculateDimensions();
                        this.updateOffset();

                        window.addEventListener('resize', () => {
                            this.calculateDimensions();
                            this.updateOffset();
                        });
                    },

                    calculateDimensions() {
                        const slide = document.querySelector('.home-slide');
                        const container = slide.parentNode;
                        this.slideWidth = slide.offsetWidth;
                        this.gap = parseFloat(getComputedStyle(container).gap) || 0;

                        this.containerWidth = container.offsetWidth;
                    },

                    updateOffset() {
                        const slideWidthWithGap = this.slideWidth + this.gap;

                        this.offset = ((this.currentSlide * slideWidthWithGap) - ((this.containerWidth - this.slideWidth) / 2)) * -1;

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

    <a href="" class="block w-full text-center md:w-100 md:mx-auto btn-primary lg:hidden">{{ __('СМОТРЕТЬ ПРОЕКТЫ
        ДОМОВ') }}</a>

</section>
