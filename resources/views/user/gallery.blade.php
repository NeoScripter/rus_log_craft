<x-user-layout>

    <x-user.breadcrumbs page_name="Галерея проектов" />

    <div class="section-primary">

        <h1 class="text-4xl titles md:text-6xl">Галерея проектов</h1>

    </div>

    <section class="section-primary" x-data="{ showPopup: false, img: '' }">

        <div @keydown.escape.window="showPopup = false" @click="showPopup = false" x-show="showPopup"
        x-transition:enter="transition ease duration-300"
        x-transition:enter-start="opacity-0 scale-0"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-0"
        tabindex="-1" class="fixed top-0 left-0 right-0 z-50 flex items-center justify-center w-full h-full max-h-full overflow-x-hidden overflow-y-auto bg-black/50 md:inset-0">
            <img class="object-contain h-4/5" :src="img" alt="">
        </div>

        <div class="grid gap-6 sm:gap-8 md:gap-y-10 md:gap-x-6 lg:gap-x-10 md:grid-cols-2">

            @for ($i = 0; $i < 8; $i++)
                <div class="p-4 border border-gray-200 rounded-md">
                    <x-user.gallery-carousel :total_slides="4" image_path="images/gallery/gallery-" />

                    <p class="mt-2 text-xl font-bold md:text-2xl md:mt-4 text-balance">Белоснежные деревянные коттедж и
                        баня из лафета - внешний вид и интерьеры</p>
                </div>
            @endfor

        </div>


    </section>

    <div class="section-primary">

        <a class="block text-center btn-primary" href="https://spbrb.ru/gallery_main.htm">Смотреть больше фото</a>
    </div>

    @include('user.partials.call-form', ['class' => 'aligned-mb'])

</x-user-layout>
