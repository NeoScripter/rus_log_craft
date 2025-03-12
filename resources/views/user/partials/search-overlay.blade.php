<div x-show="showSearch" @click.away="showSearch = false" x-transition class="absolute inset-0 flex items-center justify-end gap-2 p-4 bg-white md:mb-6 lg:pr-32 lg:bg-[#F6F5EF]">
    <button type="button" @click="showSearch = false; query = ''">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="transition-transform duration-300 size-6 hover:scale-125">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </button>
    <div x-show="showSearch" x-transition:enter="transition ease-in-out duration-800"
        x-transition:enter-start="scale-50" x-transition:enter-end="scale-100"
        class="flex items-center gap-2 px-1 transition duration-200 border border-gray-300 rounded-lg focus-within:border-gray-500 focus-within:ring-2 focus-within:ring-gray-300 hover:border-gray-500">
        <input type="search" x-model="query" :class="showSearch ? 'w-full' : ''"
            class="w-full border-none p-0 px-2 !shadow-none outline-none !ring-0 bg-transparent"
            placeholder="{{ __('partials/header.Поиск') }}...">
        <a :class="{ 'pointer-events-none opacity-50': query === '' }" class="block"
            :href="`/catalog?search=${encodeURIComponent(query)}`">
            <img src="{{ asset('images/partials/header/search.svg') }}" alt="{{ __('partials/header.Поиск') }}"
                aria-hidden="true" class="w-10 shrink-0">
        </a>
    </div>
</div>
