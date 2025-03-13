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

        <div class="grid gap-3 sm:grid-cols-2">
            <x-form-field name="name_ru" label="Название проекта (Русский)" :value="old('name_ru')" />
            <x-form-field name="name_en" label="Название проекта (Английский)" :value="old('name_en')" />
            <x-form-field name="name_cn" label="Название проекта (Китайский)" :value="old('name_cn')" />
            <x-form-field name="name_jp" label="Название проекта (Японский)" :value="old('name_jp')" />
        </div>

        <x-admin.simple-select-field name="type" label="Тип проекта" :options="['house' => 'Дом', 'house_bath' => 'Дом с баней', 'bath' => 'Баня', 'utility' => 'Хозпостройка']" :value="old('type')" />

        <div class="flex items-center gap-3">
            <x-admin.checkbox name="is_featured" label="Рекомендуемый проект" :value="old('is_featured', false)" />
            <x-admin.checkbox name="has_terrace" label="Есть терраса" :value="old('has_terrace', false)" />
            <x-admin.checkbox name="has_garage" label="Есть гараж" :value="old('has_garage', false)" />
        </div>

        <div class="flex flex-wrap items-center gap-3">
            <x-form-field name="article" label="Артикул" :value="old('article')" />
            <x-form-field name="build_area" label="Площадь застройки (м²)" type="number" :value="old('build_area')" />
            <x-form-field name="floors" label="Количество этажей" type="number" :value="old('floors')" />
            <x-form-field name="total_area" label="Общая площадь (м²)" type="number" :value="old('total_area')" />
            <x-form-field name="living_area" label="Жилая площадь (м²)" type="number" :value="old('living_area')" />
            <x-form-field name="roof_area" label="Площадь крыши (м²)" type="number" :value="old('roof_area')" />
            <x-form-field name="bedrooms" label="Количество спален" type="number" :value="old('bedrooms')" />
            <x-form-field name="bathrooms" label="Количество ванных комнат" type="number" :value="old('bathrooms')" />
            <x-form-field name="rooms" label="Общее количество комнат" type="number" :value="old('rooms')" />
            <x-form-field name="price_per_sqm" label="Цена за м² (₽)" type="number" :value="old('price_per_sqm')" />
        </div>

        <div class="grid gap-3 sm:grid-cols-2">
            <x-form-field name="room_type_ru" label="Тип комнат (Русский)" :value="old('room_type_ru')" />
            <x-form-field name="room_type_en" label="Тип комнат (Английский)" :value="old('room_type_en')" />
            <x-form-field name="room_type_cn" label="Тип комнат (Китайский)" :value="old('room_type_cn')" />
            <x-form-field name="room_type_jp" label="Тип комнат (Японский)" :value="old('room_type_jp')" />
        </div>

        <x-form-field name="description_ru" label="Описание (Русский)"
            :isTextarea="true">{{ old('description_ru') }}</x-form-field>
        <x-form-field name="description_en" label="Описание (Английский)"
            :isTextarea="true">{{ old('description_en') }}</x-form-field>
        <x-form-field name="description_cn" label="Описание (Китайский)"
            :isTextarea="true">{{ old('description_cn') }}</x-form-field>
        <x-form-field name="description_jp" label="Описание (Японский)"
            :isTextarea="true">{{ old('description_jp') }}</x-form-field>


        <div class="flex items-center gap-4">
            <x-admin.primary-button>{{ __('Создать') }}</x-admin.primary-button>
        </div>
    </form>
</section>
