@props(['page_name' => ''])

<div class="inline-flex flex-wrap items-center gap-4 section-primary">
    <a class="select-none underline-offset-2 hover:underline focus-visible:underline" href="/">Главная</a>
    <div class="mt-1">
        <img src="{{ asset('images/svgs/black-line.svg') }}" alt="Черный дефис">
    </div>

    @isset($second_path)
        {{ $second_path }}
    @endisset

    <div>{{ $page_name }}</div>
</div>
