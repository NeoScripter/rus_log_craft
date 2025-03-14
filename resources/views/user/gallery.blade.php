<x-user-layout>

    <x-user.breadcrumbs page_name="{{ __('pages/gallery.Галерея проектов') }}" />

    <div class="section-primary">

        <h1 class="text-4xl titles md:text-6xl">
            {{ __('pages/gallery.Галерея проектов') }}
        </h1>

    </div>

    <section class="section-primary" x-data="{ showPopup: false, img: '' }">

        <div @keydown.escape.window="showPopup = false" @click="showPopup = false" x-show="showPopup"
            x-transition:enter="transition ease-in-out duration-500" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-500"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 flex items-center justify-center w-full h-full max-h-full overflow-x-hidden overflow-y-auto bg-black/50 md:inset-0">
            <img x-show="showPopup" x-transition:enter="transition ease-in-out duration-500"
                x-transition:enter-start="scale-0" x-transition:enter-end="scale-100"
                x-transition:leave="transition ease-in-out duration-500" x-transition:leave-start="scale-100"
                x-transition:leave-end="scale-0" class="object-contain h-4/5" :src="img" alt="">
        </div>

        <div class="grid gap-6 sm:gap-8 md:grid-cols-2 md:gap-x-6 md:gap-y-10 lg:gap-x-10">

            @isset($galleries)
                @foreach ($galleries as $gallery)
                    <div class="p-4 border border-gray-200 rounded-md">
                        <x-user.gallery.carousel :images="$gallery->images" />

                        <p class="mt-2 text-xl font-bold text-balance md:mt-4 md:text-2xl">
                            {{ $gallery->{'name_' . app()->getLocale()} }}</p>
                    </div>
                @endforeach
            @endisset

        </div>


    </section>

    <div class="section-primary">

        <a class="block text-center btn-primary"
            href="https://spbrb.ru/gallery_main.htm" target="_blank">{{ __('pages/gallery.Смотреть больше фото') }}</a>
    </div>

    @include('user.partials.call-form', ['class' => 'aligned-mb'])

</x-user-layout>
