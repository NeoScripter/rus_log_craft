@props(['project'])

<div class="flex flex-col overflow-clip rounded-lg border border-[#E5E3DB] bg-white">
    <div class="relative group h-72 overflow-clip">

        <span class="absolute inset-0 z-10 transition-colors duration-500 group-hover:bg-black/50"></span>

        <span class="absolute top-0 right-0 block px-6 py-3 text-xl font-bold bg-white rounded-md text-green-primary">
            {{ $project->total_area }} м²
        </span>

        <img class="object-cover object-center w-full h-full transition-transform duration-500 group-hover:scale-110"
            src="{{ Storage::url($project->firstImage()->first()->path) }}"
            alt="{{ $project->{'name_' . app()->getLocale()} }}">
    </div>

    <div class="flex flex-col flex-1 gap-3 p-4">
        <div class="text-xl titles">{{ $project->{'name_' . app()->getLocale()} }}</div>
        <span class="block mt-auto text-dim-gray">{{ $project->article }}</span>

        <div class="flex items-center justify-between gap-1">

            <x-user.projects.icon :src="asset('images/svgs/volume.svg')" alt="Иконка объема" :value="$project->total_area . 'м²'" />

            <x-user.projects.icon :src="asset('images/svgs/floors.svg')" alt="Иконка этажей" :value="$project->floors . ($project->floors > 1 ? ' этажа' : ' этаж')" />

            <x-user.projects.icon :src="asset('images/svgs/rooms.svg')" alt="Иконка типа комнаты" :value="$project->{'room_type_' . app()->getLocale()}" />

        </div>

        <a href="{{ route('user.project', $project) }}" class="block mt-1 text-center btn-secondary">Подробнее</a>
    </div>


</div>
