@props(['project'])

<div class="flex flex-col bg-white rounded-lg overflow-clip">
    <div class="relative group h-72 overflow-clip">

        <span class="absolute inset-0 z-10 transition-colors duration-500 group-hover:bg-black/50"></span>

        <span
            class="absolute top-0 right-0 block px-6 py-3 text-xl font-bold bg-white rounded-md text-green-primary">
            {{ $project->total_area }} м²
        </span>

        <img class="object-cover object-center w-full h-full transition-transform duration-500 group-hover:scale-110"
            src="{{ Storage::url($project->images()->first()->path) }}" alt="{{ $project->{'name_' . app()->getLocale()} }}">
    </div>

    <div class="flex flex-col flex-1 gap-3 p-4">
        <div class="text-xl titles">{{ $project->{'name_' . app()->getLocale()} }}</div>
        <span class="block mt-auto text-dim-gray">{{ $project->article }}</span>

        <div class="flex items-center justify-between gap-1">

            <div class="flex items-center flex-1 gap-2">
                <img class="w-6 aspect-square" src="{{ asset('images/svgs/volume.svg') }}" alt="Volume svg">
                {{ $project->total_area }} м²
            </div>

            <div class="flex items-center flex-1 gap-2">
                <img class="w-6 aspect-square" src="{{ asset('images/svgs/floors.svg') }}" alt="Volume svg">
                {{ $project->floors . ($project->floors > 1 ? ' этажа' : ' этаж') }}
            </div>

            <div class="flex items-center flex-1 gap-2">
                <img class="w-6 aspect-square" src="{{ asset('images/svgs/rooms.svg') }}" alt="Volume svg">
                {{ $project->rooms }}
            </div>


        </div>

        <a href="{{ $project->link }}" class="block mt-1 text-center btn-secondary">Подробнее</a>
    </div>


</div>
