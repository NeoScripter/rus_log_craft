<div
    {{ $attributes->merge([
        'class' => 'p-4 rounded-xl border border-[#E5E3DB]
            flex flex-col justify-between
            transition-colors duration-300 group hover:bg-golden-primary
            sm:basis-[49%]',
    ]) }}>

    <div class="flex items-start justify-between gap-6">
        <p class="text-xl font-bold !leading-[120%] tracking-wide text-dark-black group-hover:text-white md:text-2xl">
            {{ $title }}
        </p>
        <div class="w-2 h-2 rounded-sm shrink-0 bg-green-primary group-hover:bg-white"></div>
    </div>

    <div class="text-sm group-hover:text-white md:text-base">
        {{ $slot }}
    </div>
</div>
