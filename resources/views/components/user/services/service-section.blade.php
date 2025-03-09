@props([
    'section_id' => '',
    'title' => '',
    'total_slides' => 5,
    'image_path',
])

<div id={{ $section_id }}
    class="flex flex-col gap-6 pt-8 border-t border-gray-200 sm:scroll-mt-5rem sm:flex-row sm:gap-4 sm:pt-10 md:gap-10 lg:scroll-mt-12rem xl:md:scroll-mt-15rem">

    <div
        class="flex flex-col gap-6 sm:flex-1 sm:justify-between md:justify-start md:gap-14 lg:max-w-[27.5rem] xl:max-w-[45rem] xl:flex-row xl:gap-10">

        <div class="titles text-xl !capitalize md:text-2xl xl:w-60">{{ $title }}</div>

        <div class="xl:max-w-[27.5rem]">
            <x-user.services-carousel :total_slides="$total_slides" image_path="{{ $image_path }}" />
        </div>

    </div>

    <div class="space-y-6 sm:flex-1 md:space-y-10 md:text-2xl">

        {{ $slot }}

    </div>
</div>
