@props(['is_active' => false, 'title' => '', 'click' => ''])

<button {{ $attributes->class(['btn-filter', 'active' => $is_active]) }} wire:click={{ $click }} type="button">{{ $title }}</button>
