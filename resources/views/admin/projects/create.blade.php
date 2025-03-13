<section>
    <div>
        <h2 class="text-lg font-medium text-gray-900">
            Создать новый проект
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Введите необходимые данные для создания нового проекта
        </p>
    </div>

    <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data" class="mt-4 space-y-4">
        @csrf

        <!-- Project Name (Multilingual) -->
        <x-form-field name="name_ru" label="Название проекта (Русский)" />
        <x-form-field name="name_en" label="Название проекта (Английский)" />
        <x-form-field name="name_cn" label="Название проекта (Китайский)" />
        <x-form-field name="name_jp" label="Название проекта (Японский)" />

        <!-- Project Type -->
        <x-admin.simple-select-field name="type" label="Тип проекта"
            :options="['house' => 'Дом', 'house_bath' => 'Дом с баней', 'bath' => 'Баня', 'utility' => 'Хозпостройка']" />

        <!-- Article -->
        <x-form-field name="article" label="Артикул" />

        <!-- Features -->
        <x-admin.checkbox name="is_featured" label="Рекомендуемый проект" />
        <x-admin.checkbox name="has_terrace" label="Есть терраса" />
        <x-admin.checkbox name="has_garage" label="Есть гараж" />

        <!-- Area & Size -->
        <x-form-field name="build_area" label="Площадь застройки (м²)" type="number" />
        <x-form-field name="floors" label="Количество этажей" type="number" />
        <x-form-field name="total_area" label="Общая площадь (м²)" type="number" />
        <x-form-field name="living_area" label="Жилая площадь (м²)" type="number" />
        <x-form-field name="roof_area" label="Площадь крыши (м²)" type="number" />

        <!-- Rooms & Bedrooms -->
        <x-form-field name="bedrooms" label="Количество спален" type="number" />
        <x-form-field name="bathrooms" label="Количество ванных комнат" type="number" />
        <x-form-field name="rooms" label="Общее количество комнат" type="number" />

        <!-- Room Type (Multilingual) -->
        <x-form-field name="room_type_ru" label="Тип комнат (Русский)" />
        <x-form-field name="room_type_en" label="Тип комнат (Английский)" />
        <x-form-field name="room_type_cn" label="Тип комнат (Китайский)" />
        <x-form-field name="room_type_jp" label="Тип комнат (Японский)" />

        <!-- Price -->
        <x-form-field name="price_per_sqm" label="Цена за м² (₽)" type="number" />

        <!-- Description (Multilingual) -->
        <x-form-field name="description_ru" label="Описание (Русский)" :isTextarea="true" />
        <x-form-field name="description_en" label="Описание (Английский)" :isTextarea="true" />
        <x-form-field name="description_cn" label="Описание (Китайский)" :isTextarea="true" />
        <x-form-field name="description_jp" label="Описание (Японский)" :isTextarea="true" />

        <!-- Submit Button -->
        <div class="flex items-center gap-4">
            <x-admin.primary-button>{{ __('Создать') }}</x-admin.primary-button>
        </div>
    </form>
</section>
