<x-user-layout :bottom-padding="false">

    <div class="inline-flex items-center gap-4 section-primary">
        <div>Главная</div>
        <div class="mt-1">
            <img src="{{ asset('images/svgs/black-line.svg') }}" alt="">
        </div>
        <div>Технологии</div>
    </div>

    <section class="section-primary text-balance">

        <h1 class="text-4xl titles md:text-6xl">Технология ручной рубки домов и бань из бревна от мастеров компании</h1>

        <p class="my-6">Деревянное домостроение достаточно сложный процесс и человеку, далекому от строительной индустрии деревянных домов, иногда сложно понять, почему дома, построенные разными компаниями по одному проекту, во-первых, имеют разную стоимость, а, во-вторых, по прошествии нескольких лет, имеют совершенно различный вид.</p>

        <p class="text-xl font-bold md:text-2xl">Мы, как мастера своего дела, отличамся технологиями:</p>

    </section>

    <section class="section-primary">

        <div class="p-4 space-y-4 border border-gray-200 rounded-lg sm:space-y-6 md:space-y-8 md:p-6 lg:flex-nowrap">

            <h2 class="text-2xl titles md:text-4xl">Завешивание наружных углов</h2>

            <p>Для предотвращения образования щелей после усушки и усадки сруба в компании Русь Бревенчатая применяют методику создания поднутрения, т.е. зазора по оси бревен. Этот зазор выбирается в нижней части бревна по всей его длине, причем с торцов он чуть меньше (5-8 мм вместе с высотой завешивания наружных углов), а, в невидимых частях венца, чуть больше (10-15 мм).</p>

            <div class="flex flex-col gap-3 sm:gap-4 sm:flex-row sm:flex-wrap lg:gap-8">

                <div class="max-w-75 md:max-w-90 lg:flex-1">
                    <img class="object-contain object-center w-full h-full" src="{{ asset('images/tech/top/manual-1.webp') }}" alt="">
                </div>

                <div class="max-w-75 md:max-w-90 lg:flex-1">
                    <img class="object-contain object-center w-full h-full" src="{{ asset('images/tech/top/manual-2.webp') }}" alt="">
                </div>

                <div class="sm:mt-3 lg:mt-0 lg:flex-1">
                    <p class="mb-2 md:mb-6">На рисунке показаны силы, действующие на бревно во время усушки и усадки. Вследствие воздействия этих сил, в первую очередь, появляется трещина в нижней части бревна. </p>
                    <p>За счет наличия зазора происходит мягкая посадка верхнего бревна на нижнее, а края паза даже после расширения достаточно плотно примыкают к поверхности нижнего бревна.</p>

                    <a href="https://spbrb.ru/tech_zavesh_uglov.htm" target="_blank" class="block mt-6 text-center md:mt-10 btn-secondary md:max-w-90">Подробнее о технологии</a>
                </div>
            </div>

            <div class="flex flex-col gap-4 xs:flex-row xs:flex-wrap xl:gap-10">
                <div class="my-6 md:order-1 lg:order-none lg:basis-[45%] lg:mt-0 xl:flex xl:flex-col xl:justify-between xl:gap-6">
                    <div class="p-6 bg-light-gray">
                        <p class="mb-4 text-xl font-bold">Совет от генерального директора</p>

                        <p>Применение продольного паза в нижней части венцов, получившего название «поднутрение», исключает необходимость регулярного подконопачивания сруба дома или бани. Обратите внимание, что для предотвращения попадания влаги между венцами, на торцах перерубов этот зазор уменьшают с 10…15 до 5 мм. Наличие зазора «поднутрение» можно легко проверить на торцах венцов, образующих дверные и оконные проемы.</p>
                    </div>

                    <div class="hidden xl:block">Наш специально продуманный шаг оградит стены вашего дома от негативных последствий усадки. Серповидные зазоры между брёвнами в дальнейшем закрываться столярными изделиями.</div>
                </div>

                <div class="xs:order-2 sm:basis-[35%] sm:flex sm:items-end md:basis-full xl:hidden">Наш специально продуманный шаг оградит стены вашего дома от негативных последствий усадки. Серповидные зазоры между брёвнами в дальнейшем закрываться столярными изделиями.</div>

                <div class="flex max-w-36 sm:max-w-full sm:basis-[20%] md:ml-auto lg:ml-0 lg:items-start lg:mt-[3.8%] xl:basis-[18%] xl:items-end">
                    <img class="object-contain mt-auto lg:mt-0" src="{{ asset('images/tech/top/demo-1.webp') }}" alt="">
                </div>

                <div class="max-w-72 sm:max-w-full sm:basis-[40%] lg:basis-[30%] xl:basis-[28%]">
                    <img class="object-cover xl:h-full" src="{{ asset('images/tech/top/demo-2.webp') }}" alt="">
                </div>
            </div>

        </div>

    </section>

    <livewire:pageform />

    @include('user.partials.call-form')

    @include('user.partials.articles')



</x-user-layout>
