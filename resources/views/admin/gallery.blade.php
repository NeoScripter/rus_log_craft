
<x-admin-layout>
    {{-- Header Section --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Галерея
        </h2>
    </x-slot>

    {{-- First Section --}}
        @include('admin.gallery.index')

    {{-- Second Section --}}
    <x-slot name="second">
        @include('admin.gallery.create')

    </x-slot>
</x-admin-layout>
