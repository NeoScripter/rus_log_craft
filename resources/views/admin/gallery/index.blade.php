<section>
    <div>
        <h2 class="flex flex-wrap items-center justify-between gap-4 text-lg font-medium text-gray-900">
            Все галереи

            <x-admin.search-form :action="'/admin/gallery'" :placeholder="'Найти галерею...'" />
        </h2>
    </div>

    <div class="mt-4 space-y-6">
        @if (isset($galleries) && $galleries->isNotEmpty())
            <div class="grid gap-6 md:grid-cols-2">
                @foreach ($galleries as $gallery)
                    <div>
                        <hr class="mb-4">
                        <div>
                            <p class="block mb-1 font-bold text-black font-sm text-md">
                                {{ $gallery->name_ru ?? ($gallery->name_en ?? 'Без названия') }}
                            </p>
                        </div>

                        @if ($gallery->images->isNotEmpty())
                            <div>
                                <figure class="relative max-w-sm mb-1">
                                    <img class="rounded-lg max-w-32"
                                        src="{{ Storage::url($gallery->images->first()->path) }}" alt="Фото галереи">
                                </figure>
                            </div>
                        @endif

                        <x-admin.link href="{{ route('gallery.edit', $gallery) }}">
                            {{ __('Редактировать') }}
                        </x-admin.link>
                    </div>
                @endforeach
            </div>

            {{ $galleries->links() }}
        @else
            <p class="no-galleries-message">Не найдено ни одной галереи</p>
        @endif
    </div>
</section>

@if (session('status') === 'gallery-deleted')
    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
        {{ __('Галерея удалена.') }}
    </p>
@endif

@if (session('status') === 'success')
    <div class="fixed flex items-center p-4 space-x-4 text-gray-500 -translate-x-1/2 bg-white divide-x divide-gray-200 rounded-lg shadow left-1/2 top-5 w-max rtl:divide-x-reverse dark:divide-gray-700 dark:bg-gray-800 dark:text-gray-400"
        role="alert" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
        <div class="text-base font-normal text-center text-gray-600">
            {{ session('message') }}
        </div>
    </div>
@endif
