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
}" x-init="setInterval(() => {currentSlide = (currentSlide + 1) % totalSlides}, 3000)" class="relative overflow-clip">

    <div :style="{ transform: `translateX(-${currentSlide * 100}%)` }"
        class="flex items-center transition-transform duration-500" @touchstart="startSwipe($event)"
        @touchmove="moveSwipe($event)" @touchend="endSwipe()">

        @for ($i = 0; $i < $SLIDES; $i++)
            <div class="basis-full shrink-0">
                <img class="object-cover object-center w-full h-full" src="{{ asset('images/home/home-carousel-'. $i + 1 .'.webp') }}"
                    alt="Home carousel">
            </div>
        @endfor
    </div>

    <div
        class="absolute items-center justify-between hidden h-10 sm:flex top-1/2 left-4 lg:right-32 xl:left-40 right-4 lg:left-32 xl:right-40">
        <button @click="currentSlide = currentSlide === 0 ? totalSlides - 1 : currentSlide - 1"
            class="flex items-center justify-center w-10 p-2 rounded-md aspect-square bg-light-gray">
            <img class="h-5 mr-0.5" src="{{ asset('images/svgs/arrow-left.svg') }}" alt="">
        </button>

        <button @click="currentSlide = (currentSlide + 1) % totalSlides"
            class="flex items-center justify-center w-10 p-2 rounded-md aspect-square bg-light-gray">
            <img class="h-5 ml-0.5" src="{{ asset('images/svgs/arrow-right.svg') }}" alt="">
        </button>
    </div>

    <div class="flex items-center justify-center gap-2 mt-4 sm:gap-4 sm:absolute sm:bottom-8 sm:left-0 sm:right-0">
        <template x-for="(i, index) in [...Array(totalSlides).keys()]">
            <button @click="currentSlide = index" :aria-current="currentSlide === i" class="rounded-full aspect-square"
                :class="currentSlide === index ? 'bg-dim-gray w-2 sm:bg-light-gray sm:w-4' :
                    'bg-light-gray w-1.5 sm:bg-dim-gray sm:w-2'"></button>
        </template>
    </div>

</section>
