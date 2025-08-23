<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Редактировать проект
        </h2>
    </x-slot>

    @if (isset($project))
        <section>
            <form method="POST" action="{{ route('projects.update', $project->id) }}" enctype="multipart/form-data"
                class="mt-4 space-y-4">
                @csrf
                @method('PUT')

                <!-- Back Link -->
                <div class="flex items-center gap-4">
                    <x-admin.link href="{{ route('admin') }}">Назад</x-admin.link>
                </div>
                <hr>

                <div class="grid gap-3 sm:grid-cols-2">
                    <!-- Project Name (Multilingual) -->
                    <x-form-field name="name_ru" label="Название проекта (Русский)" :value="old('name_ru', $project->name_ru)" />
                    <x-form-field name="name_en" label="Название проекта (Английский)" :value="old('name_en', $project->name_en)" />
                    <x-form-field name="name_cn" label="Название проекта (Китайский)" :value="old('name_cn', $project->name_cn)" />
                    <x-form-field name="name_jp" label="Название проекта (Японский)" :value="old('name_jp', $project->name_jp)" />
                </div>

                <!-- Project Type -->
                <x-admin.simple-select-field name="type" label="Тип проекта" :options="[
                    'house' => 'Дом',
                    'house_bath' => 'Дом с баней',
                    'bath' => 'Баня',
                    'utility' => 'Хозпостройка',
                ]" :value="old('type', $project->type)" />

                <!-- Article -->
                <x-form-field name="article" label="Артикул" :value="old('article', $project->article)" />

                <div class="flex items-center gap-3">
                    <!-- Features -->
                    <x-admin.checkbox name="is_featured" label="Рекомендуемый проект" :value="old('is_featured', $project->is_featured)" />
                    <x-admin.checkbox name="has_terrace" label="Есть терраса" :value="old('has_terrace', $project->has_terrace)" />
                    <x-admin.checkbox name="has_garage" label="Есть гараж" :value="old('has_garage', $project->has_garage)" />
                </div>

                <div class="flex flex-wrap items-center gap-3">
                    <!-- Area & Size -->
                    <x-form-field name="build_area" label="Площадь застройки (м²)" type="number" :value="old('build_area', $project->build_area)" />
                    <x-form-field name="floors" label="Количество этажей" type="number" :value="old('floors', $project->floors)" />
                    <x-form-field name="total_area" label="Общая площадь (м²)" type="number" :value="old('total_area', $project->total_area)" />
                    <x-form-field name="living_area" label="Жилая площадь (м²)" type="number" :value="old('living_area', $project->living_area)" />
                    <x-form-field name="roof_area" label="Площадь крыши (м²)" type="number" :value="old('roof_area', $project->roof_area)" />
                </div>

                <div class="flex flex-wrap items-center gap-3">
                    <!-- Rooms & Bedrooms -->
                    <x-form-field name="bedrooms" label="Количество спален" type="number" :value="old('bedrooms', $project->bedrooms)" />
                    <x-form-field name="bathrooms" label="Количество ванных комнат" type="number" :value="old('bathrooms', $project->bathrooms)" />
                    <x-form-field name="rooms" label="Общее количество комнат" type="number" :value="old('rooms', $project->rooms)" />
                    <x-form-field name="price_per_sqm" label="Цена за м² (₽)" type="number" :value="old('price_per_sqm', $project->price_per_sqm)" />
                </div>

                <div class="grid gap-3 sm:grid-cols-2">
                    <!-- Room Type (Multilingual) -->
                    <x-form-field name="room_type_ru" label="Тип комнат (Русский)" :value="old('room_type_ru', $project->room_type_ru)" />
                    <x-form-field name="room_type_en" label="Тип комнат (Английский)" :value="old('room_type_en', $project->room_type_en)" />
                    <x-form-field name="room_type_cn" label="Тип комнат (Китайский)" :value="old('room_type_cn', $project->room_type_cn)" />
                    <x-form-field name="room_type_jp" label="Тип комнат (Японский)" :value="old('room_type_jp', $project->room_type_jp)" />
                </div>

                <!-- Description (Multilingual) -->
                <x-form-field name="description_ru" label="Описание (Русский)"
                    :isTextarea="true" :value="old('description_ru', $project->description_ru)"/>
                <x-form-field name="description_en" label="Описание (Английский)"
                    :isTextarea="true" :value="old('description_en', $project->description_en)"/>
                <x-form-field name="description_cn" label="Описание (Китайский)"
                    :isTextarea="true" :value="old('description_cn', $project->description_cn)"/>
                <x-form-field name="description_jp" label="Описание (Японский)"
                    :isTextarea="true" :value="old('description_jp', $project->description_jp)"/>


                <!-- Save and Delete Buttons -->
                <div class="flex items-center gap-4">
                    <x-admin.primary-button>{{ __('Сохранить изменения') }}</x-admin.primary-button>

                    <x-admin.danger-button x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'confirm-project-deletion')">
                        {{ __('Удалить проект') }}
                    </x-admin.danger-button>
                </div>
            </form>

            <livewire:image-handler
                model="Project"
                :model-id="$project->id"
                type="image"
                label="фото проекта"
                wire:key="project-{{ $project->id }}-images"
            />

            <livewire:image-handler
                model="Project"
                :model-id="$project->id"
                type="plan"
                label="фото планов проекта"
                wire:key="project-{{ $project->id }}-plans"
            />
        </section>

        <!-- Confirmation Modal for Deletion -->
        <x-admin.modal name="confirm-project-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
            <form method="post" action="{{ route('projects.destroy', $project) }}" class="p-6">
                @csrf
                @method('delete')

                <h2 class="text-lg font-medium text-gray-900">
                    Вы уверены, что хотите удалить этот проект?
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    В случае удаления проекта, вся информация, связанная с ним, будет безвозвратно
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
