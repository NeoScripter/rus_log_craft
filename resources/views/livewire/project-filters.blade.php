<div>
    <div class="relative items-start gap-8 uppercase md:flex" x-data x-init="$wire.setPerPage(window.innerWidth);"
        @resize.window.debounce.200ms="$wire.setPerPage(window.innerWidth);">

        <form wire:submit.prevent
            class="top-32 mb-6 space-y-4 rounded-md border border-gray-400 p-6 md:sticky md:max-w-[374px] md:basis-1/2">
            <header class="flex items-center justify-between pb-4">
                <div class="text-xl font-bold">Фильтры</div>
            </header>

            <div class="pb-4 space-y-2 border-b border-gray-400">
                <x-user.filter-btn title="Показать все" click="resetFilters" :is_active="$type === ''" class="w-full" />
                <x-user.filter-btn title="Дома" click="$set('type','house')" :is_active="$type === 'house'" class="w-full" />
                <x-user.filter-btn title="Дома с баней" click="$set('type','house_bath')" :is_active="$type === 'house_bath'"
                    class="w-full" />
                <x-user.filter-btn title="Бани" click="$set('type','bath')" :is_active="$type === 'bath'" class="w-full" />
                <x-user.filter-btn title="Хозпостройки" click="$set('type','utility')" :is_active="$type === 'utility'"
                    class="w-full" />
            </div>

            <div class="pb-4 border-b border-gray-400">
                <div class="mb-4 font-medium">Этажность</div>
                <div class="flex flex-wrap items-center gap-2">
                    <x-user.filter-btn title="Все" click="$set('floors','')" :is_active="$floors === ''" />
                    <x-user.filter-btn title="1" click="$set('floors','1')" :is_active="$floors === '1'" />
                    <x-user.filter-btn title="2" click="$set('floors','2')" :is_active="$floors === '2'" />
                    <x-user.filter-btn title="3" click="$set('floors','3')" :is_active="$floors === '3'" />
                </div>
            </div>

            <div class="pb-4 border-b border-gray-400">
                <div class="mb-4 font-medium">Площадь</div>
                <div class="flex flex-wrap items-center gap-2">
                    <x-user.filter-btn title="Все" click="$set('area','')" :is_active="$area === ''" />
                    <x-user.filter-btn title="До 50" click="$set('area','lt50')" :is_active="$area === 'lt50'" />
                    <x-user.filter-btn title="50-130" click="$set('area','50to130')" :is_active="$area === '50to130'" />
                    <x-user.filter-btn title="130-190" click="$set('area','130to190')" :is_active="$area === '130to190'" />
                    <x-user.filter-btn title="Более 190" click="$set('area','gt190')" :is_active="$area === 'gt190'" />
                </div>
            </div>

            <div class="pb-4">
                <div class="flex items-start gap-2 mb-4 me-4">
                    <input wire:model="hasTerrace" wire:change="$refresh" id="terrace" type="checkbox" value="1"
                        class="w-6 h-6 bg-gray-100 border-gray-300 rounded-sm text-green-primary focus:ring-2 focus:ring-green-primary">
                    <label for="terrace" class="font-medium tracking-wider text-gray-900 capitalize">Терраса</label>
                </div>
                <div class="flex items-start gap-2 me-4">
                    <input wire:model="hasGarage" wire:change="$refresh" id="garage" type="checkbox" value="1"
                        class="w-6 h-6 bg-gray-100 border-gray-300 rounded-sm text-green-primary focus:ring-2 focus:ring-green-primary">
                    <label for="garage" class="font-medium tracking-wider text-gray-900 capitalize">Гараж</label>
                </div>
            </div>
        </form>

        <div class="grid gap-x-4 gap-y-6 sm:grid-cols-2 md:gap-x-6 lg:gap-x-10 xl:grid-cols-3">
            @foreach ($projects as $project)
                <x-user.project-card :project="$project" />
            @endforeach
        </div>
    </div>

    <div class="px-6 my-8 lg:px-0">{{ $projects->links() }}</div>
</div>
