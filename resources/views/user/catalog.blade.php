<x-user-layout>

    <x-user.breadcrumbs page_name="Каталог" />

    <section class="section-primary">

        <h1 class="mb-8 text-3xl font-bold titles sm:mb-6 md:mb-14 md:text-6xl">Проекты домов</h1>

        <div class="space-y-6 sm:space-y-8 md:space-y-14">

            Hello world

        </div>


    </section>


    <livewire:pageform />


    @include('user.partials.home-bottom-carousel')

    @include('user.partials.calculate-price')

    @include('user.partials.call-form')

</x-user-layout>
