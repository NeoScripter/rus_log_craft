<x-user-layout>

    <div class="inline-flex items-center gap-4 section-primary">
        <div>Главная</div>
        <div class="mt-1">
            <img src="{{ asset('images/svgs/black-line.svg') }}" alt="">
        </div>
        <div>Услуги</div>
    </div>

    <section class="section-primary">

        <h1 class="mb-8 text-3xl font-bold titles sm:mb-6 md:mb-14 md:text-6xl">Услуги компании “Русь Бревенчатая”</h1>

        <div x-data class="space-y-6 sm:space-y-8 md:space-y-14">

            <div id="design" class="flex flex-col gap-6 pt-8 border-t border-gray-200 sm:pt-10 sm:flex-row sm:gap-4 md:gap-10 sm:scroll-mt-5rem lg:scroll-mt-12rem xl:md:scroll-mt-15rem">

                <div
                    class="flex flex-col gap-6 sm:flex-1 sm:justify-between md:gap-14 md:justify-start lg:max-w-[27.5rem] xl:flex-row xl:gap-10 xl:max-w-[45rem]">

                    <div class="text-xl titles !capitalize md:text-2xl xl:w-60">Проектирование</div>

                    <div class="xl:max-w-[27.5rem]">
                        <x-user.services-carousel :total_slides="5" image_path="images/services/design/design-" />
                    </div>

                </div>

                <div class="space-y-6 sm:flex-1 md:space-y-10 md:text-2xl">

                    <p>Мы создаем уникальные проекты, учитывая все ваши пожелания и особенности участка, чтобы
                        обеспечить идеальное сочетание функциональности и комфорта. Наши архитекторы имеют необходимый
                        опыт проектирования, как простых, так и сложных объектов.</p>

                    <div>Стоимость покупки/разработки проекта: бесплатно (при заказе сруба).
                        <br>
                        Стоимость готовых архитектурных проектов: 150 руб. за кв.м
                        <br>
                        Стоимость индивидуального проектирования: 280 руб. за кв.м
                    </div>

                    <div class="flex flex-col gap-4 lg:flex-row lg:items-center">
                        <a href="" class="block text-center btn-primary lg:flex-1">Наш каталог проектов</a>

                        <button @click="$dispatch('open-form')" class="btn-secondary lg:flex-1">Заказать проект</button>
                    </div>
                </div>
            </div>


            <div id="saunas" class="flex flex-col gap-6 pt-8 border-t border-gray-200 sm:pt-10 sm:flex-row sm:gap-4 md:gap-10 sm:scroll-mt-5rem lg:scroll-mt-12rem xl:md:scroll-mt-15rem">

                <div
                    class="flex flex-col gap-6 sm:flex-1 sm:justify-between md:gap-14 md:justify-start lg:max-w-[27.5rem] xl:flex-row xl:gap-10 xl:max-w-[45rem]">

                    <div class="text-xl titles !capitalize md:text-2xl">Дома и бани "под ключ"</div>

                    <div class="xl:max-w-[27.5rem]">
                        <x-user.services-carousel :total_slides="5" image_path="images/services/saunas/saunas-" />
                    </div>

                </div>

                <div class="space-y-6 sm:flex-1 md:space-y-10 md:text-2xl">

                    <p>Мы строим дома и бани под ключ, обеспечивая полный цикл работ — от проектирования до отделки,
                        чтобы вы могли сразу наслаждаться своим новым уютным пространством.</p>

                    <div>Исходя из ваших пожеланий, вы можете выбрать уже готовый деревянный дом из нашего каталога или
                        заказать индивидуальный проект дома из бревна. Мы выполняем работу под ключ с учетом всех ваших
                        потребностей по планировке и особенностей эксплуатации дома.</div>

                    <div class="flex flex-col gap-4 lg:flex-row lg:items-center">
                        <button @click="$dispatch('open-form')" class="btn-secondary lg:flex-1">Заказать обратный звонок</button>
                    </div>
                </div>
            </div>

            <div id="huts" class="flex flex-col gap-6 pt-8 border-t border-gray-200 sm:pt-10 sm:flex-row sm:gap-4 md:gap-10 sm:scroll-mt-5rem lg:scroll-mt-12rem xl:md:scroll-mt-15rem">

                <div
                    class="flex flex-col gap-6 sm:flex-1 sm:justify-between md:gap-14 md:justify-start lg:max-w-[27.5rem] xl:flex-row xl:gap-10 xl:max-w-[45rem]">

                    <div class="text-xl titles !capitalize md:text-2xl">Изготовление срубов</div>

                    <div class="xl:max-w-[27.5rem]">
                        <x-user.services-carousel :total_slides="4" image_path="images/services/huts/hut-" />
                    </div>

                </div>

                <div class="space-y-6 sm:flex-1 md:space-y-10 md:text-2xl">

                    <p>Мы занимаемся профессиональным изготовлением срубов из высококачественной древесины, гарантируя прочность и долговечность каждой конструкции. Наши срубы обеспечивают отличную теплоизоляцию и создают комфортный микроклимат в вашем будущем доме или бане.</p>

                    <div>Цена сруба дома или бани: от 8 000 руб. за кв.м</div>

                    <div class="flex flex-col gap-4 lg:flex-row lg:items-center">
                        <button @click="$dispatch('open-form')" class="block text-center btn-primary lg:flex-1">Заказать сруб</button>

                        <button class="btn-secondary lg:flex-1">Калькулятор стоимости сруба</button>
                    </div>
                </div>
            </div>

            <div id="foundations" class="flex flex-col gap-6 pt-8 border-t border-gray-200 sm:pt-10 sm:flex-row sm:gap-4 md:gap-10 sm:scroll-mt-5rem lg:scroll-mt-12rem xl:md:scroll-mt-15rem">

                <div
                    class="flex flex-col gap-6 sm:flex-1 sm:justify-between md:gap-14 md:justify-start lg:max-w-[27.5rem] xl:flex-row xl:gap-10 xl:max-w-[45rem]">

                    <div class="text-xl titles !capitalize md:text-2xl">Строительство фундаментов</div>

                    <div class="xl:max-w-[27.5rem]">
                        <x-user.services-carousel :total_slides="5" image_path="images/services/foundations/foundation-" />
                    </div>

                </div>

                <div class="space-y-6 sm:flex-1 md:space-y-10 md:text-2xl">

                    <p>Мы предлагаем своим клиентам только монолитные бетонные фундаменты под ключ. <br> Важно, перед началом фундаментых работ иметь готовый проект дома и четкий план его строительства. Только после утверждения проекта и согласования его со строителями сруба (если проект был заказан на стороне) можно приступать к возведению бетонной конструкции. Не следует забывать об инженерных коммуникациях, особенно при заливке плиты. В этом случае в бетоне устанавливают так называемые "закладные" - специальные трубы, через которые будут подводиться кабели электроснабжения, трубы с водой и канализацией.</p>

                    <div>Цена строительства фундамента: от 5 000 руб. за куб.м бетона (без стоимости материалов)</div>

                    <div class="flex flex-col gap-4 lg:flex-row lg:items-center">
                        <button @click="$dispatch('open-form')" class="btn-secondary lg:flex-1">Заказать обратный звонок</button>
                    </div>
                </div>
            </div>

            <div id="roofs" class="flex flex-col gap-6 pt-8 border-t border-gray-200 sm:pt-10 sm:flex-row sm:gap-4 md:gap-10 sm:scroll-mt-5rem lg:scroll-mt-12rem xl:md:scroll-mt-15rem">

                <div
                    class="flex flex-col gap-6 sm:flex-1 sm:justify-between md:gap-14 md:justify-start lg:max-w-[27.5rem] xl:flex-row xl:gap-10 xl:max-w-[45rem]">

                    <div class="text-xl titles !capitalize md:text-2xl">Возведение крыш</div>

                    <div class="xl:max-w-[27.5rem]">
                        <x-user.services-carousel :total_slides="4" image_path="images/services/roofs/roofs-" />
                    </div>

                </div>

                <div class="space-y-6 sm:flex-1 md:space-y-10 md:text-2xl">

                    <p>Мы выполняем возведение крыш для бревенчатых домов и бань, используя надежные кровельные материалы и проверенные технологии для самых сложных конфигураций, чтобы обеспечить долговечность и защиту вашей постройки. Наша команда специалистов создает крыши, идеально подходящие по стилю и функциональности, гарантируя отличную тепло- и гидроизоляцию.</p>

                    <div>Стоимость работ по монтажу крыши: от 1 500 руб. за кв.м площади кровли (без стоимости материалов)</div>

                    <div class="flex flex-col gap-4 lg:flex-row lg:items-center">
                        <button @click="$dispatch('open-form')" class="btn-secondary lg:flex-1">Заказать обратный звонок</button>
                    </div>
                </div>
            </div>


            <div id="benches" class="flex flex-col gap-6 pt-8 border-t border-gray-200 sm:pt-10 sm:flex-row sm:gap-4 md:gap-10 sm:scroll-mt-5rem lg:scroll-mt-12rem xl:md:scroll-mt-15rem">

                <div
                    class="flex flex-col gap-6 sm:flex-1 sm:justify-between md:gap-14 md:justify-start lg:max-w-[27.5rem] xl:flex-row xl:gap-10 xl:max-w-[45rem]">

                    <div class="text-xl titles !capitalize md:text-2xl">Беседки, столы и скамейки</div>

                    <div class="xl:max-w-[27.5rem]">
                        <x-user.services-carousel :total_slides="4" image_path="images/services/benches/bench-" />
                    </div>

                </div>

                <div class="space-y-6 sm:flex-1 md:space-y-10 md:text-2xl">

                    <p>Строительная компания "Русь Бревенчатая" предлагает Вам проектирование, изготовление и монтаж  беседок, столы и скамейки из натуральной древесины, создавая уютные и долговечные элементы для вашего участка. По Вашему желанию могут быть предусмотрены: полное или частичное (с подветренной стороны) остекление беседок, размещение в них кирпичных или металлических печей, мангалов (барбекю) и даже теплые полы - для Вашего комфорта.</p>

                    <div>Наши изделия отличаются качеством и устойчивостью к погодным условиям, добавляя тепло и комфорт в любое пространство на свежем воздухе.</div>

                    <div>Цена "малых форм": от 8 000 руб.</div>

                    <div class="flex flex-col gap-4 lg:flex-row lg:items-center">
                        <button @click="$dispatch('open-form')" class="btn-secondary lg:flex-1">Заказать обратный звонок</button>
                    </div>
                </div>
            </div>

        </div>


    </section>

    <section class="section-primary">

        <h2 class="mb-4 text-2xl titles sm:mb-6 md:mb-8 md:text-4xl">Дополнительные услуги</h2>

        <div class="grid gap-4 xs:grid-cols-2 sm:gap-6 md:gap-y-8 lg:gap-x-8">


            <div class="p-4 rounded-xl border border-[#E5E3DB] flex flex-col justify-between gap-10 md:gap-16 lg:gap-18 xl:gap-24 transition-colors duration-300 group hover:bg-golden-primary">

                <div class="flex items-start justify-between gap-6">
                    <p class="text-xl font-bold tracking-wide !leading-[120%] text-dark-black md:text-2xl group-hover:text-white">Дополнительное утепление сруба</p>
                    <div class="w-2 h-2 rounded-sm bg-green-primary shrink-0 group-hover:bg-white"></div>
                </div>

                <div class="text-sm md:text-base group-hover:text-white">
                    Дополнительное утепление сруба улучшает теплоизоляцию и энергоэффективность вашего дома, предотвращая потери тепла и обеспечивая комфорт в любую погоду. Современные утеплители помогают создать надежный барьер от холода и влаги.
                </div>
            </div>

            <div class="p-4 rounded-xl border border-[#E5E3DB] flex flex-col justify-between gap-10 md:gap-16 lg:gap-18 xl:gap-24 transition-colors duration-300 group hover:bg-golden-primary">

                <div class="flex items-start justify-between gap-6">
                    <p class="text-xl font-bold tracking-wide !leading-[120%] text-dark-black md:text-2xl group-hover:text-white">Монтаж полов и межэтажных перекрытий</p>
                    <div class="w-2 h-2 rounded-sm bg-green-primary shrink-0 group-hover:bg-white"></div>
                </div>

                <div class="text-sm md:text-base group-hover:text-white">
                    Вы можете заказать у нас строительство утепленных полов и перекрытий между этажами, что обеспечивает прочность и стабильность внутренней структуры, создавая надежную основу для дальнейшей отделки. Используемые материалы и технологии гарантируют долговечность и высокую нагрузочную способность.
                </div>
            </div>


            <div class="p-4 rounded-xl border border-[#E5E3DB] flex flex-col justify-between gap-10 md:gap-16 lg:gap-18 xl:gap-24 transition-colors duration-300 group hover:bg-golden-primary">

                <div class="flex items-start justify-between gap-6">
                    <p class="text-xl font-bold tracking-wide !leading-[120%] text-dark-black md:text-2xl group-hover:text-white">Обсады, наличники, лестницы и др.</p>
                    <div class="w-2 h-2 rounded-sm bg-green-primary shrink-0 group-hover:bg-white"></div>
                </div>

                <div class="text-sm md:text-base group-hover:text-white">
                    Проектирование и установка обсад, наличников и лестниц добавляют завершенность и индивидуальность вашему интерьеру, а высококачественная отделка обеспечивает долговечность и эстетичный вид. Эти элементы изготавливаются с учетом вашего стиля и функциональных требований.
                </div>
            </div>

            <div class="p-4 rounded-xl border border-[#E5E3DB] flex flex-col justify-between gap-10 md:gap-16 lg:gap-18 xl:gap-24 transition-colors duration-300 group hover:bg-golden-primary">

                <div class="flex items-start justify-between gap-6">
                    <p class="text-xl font-bold tracking-wide !leading-[120%] text-dark-black md:text-2xl group-hover:text-white">Шлифовка и окрашивание рубленых стен</p>
                    <div class="w-2 h-2 rounded-sm bg-green-primary shrink-0 group-hover:bg-white"></div>
                </div>

                <div class="text-sm md:text-base group-hover:text-white">
                    Шлифовка рубленых стен придает поверхности идеальную гладкость, а окрашивание защищает древесину и подчеркивает её природную текстуру. Используемые покрытия обеспечивают долговечность и эстетичный внешний вид, сохраняя красоту вашего сруба.
                </div>
            </div>

        </div>

    </section>

    <livewire:pageform />

    @include('user.partials.call-form')

    @include('user.partials.articles')

</x-user-layout>
