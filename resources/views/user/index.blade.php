<x-user-layout>
    This is the user page
    Это страница пользователя





    @isset($projects)
        @foreach ($projects as $project)
            <div>
                {{ $project->name }}
                {{ $project->image }}
                {{ $project->volume }}
                {{ $project->article }}
                {{ $project->floors }}
                {{ $project->rooms }}
                {{ $project->link }}
            </div>
        @endforeach

    @endisset

</x-user-layout>
