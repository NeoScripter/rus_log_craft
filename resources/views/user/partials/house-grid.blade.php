@props(['title' => ''])

<section class="relative pb-6 section-primary sm:pb-10">

    <div class="absolute inset-0 bg-left-top bg-no-repeat bg-cover -top-10 -z-10 bg-light-gray"
        style="background-image: url({{ asset('images/svgs/green-circle.svg') }})"></div>

    <h2 class="text-xl uppercase titles md:text-3xl">{{ $title }}</h2>

    @isset($projects)
        <div class="grid my-6 gap-x-4 gap-y-6 sm:my-10 sm:grid-cols-2 md:grid-cols-3 md:gap-x-6 lg:gap-x-10">
            @foreach ($projects as $project)
                <x-user.project-card :project="$project" />
            @endforeach
        </div>

    @endisset

    <a href="{{ route('user.services') }}" class="block w-full text-center btn-primary">{{ __('partials/home_grid.Смотреть все проекты')}}</a>

</section>
