<x-user-layout :bottom-padding="false">

    <div class="inline-flex items-center gap-4 section-primary">
        <a class="select-none hover:underline focus-visible:underline underline-offset-2" href="/">Главная</a>
        <div class="mt-1">
            <img src="{{ asset('images/svgs/black-line.svg') }}" alt="">
        </div>
        <div>Контакты</div>
    </div>

    <div class="section-primary">

        <h1 class="text-4xl titles md:text-6xl">Контактная информация</h1>

    </div>

    <livewire:pageform />

    @include('user.partials.house-grid', ['title' => 'Популярные проекты домов'])

    @include('user.partials.home-bottom-carousel')

    @include('user.partials.call-form')

</x-user-layout>
