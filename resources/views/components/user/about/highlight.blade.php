@props(['top' => '', 'small' => ''])

<div class="relative pt-4 pl-4">
    <div class="mb-2 text-3xl md:text-6xl titles">{{ $top }}</div>
    <div class="text-balance">{{ $small }}</div>

    <div class="absolute top-0 left-0 w-20 h-20 border-t-2 border-l-2 border-green-primary"></div>
</div>