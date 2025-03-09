<div>
    <div class="relative items-start gap-8 uppercase md:flex">

        <form wire:submit.prevent class="p-6 mb-6 space-y-4 border border-gray-400 rounded-md md:sticky top-32 md:basis-1/2 md:max-w-[374px]">
            <header class="flex items-center justify-between pb-4">
                <div class="text-xl font-bold">Фильтры</div>
            </header>

            <div class="pb-4 space-y-2 border-b border-gray-400">
                <button wire:click="resetFilters" type="button" class="w-full btn-filter {{ $type === '' ? 'active' : '' }}">Показать все</button>
                <button wire:click="$set('type','house')" type="button" class="w-full btn-filter {{ $type === 'house' ? 'active' : '' }}">Дома</button>
                <button wire:click="$set('type','house_bath')" type="button" class="w-full btn-filter {{ $type === 'house_bath' ? 'active' : '' }}">Дома с баней</button>
                <button wire:click="$set('type','bath')" type="button" class="w-full btn-filter {{ $type === 'bath' ? 'active' : '' }}">Бани</button>
                <button wire:click="$set('type','utility')" type="button" class="w-full btn-filter {{ $type === 'utility' ? 'active' : '' }}">Хозпостройки</button>
            </div>

            <div class="pb-4 border-b border-gray-400">
                <div class="mb-4 font-medium">Этажность</div>
                <div class="flex flex-wrap items-center gap-2">
                    <button wire:click="$set('floors','all')" type="button" class="btn-filter {{ $floors === '' ? 'active' : '' }}">Все</button>
                    <button wire:click="$set('floors','1')" type="button" class="btn-filter {{ $floors === '1' ? 'active' : '' }}">1</button>
                    <button wire:click="$set('floors','2')" type="button" class="btn-filter {{ $floors === '2' ? 'active' : '' }}">2</button>
                    <button wire:click="$set('floors','3')" type="button" class="btn-filter {{ $floors === '3' ? 'active' : '' }}">3</button>
                </div>
            </div>

            <div class="pb-4 border-b border-gray-400">
                <div class="mb-4 font-medium">Площадь</div>
                <div class="flex flex-wrap items-center gap-2">
                    <button wire:click="$set('area','all')" type="button" class="btn-filter {{ $area === '' ? 'active' : '' }}">Все</button>
                    <button wire:click="$set('area','lt50')" type="button" class="btn-filter {{ $area === 'lt50' ? 'active' : '' }}">До 50</button>
                    <button wire:click="$set('area','50to130')" type="button" class="btn-filter {{ $area === '50to130' ? 'active' : '' }}">50-130</button>
                    <button wire:click="$set('area','130to190')" type="button" class="btn-filter {{ $area === '130to190' ? 'active' : '' }}">130-190</button>
                    <button wire:click="$set('area','gt190')" type="button" class="btn-filter {{ $area === 'gt190' ? 'active' : '' }}">Более 190</button>
                </div>
            </div>

            <div class="pb-4">
                <div class="flex items-start gap-2 mb-4 me-4">
                    <input wire:model="hasTerrace" wire:change="$refresh" id="terrace" type="checkbox" value="1"
                        class="w-6 h-6 bg-gray-100 border-gray-300 rounded-sm text-green-primary focus:ring-green-primary focus:ring-2">
                    <label for="terrace" class="font-medium tracking-wider text-gray-900 capitalize">Терраса</label>
                </div>
                <div class="flex items-start gap-2 me-4">
                    <input wire:model="hasGarage" wire:change="$refresh" id="garage" type="checkbox" value="1"
                        class="w-6 h-6 bg-gray-100 border-gray-300 rounded-sm text-green-primary focus:ring-green-primary focus:ring-2">
                    <label for="garage" class="font-medium tracking-wider text-gray-900 capitalize">Гараж</label>
                </div>
            </div>
        </form>

        <div class="grid gap-x-4 gap-y-6 md:grid-cols-2 xl:grid-cols-3 md:gap-x-6 lg:gap-x-10">
            @foreach ($projects as $project)
                <x-user.project-card :project="$project" />
            @endforeach
        </div>
    </div>

    <div class="px-6 my-8 lg:px-0">{{ $projects->links() }}</div>
</div>
