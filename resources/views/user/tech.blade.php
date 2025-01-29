<x-user-layout :bottom-padding="false">

    <div class="inline-flex items-center gap-4 section-primary">
        <a class="select-none hover:underline focus-visible:underline underline-offset-2" href="/">Главная</a>
        <div class="mt-1">
            <img src="{{ asset('images/svgs/black-line.svg') }}" alt="">
        </div>
        <div>Технологии</div>
    </div>

    <section class="section-primary text-balance">

        <h1 class="text-4xl titles md:text-6xl">Технология ручной рубки домов и бань из бревна от мастеров компании</h1>

        <p class="my-6">Деревянное домостроение достаточно сложный процесс и человеку, далекому от строительной
            индустрии деревянных домов, иногда сложно понять, почему дома, построенные разными компаниями по одному
            проекту, во-первых, имеют разную стоимость, а, во-вторых, по прошествии нескольких лет, имеют совершенно
            различный вид.</p>

        <p class="text-xl font-bold md:text-2xl">Мы, как мастера своего дела, отличамся технологиями:</p>

    </section>

    <section class="section-primary">

        <div class="p-4 space-y-4 border border-gray-200 rounded-lg sm:space-y-6 md:space-y-8 md:p-6 lg:flex-nowrap">

            <h2 class="text-2xl titles md:text-4xl">Завешивание наружных углов</h2>

            <p class="md:text-2xl">Для предотвращения образования щелей после усушки и усадки сруба в компании Русь
                Бревенчатая применяют методику создания поднутрения, т.е. зазора по оси бревен. Этот зазор выбирается в
                нижней части бревна по всей его длине, причем с торцов он чуть меньше (5-8 мм вместе с высотой
                завешивания наружных углов), а, в невидимых частях венца, чуть больше (10-15 мм).</p>

            <div class="flex flex-col gap-3 sm:gap-4 sm:flex-row sm:flex-wrap lg:gap-8">

                <div class="max-w-75 md:max-w-90 lg:flex-1">
                    <img class="object-contain object-center w-full h-full"
                        src="{{ asset('images/tech/top/manual-1.webp') }}" alt="">
                </div>

                <div class="max-w-75 md:max-w-90 lg:flex-1">
                    <img class="object-contain object-center w-full h-full"
                        src="{{ asset('images/tech/top/manual-2.webp') }}" alt="">
                </div>

                <div class="sm:mt-3 lg:mt-0 lg:flex-1">
                    <p class="mb-2 md:mb-6">На рисунке показаны силы, действующие на бревно во время усушки и усадки.
                        Вследствие воздействия этих сил, в первую очередь, появляется трещина в нижней части бревна.
                    </p>
                    <p>За счет наличия зазора происходит мягкая посадка верхнего бревна на нижнее, а края паза даже
                        после расширения достаточно плотно примыкают к поверхности нижнего бревна.</p>

                    <a href="https://spbrb.ru/tech_zavesh_uglov.htm" target="_blank"
                        class="block mt-6 text-center md:mt-10 btn-secondary md:max-w-90">Подробнее о технологии</a>
                </div>
            </div>

            <div class="flex flex-col gap-4 xs:flex-row xs:flex-wrap xl:gap-10">
                <div
                    class="my-6 md:order-1 lg:order-none lg:basis-[45%] lg:mt-0 xl:flex xl:flex-col xl:justify-between xl:gap-6">
                    <div class="p-6 bg-light-gray">
                        <p class="mb-4 text-xl font-bold">Совет от генерального директора</p>

                        <p>Применение продольного паза в нижней части венцов, получившего название «поднутрение»,
                            исключает необходимость регулярного подконопачивания сруба дома или бани. Обратите внимание,
                            что для предотвращения попадания влаги между венцами, на торцах перерубов этот зазор
                            уменьшают с 10…15 до 5 мм. Наличие зазора «поднутрение» можно легко проверить на торцах
                            венцов, образующих дверные и оконные проемы.</p>
                    </div>

                    <div class="hidden xl:block">Наш специально продуманный шаг оградит стены вашего дома от негативных
                        последствий усадки. Серповидные зазоры между брёвнами в дальнейшем закрываться столярными
                        изделиями.</div>
                </div>

                <div class="xs:order-2 sm:basis-[35%] sm:flex sm:items-end md:basis-full xl:hidden">Наш специально
                    продуманный шаг оградит стены вашего дома от негативных последствий усадки. Серповидные зазоры
                    между брёвнами в дальнейшем закрываться столярными изделиями.</div>

                <div
                    class="flex max-w-36 sm:max-w-full sm:basis-[20%] md:ml-auto lg:ml-0 lg:items-start lg:mt-[3.8%] xl:basis-[18%] xl:items-end">
                    <img class="object-contain mt-auto lg:mt-0" src="{{ asset('images/tech/top/demo-1.webp') }}"
                        alt="">
                </div>

                <div class="max-w-72 sm:max-w-full sm:basis-[40%] lg:basis-[30%] xl:basis-[28%]">
                    <img class="object-cover object-left-bottom xl:h-full"
                        src="{{ asset('images/tech/top/demo-2.webp') }}" alt="">
                </div>
            </div>

        </div>

    </section>

    <section class="section-primary">

        <div class="p-4 space-y-10 border border-gray-200 rounded-lg md:space-y-8 md:p-6 lg:space-y-12">

            <div class="space-y-4 sm:space-y-6 md:space-y-8">
                <h2 class="text-2xl titles md:text-4xl">Торцевое соединение бревен в чашках перерубов с помощью
                    металлических стяжек.</h2>
                <p class="md:text-2xl">Стяжка - оцинкованная шпилька длиной около полуметра с резьбою на обоих концах.
                    Шпилька укладывается в узкий продольный пропил, проходящий поперек стыка бревен. На концах пропил
                    имеет специальные пазы в виде треугольных призм.</p>
            </div>

            <div class="space-y-6 md:space-y-8 lg:space-y-12">

                <div class="flex flex-col gap-10 md:flex-row">
                    <div class="flex flex-col gap-8 sm:flex-row sm:gap-4 md:flex-col md:flex-1 md:gap-10">
                        <div class=" sm:flex-1 md:flex-auto">
                            <p class="mb-4 text-xl font-bold md:mb-6">Плюсы использования стяжек:</p>
                            <ul class="ml-3 space-y-4 md:space-y-6"
                                style="list-style-image: url('{{ asset('images/tech/green-dot.png') }}')">
                                <li class="pl-1">С обоих концов на шпильку насаживаются оцинкованные металлические
                                    шайбы, а поверх них накручиваются оцинкованные гайки.</li>
                                <li class="pl-1">Гайки в ходе монтажа сруба с усилием закручиваются, в результате
                                    получается плотное соединение, которое обеспечит плотную стыковку брёвен в углах.
                                </li>
                                <li class="pl-1">Обеспечивается большая площадь соприкосновения шайбы с древесиной,
                                    соответственно получается на порядок меньшее передаваемое давление.</li>
                                <li class="pl-1">Оцинкованный металл практически не подвержен коррозии и не вызовет
                                    поражения древесины.</li>
                            </ul>
                        </div>
                        <div class="sm:flex-1 md:flex-auto md:w-3/4 lg:max-w-80">
                            <x-user.tech-carousel :total_slides="4" image_path="images/tech/slides/tech-slide-" />
                        </div>
                    </div>

                    <div class="flex flex-col gap-10 sm:flex-row md:flex-1 lg:max-w-140">
                        <div>
                            <img src="{{ asset('images/tech/second/manual-3.webp') }}" alt="">
                        </div>

                        <div class="md:hidden">
                            <img src="{{ asset('images/tech/second/demo-3.webp') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="md:flex md:gap-10">
                    <div class="hidden md:block md:flex-1 lg:max-w-140">
                        <img src="{{ asset('images/tech/second/demo-3.webp') }}" alt="">
                    </div>

                    <div class="space-y-4 md:space-y-6 md:flex-1">
                        <p class="titles">Применение данной методики - достаточно сложная система.</p>
                        <p>Для закладки шпильки нужно сделать узкий и глубокий паз, его стенки должны быть вертикальны
                            и иметь строго заданные размеры. Изготовление пазов, в виде треугольных призм, также требуют
                            опыта и сноровки.</p>
                        <p>Шпилька должна быть достаточно глубоко утоплена в древесину, поскольку над шпилькой делается
                            паз под шип лежащего выше бревна.
                            С другой стороны, в нижней части бревна нужно выпилить чашку, а в ней ещё оставить шип,
                            причём этот шип находится на обоих стыкуемых брёвнах.</p>
                        <a href="https://spbrb.ru/tech_stjagka.htm"
                            class="block text-center btn-secondary max-w-100">Подробнее о технологии</a>
                    </div>
                </div>


            </div>
        </div>

    </section>

    <section class="section-primary">

        <div class="p-4 space-y-10 border border-gray-200 rounded-lg md:space-y-8 md:p-6">

            <div class="space-y-4 sm:space-y-6 md:space-y-8">
                <h2 class="text-2xl titles md:text-4xl">Рубка сруба в канадскую чашку. Создание затесов при рубке в
                    канадскую чашку.</h2>
                <p class="md:text-2xl">Классическая канадская технология рубки, обеспечивает самозаклинивание щелей в
                    перерубе, появляющихся при усушке и усадке сруба. Альтернатива классической русской рубке.</p>
            </div>

            <div class="space-y-10 md:space-y-8">
                <div class="flex flex-col gap-10 md:gap-8 md:flex-row">
                    <div class="md:flex-1">
                        <div class="md:mb-8">
                            <p class="mb-4 text-xl font-bold md:mb-6">Преимущества технологии:</p>
                            <ul class="ml-3 space-y-4 md:space-y-6"
                                style="list-style-image: url('{{ asset('images/tech/green-dot.png') }}')">
                                <li class="pl-1">Отличается высокой точностью и качеством. Позволяет создавать сложные
                                    формы и конструкции, что расширяет возможности для архитекторов и дизайнеров.</li>
                                <li class="pl-1">Строительство происходит быстрее, чем при использовании традиционных
                                    методов, что сокращает время проекта.</li>
                                <li class="pl-1">Конструкции, созданные таким образом, отличаются надёжностью и
                                    долговечностью.</li>
                            </ul>
                        </div>
                        <div class="hidden space-y-6 md:block md:flex-1 xl:hidden">
                            <div class="md:max-w-60">
                                <img src="{{ asset('images/tech/third/demo-6.webp') }}" alt="">
                            </div>
                            <p class="text-2xl font-bold">Основным отличием канадской чашки является наличие затеса.</p>
                            <a href="https://spbrb.ru/tech_canadsk_zates.htm" target="_blank"
                                class="block text-center btn-secondary md:max-w-90">Подробнее о технологии</a>
                        </div>

                    </div>

                    <div
                        class="flex flex-col gap-4 sm:flex-row md:flex-col md:flex-1 md:max-w-100 xl:max-w-210 xl:gap-10 xl:flex-row">
                        <div>
                            <img src="{{ asset('images/tech/third/demo-4.webp') }}" alt="">
                        </div>

                        <div>
                            <img src="{{ asset('images/tech/third/demo-5.webp') }}" alt="">
                        </div>
                    </div>

                    <a href="https://spbrb.ru/tech_canadsk_zates.htm" target="_blank"
                        class="hidden text-center sm:block md:hidden btn-secondary">Подробнее о
                        технологии</a>

                    <div class="hidden gap-4 sm:flex md:hidden">
                        <p class="flex-1 block text-xl font-bold">Основным отличием канадской чашки является наличие
                            затеса.</p>
                        <div class="flex-1">
                            <img src="{{ asset('images/tech/third/demo-6.webp') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-3 md:gap-10 xl:flex-row">

                    <div class="md:order-1 xl:flex-1 xl:flex xl:flex-col xl:justify-between">
                        <div class="hidden xl:flex xl:gap-6">

                            <div class="flex flex-col justify-between flex-1">
                                <p class="text-xl font-bold">Основным отличием канадской чашки является наличие затеса.
                                </p>
                                <a href="https://spbrb.ru/tech_canadsk_zates.htm" target="_blank"
                                    class="block text-center btn-secondary">Подробнее о технологии</a>
                            </div>

                            <div class="max-w-60">
                                <img src="{{ asset('images/tech/third/demo-6.webp') }}" alt="">
                            </div>
                        </div>
                        <p class="">На рисунках вы можете ознакомиться со строительством сруба при рубке
                            в русскую и канадскую чашку для круглого бревна, более традиционного для России.</p>
                    </div>

                    <div class="grid gap-3 xs:grid-cols-2 sm:grid-cols-3 md:max-w-220">

                        @for ($i = 4; $i <= 9; $i++)
                            <div @class(['hidden' => $i >= 7, 'xs:block' => $i >= 7])>
                                <img src="{{ asset('images/tech/third/manual-' . $i . '.webp') }}" alt="">
                            </div>
                        @endfor
                    </div>

                    <div class="mt-4 space-y-6 sm:hidden">
                        <p class="text-xl font-bold">Основным отличием канадской чашки является наличие затеса.</p>
                        <div class="max-w-60">
                            <img src="{{ asset('images/tech/third/demo-6.webp') }}" alt="">
                        </div>
                        <a href="https://spbrb.ru/tech_canadsk_zates.htm" target="_blank"
                            class="block text-center btn-secondary md:max-w-90">Подробнее о технологии</a>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="section-primary">

        <div class="p-4 space-y-8 border border-gray-200 rounded-lg md:p-6">

            <div class="flex flex-col gap-10 sm:flex-row">
                <div class="space-y-4 sm:space-y-6 md:space-y-8 sm:flex-1">
                    <h2 class="text-2xl titles md:text-4xl">Использования шипа в чашке при канадской технологии рубки.
                    </h2>
                    <p class="md:text-2xl">Шип является усовершенствованием классической канадской рубки, он
                        обеспечивает большую жесткость конструкции сруба, а главное, уменьшает "продуваемость" угла и
                        делает дом более теплым.</p>
                </div>

                <div class="md:hidden sm:flex-1">
                    <img src="{{ asset('images/tech/fouth/fourth-1.webp') }}" alt="">
                </div>
            </div>

            <div class="sm:flex sm:flex-col sm:gap-10 md:flex-row">
                <div class="hidden md:block md:max-w-142 md:flex-1">
                    <img src="{{ asset('images/tech/fouth/fourth-1.webp') }}" alt="">
                </div>

                <div class="flex flex-col gap-10 md:flex-1">
                    <div class="p-6 space-y-6 bg-light-gray">
                        <p class="mb-4 text-xl font-bold">Совет от генерального директора</p>

                        <p>Комплексный подход при изготовлении срубов позволяет получить крепкие и теплые дома и бани.
                        </p>

                        <p>Обязательно сформулируйте для себя технические условия, которые вы позже предъявите
                            строителям. Если вы не хотите иметь щелей в углах дома, то необходимо использование затесов
                            и шипов при изготовлении чашек, а также металлических стяжек при торцевом соединении бревен.
                        </p>

                        <p>Если вы не хотите иметь щелей между бревнами в стенах, примените технологию завешивания
                            наружных углов, используйте зазор «поднутрение», задайте минимальную величину продольных
                            пазов в накрывающих венцах (обычно не менее 8-10 см).</p>
                    </div>

                    <a href="https://spbrb.ru/tech_canadsk_ship.htm" target="_blank"
                        class="block text-center btn-secondary md:max-w-90">Подробнее о технологии</a>
                </div>
            </div>

            <div class="md:flex md:gap-10 md:items-start lg:justify-between">

                <div class="flex flex-col gap-6 sm:gap-10 md:flex-1 xl:max-w-200">
                    <p>Шип (курдюк) и, соответственно, паз для него затруднительно сделать одним топором, здесь нужна
                        математическая точность, качественный инструмент и виртуозное владение им. У рубщиков компании
                        Русь Бревенчатая присутствуют все три указанных компонента.
                    </p>

                    <div>
                        <img src="{{ asset('images/tech/fouth/fourth-2.webp') }}" alt="">
                    </div>
                </div>

                <div class="hidden md:block md:flex-1 md:max-w-80 xl:max-w-150">
                    <img src="{{ asset('images/tech/fouth/fourth-3.webp') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="section-primary">

        <div class="p-4 space-y-6 border border-gray-200 rounded-lg md:space-y-10 xl:space-y-12 md:p-6">

            <div class="space-y-4 sm:space-y-6 md:space-y-8">
                <h2 class="text-2xl titles md:text-4xl">Рубка в норвежскую чашку. Лафет или полуовальное бревно.</h2>
                <p class="md:text-2xl">Традиционная скандинавская технология строительства деревянных домов. Лафет
                    представляет собой бревно, обтесанное с двух противоположных сторон, что придает стенам дома плоскую
                    внутреннюю и внешнюю поверхность, сохраняя при этом естественную текстуру дерева.</p>
            </div>

            <div class="md:flex md:gap-10">
                <div
                    class="flex flex-col gap-8 sm:flex-row sm:flex-wrap sm:justify-between md:flex-col md:flex-nowrap md:flex-1">
                    <div class="sm:order-1 sm:basis-[46%] md:order-none md:max-w-80">
                        <img src="{{ asset('images/tech/bottom/bottom-1.webp') }}" alt="">
                    </div>

                    <a href="https://spbrb.ru/tech_lafet.htm" target="_blank"
                        class="block text-center btn-secondary md:max-w-90 sm:order-2 sm:flex-1 md:order-none">Подробнее
                        о технологии</a>

                    <div class=" sm:basis-[46%]">
                        <p class="mb-4 text-xl font-bold md:mb-6">Преимущества стен из лафета:</p>
                        <ul class="ml-3 space-y-4 md:space-y-6"
                            style="list-style-image: url('{{ asset('images/tech/green-dot.png') }}')">
                            <li class="pl-1">Лафет сочетает в себе традиционный внешний вид бревенчатого дома с более
                                гладкими и аккуратными линиями, придавая постройке индивидуальность и привлекательность.
                            </li>
                            <li class="pl-1">Лафет и норвежская рубка обеспечивают отличную теплоизоляцию. Плотное
                                соединение брёвен минимизирует теплопотери, что позволяет дому сохранять тепло
                                даже в суровых климатических условиях.</li>
                            <li class="pl-1">Внутренние и внешние поверхности лафета готовы к финишной отделке
                                и требуют минимальной обработки, что ускоряет процесс строительства и уменьшает затраты
                                на отделочные материалы.</li>
                        </ul>
                    </div>
                </div>

                <div class="hidden md:block md:flex-1 max-w-140">
                    <img src="{{ asset('images/tech/bottom/bottom-2.webp') }}" alt="">
                </div>
            </div>

            <div class="flex flex-col gap-10 md:flex-row">
                <div class="md:max-w-130 md:flex-1">
                    <img src="{{ asset('images/tech/bottom/bottom-3.webp') }}" alt="">
                </div>

                <div class="sm:text-xl md:flex-1 md:text-2xl">
                    Одним из главных преимуществ норвежской рубки является высокая устойчивость к деформациям. Благодаря
                    особому профилю брёвен и точному соединению, сруб меньше подвержен скручиванию, усадке
                    и растрескиванию. Это делает дома, построенные по этой технологии, чрезвычайно прочными
                    и долговечными.
                </div>
            </div>

            <div class="flex flex-col gap-6 sm:gap-10 md:gap-6 md:flex-row lg:hidden">
                <div class="md:order-1 md:flex-1">
                    <p class="mb-6">Процесс создания лафета включает в себя удаление коры и обрезку бревна до нужной
                        длины. Затем бревно обрабатывается на специальном станке, который снимает верхний слой
                        древесины, делая его плоским. В результате получается бревно с двумя плоскими сторонами и двумя
                        округлыми. Существующие антисептики смогут надежно уберечь Ваши стены, оставив Вашему взору всю
                        фактуру дерева.</p>

                    <p>Характерные угловые соединения добавляют строению стильный, несколько архаичный вид, который
                        особенно ценится знатоками деревянного зодчества.</p>
                </div>
                <div class="max-w-52 md:flex-1">
                    <img src="{{ asset('images/tech/bottom/bottom-4.webp') }}" alt="">
                </div>
            </div>

            <div class="md:flex md:gap-10 lg:items-start">
                <div class="md:flex-1">
                    <div class="hidden lg:flex lg:gap-6">
                        <div class="max-w-52 lg:flex-1 lg:hidden xl:block">
                            <img src="{{ asset('images/tech/bottom/bottom-4.webp') }}" alt="">
                        </div>

                        <div class="lg:flex-1">
                            <p class="mb-4">Процесс создания лафета включает в себя удаление коры и обрезку бревна до
                                нужной длины. Затем бревно обрабатывается на специальном станке, который снимает верхний
                                слой древесины, делая его плоским. В результате получается бревно с двумя плоскими
                                сторонами и двумя округлыми. Существующие антисептики смогут надежно уберечь Ваши стены,
                                оставив Вашему взору всю фактуру дерева.</p>

                            <p>Характерные угловые соединения добавляют строению стильный, несколько архаичный вид,
                                который особенно ценится знатоками деревянного зодчества.</p>
                        </div>
                    </div>

                    <p class="mb-6 lg:mt-6">Мы тщательно подбираем древесину, учитывая особенности каждого бревна, и следуем всем тонкостям
                        традиционной технологии. Наши дома — это не просто строения, это комфортное и долговечное жилье,
                        которое сохранит тепло и уют на долгие годы.</p>

                    <p class="md:text-2xl">Если Вам сложно определиться, какой тип бревна Вам выбрать: круглый или лафет, напоминаем, что Вы
                        можете их объединить, сделав внешние стены из кругляка, а внутренние - из лафета.</p>
                </div>

                <div class="hidden md:block md:flex-1 lg:max-w-130">
                    <img src="{{ asset('images/tech/bottom/bottom-5.webp') }}" alt="">
                </div>
            </div>
        </div>

    </section>

    <div class="text-xl font-bold section-primary sm:text-2xl">
        В заключение необходимо добавить, что в нашей компании вы можете заказать сруб по любой технологии: простая русская чашка, канадская чашка с затёсом, канадская чашка с затёсом и шипом, норвежская чашка (она также включает и затёсы и шипы) - выбор за вами, мы же постараемся дать вам наиболее точную характеристику каждого метода, чтобы вы могли принять обдуманное и взвешенное решение.
    </div>

    <livewire:pageform />

    @include('user.partials.call-form')

    @include('user.partials.articles')



</x-user-layout>
