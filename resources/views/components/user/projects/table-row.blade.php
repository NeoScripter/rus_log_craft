@props(['title' => ''])

<div class="flex items-center justify-between">
    <div class="text-[#8F98A9]">{{ $title }}</div>
    <div>{{ $slot }}</div>
</div>
