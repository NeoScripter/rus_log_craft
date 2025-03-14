<div>
    <div class="my-4">

        <label for="images"
            class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer max-w-80 bg-gray-50 hover:bg-gray-100">
            <div class="flex flex-col items-center justify-center pt-5 pb-6 text-center text-balance">
                <svg class="w-8 h-8 my-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                </svg>
                <p class="mb-2 text-sm font-semibold text-gray-500 dark:text-gray-400">Добавить
                        {{ $label }}</p>
                <p class="text-xs text-gray-500 dark:text-gray-400">WEBP, PNG, JPEG или JPG (MAX. 2 MB)</p>
            </div>
            <input id="images" type="file" wire:model="images" multiple class="hidden" />
        </label>

        <div wire:loading class="flex items-center mt-2 space-x-2">
            <svg class="w-5 h-5 text-slate-800 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 0 1 8-8v8H4z"></path>
            </svg>
            <span class="text-sm text-slate-800">Загрузка...</span>
        </div>

        @error('images.*')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror

    </div>

    <div class="flex flex-wrap items-center gap-4">
        @foreach ($modelImages as $image)
            <div class="relative aspect-square h-52">
                <img src="{{ Storage::url($image->path) }}"
                    class="object-cover object-center w-full h-full rounded-lg shadow-lg">

                <button wire:click="deleteImage({{ $image->id }})"
                    class="absolute right-1 top-1 flex aspect-square items-center justify-center rounded-full bg-red-500 p-0.5 text-3xl text-white">
                    &times;
                </button>
            </div>
        @endforeach
    </div>
</div>
