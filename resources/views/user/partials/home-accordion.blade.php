<section class="section-primary">

    <h2 class="text-2xl md:text-4xl titles text-balance">6 причин выбрать бревенчатый дом <br> <a href="{{ route('user.tech')}}"
            class="mb-6 golden-title">ручной рубки</a></h2>

    <div class="md:flex md:gap-10 md:items-end md:justify-between">

        @php
            $questions = [
                'Эстетика и уникальность',
                'Экологичность',
                'Энергоэффективность',
                'Прочность и долговечность',
                'Индивидуальность',
                'Психологический эффект',
            ];

            $answers = [
                'дома из ручной рубки обладают неповторимым характером и органической красотой. Каждое бревно имеет свою форму и текстуру, что создает уникальный и неповторимый внешний вид дома, придающий ему особый шарм.',
                'строительство осуществляется с использованием натуральных материалов, что снижает экологическую нагрузку на окружающую среду. Древесина является возобновляемым ресурсом, а процесс обработки бревен вручную обеспечивает минимальное использование энергии.',
                'благодаря толстым стенам из натурального дерева, дома из ручной рубки обладают превосходными теплоизоляционными свойствами. Это позволяет создавать уютное и комфортное внутреннее пространство, а также снижает затраты на отопление и кондиционирование воздуха.',
                'древесина, используемая при строительстве домов из ручной рубки, обладает высокой прочностью и долговечностью. Толстые бревна обеспечивают надежную защиту от ветра, дождя и других природных воздействий, что делает такие дома стойкими к различным климатическим условиям.',
                'возможность ручной обработки бревен позволяет создавать индивидуальные и уникальные дизайны для каждого дома. Владельцы могут выбирать форму и размеры бревен, а также стиль обработки, чтобы создать дом, который полностью отвечает их потребностям и предпочтениям.',
                'благодаря естественной текстуре и аромату дерева, пребывание в бревенчатом доме способствует созданию уютной и спокойной атмосферы, что благотворно влияет на психическое здоровье и общее благополучие.',
            ];
        @endphp

        <div class="my-6 space-y-4 md:basis-[60%] md:mb-0 lg:basis-1/2">
            @for ($i = 0; $i < count($questions); $i++)
                <div x-data="{ expanded: false }"
                    class="rounded-md transition-colors duration-300 border border-[#E5E3DB] focus-within:border-golden-primary hover:border-golden-primary">
                    <button
                        class="flex items-center justify-between w-full p-6 transition-colors outline-none durat ion-300 group"
                        @click="expanded = !expanded">

                        <div
                            class="font-semibold group-hover:text-golden-primary group-focus-visible:text-golden-primary">
                            {{ $questions[$i] }}</div>

                        <div class="w-4 h-4 transition-transform duration-500" :class="expanded ? '-rotate-180' : ''">
                            <svg width="100%" height="100%" viewBox="0 0 18 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="arrow">
                                    <path id="Vector 12" d="M1 1.5L17 17.5M17 17.5V1.5M17 17.5H1" stroke-width="2"
                                        class="stroke-[#212125] group-hover:stroke-golden-primary group-focus-visible:stroke-golden-primary transition-colors duration-300" />
                                </g>
                            </svg>

                        </div>
                    </button>
                    <div x-show="expanded" x-transition:enter="transition-all duration-500 ease-in-out"
                        x-transition:enter-start="grid-rows-[0fr]" x-transition:enter-end="grid-rows-[1fr]"
                        x-transition:leave="transition-all duration-500 ease-in"
                        x-transition:leave-start="grid-rows-[1fr]" x-transition:leave-end="grid-rows-[0fr]" x-cloak
                        class="grid p-6 pt-0 text-dim-gray">
                        <div class="overflow-hidden">{{ $answers[$i] }}</div>
                    </div>
                </div>
            @endfor
        </div>

        <div class="max-w-100 md:basis-[40%] md:max-w-176 lg:basis-1/2">
            <img class="object-cover object-center w-full h-full" src="{{ asset('images/home/home-accordion.webp') }}"
                alt="">
        </div>
    </div>

</section>
