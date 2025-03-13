<section>
    <div>
        <h2 class="text-lg font-medium text-gray-900">
            Создать новую галерею
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Введите необходимые данные для создания новой галереи
        </p>
    </div>

    <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data" class="mt-4 space-y-4">
        @csrf

        <div class="grid gap-3 sm:grid-cols-2">
            <x-form-field name="name_ru" label="Название галереи (Русский)" :value="old('name_ru')" />
            <x-form-field name="name_en" label="Название галереи (Английский)" :value="old('name_en')" />
            <x-form-field name="name_cn" label="Название галереи (Китайский)" :value="old('name_cn')" />
            <x-form-field name="name_jp" label="Название галереи (Японский)" :value="old('name_jp')" />
        </div>

        <div class="flex items-center gap-4">
            <x-admin.primary-button>{{ __('Создать') }}</x-admin.primary-button>
        </div>
    </form>
</section>
