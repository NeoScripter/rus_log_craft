<section class="section-primary">

    <div class="md:flex md:items-start md:justify-between md:gap-10">
        <div class="mb-6 md:flex-1">
            <h2 class="text-xl font-bold !leading-[120%] tracking-wide text-dark-black md:text-2xl">Наши клиенты выбирают
                <br class="mb-1"> <span class="text-2xl golden-title md:text-4xl">качество</span>
            </h2>
        </div>

        <div class="md:flex-1">
            <p class="mb-6">мы понимаем, что строительство дома связано со стрессом: опасения по поводу процесса
                установки, стихийные бедстия, насекомые и другие факторы</p>
            <p>наши дома решают эти роблемы, мы уважаем ваши потребности и гарантируем соблюдение высоких стандартов
                безопсности и функциональности.</p>
        </div>
    </div>

    <div
        class="my-8 mb-4 text-xl font-bold !leading-[120%] tracking-wide text-dark-black md:mb-8 md:text-2xl md:font-normal">
        наше производство</div>

    <div class="flex flex-wrap items-center gap-3 md:gap-x-10 md:gap-y-8">

        <x-user.index.card class="h-60 md:h-80 md:basis-[48%] lg:basis-[27%]">

            <x-slot:title>
                Древесина, полученная из экологически чистых источников
            </x-slot>

            премиум древесина, которую мы используем, поступает из лесов, управляемых в соответсвии с экологически
            устойчивыми практиками.
        </x-user.index.card>

        <x-user.index.card class="h-60 md:h-80 md:basis-[48%] lg:basis-[27%]">

            <x-slot:title>
                Доступные цены
            </x-slot>

            мы ценим нашу репутацию и ожидания тех, кто нам доверяет. Нет скрытых платежей! Мы ценим ваше доверие и
            стремимся к полной прозрачности. Работаем по договору.
        </x-user.index.card>

        <x-user.index.card class="h-60 sm:h-80 md:order-1 md:h-80 md:basis-[38%] lg:basis-[27%]">

            <x-slot:title>
                Удобная доставка до участка
            </x-slot>

            рубка и строительство на территории нашей площадки, что обеспечивает наблюдение за качеством работ и
            материала, четкое соблюдение технологии. Доставка к месту сборки автомобильным транспортом.
        </x-user.index.card>

        <x-user.index.card class="h-80 md:basis-[58%] lg:basis-[38%]">

            <x-slot:title>
                Собственное производство и изготовление
            </x-slot>

            Мы берем на себя всю работу по проектированию и строительству – разрабатываем архитектурно-эскизный
            проект и рабочую документацию, реализуем полный цикл производства срубов, завозим материалы на
            стройплощадку, собираем конструкцию, проводим отделочные работы и сдаем готовый объект. Наша команда
            состоит из архитекторов, инженеров-конструкторов и инженеров по дереву.
        </x-user.index.card>


        <x-user.index.card class="h-80 md:order-3 md:basis-[38%] lg:order-2 lg:basis-[28%]">

            <x-slot:title>
                Подходящий вариант для каждого
            </x-slot>

            каждый проект уникален, поэтому мы предлагаем разнообразные строительные решения, специально
            разработанные с учетом ваших потребностей, оптимизируя время и бюджет.
        </x-user.index.card>

        <div class="h-80 sm:basis-[49%] md:order-2 md:basis-[58%] lg:basis-[38%]">
            <img class="object-cover object-center w-full h-full" src="{{ asset('images/home/home-quality.webp') }}"
                alt="">
        </div>
    </div>

</section>
