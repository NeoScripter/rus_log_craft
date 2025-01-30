<div x-data="{ open: true }" x-cloak x-transition x-show="open" class="fixed z-40 flex items-center gap-4 p-4 bg-white right-1/4 bottom-10">
    <a href="" class="block p-2 rounded-full bg-[#25D366]">
        <img src="{{ asset('images/svgs/wp-popup.svg') }}" alt="">
    </a>
    <button @click="$dispatch('open-form')" type="button" class="block p-2 rounded-full bg-[#375A48]">
        <img src="{{ asset('images/svgs/tel-popup.svg') }}" alt="">
    </button>
    <button @click="open = false">
        <img src="{{ asset('images/svgs/close-popup.svg') }}" alt="">
    </button>
</div>
