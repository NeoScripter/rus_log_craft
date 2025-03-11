<section class="section-primary">

    <div class="lg:flex lg:items-center lg:justify-between">
        <h2 class="text-2xl titles md:text-4xl">{{ __('partials/articles.полезные статьи о строительстве') }}</h2>

        <a href="https://spbrb.ru/articles_00_main.htm"
            class="hidden text-center btn-secondary w-100 lg:block">{{ __('partials/articles.Читать все статьи') }}</a>
    </div>

    <div class="grid gap-6 my-6 grid-cols-auto-fit-240 md:gap-10 lg:mb-0 lg:mt-8">

        <a href="https://spbrb.ru/articles_01_mistake_project.htm" target="_blank" class="flex flex-col gap-2">
            <img src="{{ asset('images/home/article-1.webp') }}" alt="{{ __('components.Фото деревянного дома') }}">

            <p class="font-semibold">{{ __('partials/articles.Дома из бревна: особенности проектирования') }}</p>

            <p class="text-sm">{{ __('partials/articles.Самые распространенные ошибки') }}</p>
        </a>

        <a href="https://spbrb.ru/gallery/sess_house_12-1-srub-izgotovlenie.htm" target="_blank"
            class="flex flex-col gap-2">
            <img src="{{ asset('images/home/article-2.webp') }}" alt="{{ __('components.Фото деревянного дома') }}">

            <p class="font-semibold">{{ __('partials/articles.Строительство нашего рубленного дома') }}</p>

            <p class="text-sm">{{ __('partials/articles.Рассказ об истории строительства') }}</p>
        </a>

        <a href="https://spbrb.ru/gallery/sess_house_12-2.htm" target="_blank" class="flex flex-col gap-2">
            <img src="{{ asset('images/home/article-3.webp') }}" alt="{{ __('components.Фото деревянного дома') }}">

            <p class="font-semibold">{{ __('partials/articles.Монтаж сруба деревянного рубленого дома') }}</p>

            <p class="text-sm">{{ __('partials/articles.Дом площадью 122 кв.м.') }}</p>
        </a>

        <a href="https://spbrb.ru/gallery/sess_house_12-48b-ineriors-sauna.htm" target="_blank"
            class="flex flex-col gap-2">
            <img src="{{ asset('images/home/article-4.webp') }}" alt="{{ __('components.Фото деревянного дома') }}">

            <p class="font-semibold">{{ __('partials/articles.Интерьеры рубленой бани') }}</p>

            <p class="text-sm">{{ __('partials/articles.Цикл познавательных статей') }}</p>
        </a>

    </div>

    <a href="https://spbrb.ru/articles_00_main.htm"
        class="block w-full text-center btn-secondary md:mx-auto md:w-100 lg:hidden">{{ __('partials/articles.Читать все статьи') }}</a>

</section>
