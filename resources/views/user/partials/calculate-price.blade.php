<section class="section-primary">

    <div class="rounded-lg overflow-clip bg-[#E5E3DB] md:flex">

        <div class="w-full h-72 sm:h-100 md:w-1/2 md:h-110 lg:w-2/5 lg:h-90">
            <img class="object-cover object-bottom w-full h-full"
                src="{{ asset('images/home/calculator.webp') }}" alt="{{ __('components.Фото деревянного дома') }}">
        </div>

        <div class="px-4 py-6 md:py-8 md:px-10 md:w-1/2 lg:py-10 lg:w-3/5 xl:px-16">
            <h2 class="mb-4 text-2xl titles md:text-4xl">{{ __('partials/calculate_price.Рассчитайте стоимость сруба') }}</h2>

            <p class="mb-6">{{ __('partials/calculate_price.Хотите узнать стоимость дома') }}</p>

            <a href="https://spbrb.ru/price-log-calculator.htm" class="block w-full text-center btn-secondary">
                {{ __('partials/calculate_price.ПЕРЕЙТИ В КАЛЬКУЛЯТОР') }}
            </a>
        </div>
    </div>

</section>
