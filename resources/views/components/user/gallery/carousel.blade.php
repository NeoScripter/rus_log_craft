@props(['images' => []])

<div x-data="{
    currentSlide: 0,
    totalSlides: {{ count($images) }},
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
        class="flex items-center transition-transform duration-500" @touchstart="startSwipe($event)"
        @touchmove="moveSwipe($event)" @touchend="endSwipe()">

        @foreach ($images as $image)
            <div class="shrink-0 basis-full">
                <img @click="img = $el.src; showPopup = true"
                    class="object-cover object-center w-full h-full cursor-pointer"
                    src="{{ Storage::url($image->path) }}"
                    alt="{{ __('components.Фото деревянного дома') }}">
            </div>
        @endforeach
    </div>

    <div class="absolute items-center justify-between hidden h-10 left-4 right-4 top-1/2 sm:flex">
        <button @click="currentSlide = currentSlide === 0 ? totalSlides - 1 : currentSlide - 1"
            class="flex items-center justify-center w-10 p-2 rounded-md aspect-square bg-light-gray">
            <img class="mr-0.5 h-5" src="{{ asset('images/svgs/arrow-left.svg') }}" alt="">
        </button>

        <button @click="currentSlide = (currentSlide + 1) % totalSlides"
            class="flex items-center justify-center w-10 p-2 rounded-md aspect-square bg-light-gray">
            <img class="ml-0.5 h-5" src="{{ asset('images/svgs/arrow-right.svg') }}" alt="">
        </button>
    </div>

    <div class="flex items-center justify-center gap-2 mt-4 sm:gap-4 md:absolute md:bottom-8 md:left-0 md:right-0">
        <template x-for="(i, index) in [...Array(totalSlides).keys()]">
            <button @click="currentSlide = index" :aria-current="currentSlide === i" class="rounded-full aspect-square"
                :class="currentSlide === index ? 'bg-dim-gray w-2 sm:bg-light-gray sm:w-4' :
                    'bg-light-gray w-1.5 sm:bg-dim-gray sm:w-2'"></button>
        </template>
    </div>

</div>
