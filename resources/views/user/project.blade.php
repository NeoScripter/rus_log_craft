<x-user-layout>

    @isset($project)
        <x-user.breadcrumbs :page_name="$project->{'name_' . app()->getLocale()}">
            <x-slot:second_path>
                <a class="select-none underline-offset-2 hover:underline focus-visible:underline" href="/catalog">Каталог</a>
                <div class="mt-1">
                    <img src="{{ asset('images/svgs/black-line.svg') }}" alt="Черный дефис">
                </div>
            </x-slot:second_path>
        </x-user.breadcrumbs>

        <section class="section-primary">

            <h1 class="mb-8 text-3xl font-bold titles sm:mb-6 md:mb-14 md:text-4xl">{{ $project->{'name_' . app()->getLocale()} }}</h1>

            <div>

            </div>

        </section>
    @endisset

    <livewire:pageform />

    @include('user.partials.calculate-price')

    @include('user.partials.call-form', ['class' => 'aligned-mb'])

</x-user-layout>
