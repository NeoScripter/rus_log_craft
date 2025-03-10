@props(['src' => '', 'alt' => '', 'value' => ''])

<div {{ $attributes->class(['flex items-center flex-1 gap-2']) }}>
    <img class="w-6 aspect-square" src={{ $src }} alt={{ $alt }}>
    <div class="balance">{{ $value }}</div>
</div>
