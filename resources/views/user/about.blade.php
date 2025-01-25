<x-user-layout :top-padding="false">


    <section
        class="relative grid gap-4 text-white bg-center bg-no-repeat bg-cover section-primary sm:gap-6 place-content-center h-52 sm:h-160"
        style="background-image: url('{{ asset('images/about/about-hero.webp') }}')">
        <div class="absolute inset-0 z-10 bg-black/40"></div>

        <div class="z-20 font-bold sm:text-2xl">О компании</div>

        <h1 class="titles z-20 text-xl text-balance sm:text-4xl !text-white">«Русь Бревенчатая» - Уют и экологичность в
            домах из натурального бревна.</h1>
    </section>

    <section class="grid gap-12 sm:gap-6 md:gap-18 section-primary sm:grid-cols-3">

        <div class="relative pt-4 pl-4">
            <div class="mb-2 text-3xl md:text-6xl titles">20 лет</div>
            <div class="text-balance">с 2014 года на рынке деревянного домостоения</div>

            <div class="absolute top-0 left-0 w-20 h-20 border-t-2 border-l-2 border-green-primary"></div>
        </div>

        <div class="relative pt-4 pl-4">
            <div class="mb-2 text-3xl md:text-6xl titles">160+</div>
            <div class="text-balance">проекта построено по всей России</div>

            <div class="absolute top-0 left-0 w-20 h-20 border-t-2 border-l-2 border-green-primary"></div>
        </div>

        <div class="relative pt-4 pl-4">
            <div class="mb-2 text-3xl md:text-6xl titles">300+</div>
            <div class="text-balance">специалистов в штате</div>

            <div class="absolute top-0 left-0 w-20 h-20 border-t-2 border-l-2 border-green-primary"></div>
        </div>

    </section>

    @include('user.partials.service-links')

    @include('user.partials.home-accordion')

    <livewire:pageform />

    @include('user.partials.delivery')

    @include('user.partials.house-grid', ['title' => 'Популярные проекты домов'])

    @include('user.partials.call-form')

</x-user-layout>
