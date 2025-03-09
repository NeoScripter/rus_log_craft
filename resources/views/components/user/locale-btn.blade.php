@props([
    'locale_name' => 'ru',
    'aria_label' => 'Русская версия',
    'img_alt' => 'Русский флаг',
])

@if ($locale_name !== app()->getLocale())
    <a href="{{ route('set-locale', $locale_name) }}" aria-label={{ $aria_label }} class="w-6">
        <img src="{{ asset('images/partials/header/' . $locale_name . '-flag.svg') }}" alt={{ $img_alt }}
            class="object-contain object-center w-full h-full">
    </a>
@endif
