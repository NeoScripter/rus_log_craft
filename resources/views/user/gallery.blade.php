<x-user-layout>

    <div class="inline-flex items-center gap-4 section-primary">
        <a href="/">Главная</a>
        <div class="mt-1">
            <img src="{{ asset('images/svgs/black-line.svg') }}" alt="">
        </div>
        <div>Галерея проектов</div>
    </div>

    <section class="section-primary text-balance">

        <h1 class="text-4xl titles md:text-6xl">Галерея проектов</h1>


    </section>






    <livewire:pageform />

    @include('user.partials.call-form')

    @include('user.partials.articles')



</x-user-layout>
