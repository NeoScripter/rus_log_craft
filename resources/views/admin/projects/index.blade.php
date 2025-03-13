<section>
    <div>
        <h2 class="flex flex-wrap items-center justify-between gap-4 text-lg font-medium text-gray-900">
            Все проекты

            <x-admin.search-form :action="'/admin/projects'" :placeholder="'Найти проект...'" />
        </h2>
    </div>

    <div class="mt-4 space-y-6">

        @if (isset($projects))
            @if ($projects->isNotEmpty())
                @foreach ($projects as $project)
                    <hr>
                    <div>
                        <div>
                            <p class="block mb-1 font-bold text-black font-sm text-md">{{ $project->name_ru ?? 'Без названия' }}</p>
                        </div>
                        @if ($project->firstImage)
                            <div>
                                <figure class="relative max-w-sm mb-1">
                                    <img class="rounded-lg max-w-32" src="{{ Storage::url($project->firstImage->path) }}"
                                        alt="Фото проекта">
                                </figure>
                            </div>
                        @endif

                        <div>
                            <p class="block max-w-xl font-normal text-black font-sm text-md">
                                {!! Str::limit($project->description_ru, 150, '...') !!}
                            </p>
                        </div>
                        <x-admin.link
                            href="{{ route('projects.edit', $project) }}">{{ __('Редактировать') }}</x-admin.link>
                    </div>
                @endforeach
            @else
                <p class="no-projects-message">Не найдено ни одного проекта</p>
            @endif

            {{ $projects->links() }}
        @else
            <p class="no-projects-message">Нет ни одного проекта</p>
        @endif

    </div>
</section>

@if (session('status') === 'project-deleted')
    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
        {{ __('Проект удален.') }}</p>
@endif

@if (session('status') === 'success')
    <div class="fixed flex items-center p-4 space-x-4 text-gray-500 -translate-x-1/2 bg-white divide-x divide-gray-200 rounded-lg shadow w-max left-1/2 rtl:divide-x-reverse top-5 dark:text-gray-400 dark:divide-gray-700 dark:bg-gray-800"
        role="alert" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
        <div class="text-base font-normal text-center text-gray-600">
            {{ session('message') }}
        </div>
    </div>
@endif
