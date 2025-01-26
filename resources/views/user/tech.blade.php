<x-user-layout :bottom-padding="false">

    <div class="inline-flex items-center gap-4 section-primary">
        <div>Главная</div>
        <div class="mt-1">
            <img src="{{ asset('images/svgs/black-line.svg') }}" alt="">
        </div>
        <div>Технологии</div>
    </div>

    <livewire:pageform />

    @include('user.partials.call-form')

    @include('user.partials.articles')



</x-user-layout>
