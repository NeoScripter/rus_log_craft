<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Редактировать галерею
        </h2>
    </x-slot>

    @if (isset($gallery))
        <section>
            <form method="POST" action="{{ route('gallery.update', $gallery->id) }}" enctype="multipart/form-data"
                class="mt-4 space-y-4">
                @csrf
                @method('PUT')

                <!-- Back Link -->
                <div class="flex items-center gap-4">
                    <x-admin.link href="{{ route('gallery.index') }}">Назад</x-admin.link>
                </div>
                <hr>

                <div class="grid gap-3 sm:grid-cols-2">
                    <!-- Gallery Name (Multilingual) -->
                    <x-form-field name="name_ru" label="Название галереи (Русский)" :value="old('name_ru', $gallery->name_ru)" />
                    <x-form-field name="name_en" label="Название галереи (Английский)" :value="old('name_en', $gallery->name_en)" />
                    <x-form-field name="name_cn" label="Название галереи (Китайский)" :value="old('name_cn', $gallery->name_cn)" />
                    <x-form-field name="name_jp" label="Название галереи (Японский)" :value="old('name_jp', $gallery->name_jp)" />
                </div>

                <!-- Save and Delete Buttons -->
                <div class="flex items-center gap-4">
                    <x-admin.primary-button>{{ __('Сохранить изменения') }}</x-admin.primary-button>

                    <x-admin.danger-button x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'confirm-gallery-deletion')">
                        {{ __('Удалить галерею') }}
                    </x-admin.danger-button>
                </div>
            </form>

            <livewire:image-handler model="Gallery" :model-id="$gallery->id" type="image" label="Фото галереи" />
        </section>

        <!-- Confirmation Modal for Deletion -->
        <x-admin.modal name="confirm-gallery-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
            <form method="post" action="{{ route('gallery.destroy', $gallery) }}" class="p-6">
                @csrf
                @method('delete')

                <h2 class="text-lg font-medium text-gray-900">
                    Вы уверены, что хотите удалить эту галерею?
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    В случае удаления галереи, вся информация, связанная с ней, будет безвозвратно
                    удалена.
                </p>

                <div class="flex justify-end mt-6">
                    <x-admin.secondary-button x-on:click="$dispatch('close')">
                        {{ __('Отмена') }}
                    </x-admin.secondary-button>

                    <x-admin.danger-button class="ms-3">
                        {{ __('Удалить') }}
                    </x-admin.danger-button>
                </div>
            </form>
        </x-admin.modal>
    @endif
</x-admin-layout>
