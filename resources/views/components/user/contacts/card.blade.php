@props(['title' => ''])

<div
    class="group flex h-38 flex-col justify-between rounded-xl border border-[#E5E3DB] p-4 transition-colors duration-300 hover:bg-golden-primary md:h-50">

    <div class="flex items-start justify-between gap-6">
        <p class="text-xl font-bold !leading-[120%] tracking-wide text-green-primary group-hover:text-white md:text-2xl">
            {{ $title }}</p>
        <div class="w-2 h-2 rounded-sm shrink-0 bg-green-primary group-hover:bg-white"></div>
    </div>

    <div class="text-xl font-bold group-hover:text-white md:text-2xl">
        {{ $slot }}
    </div>
</div>
