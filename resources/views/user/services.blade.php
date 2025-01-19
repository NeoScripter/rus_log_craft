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

        <div class="space-y-6 sm:space-y-8 md:space-y-14">

            <div class="flex flex-col gap-6 pt-8 border-t border-gray-200 sm:pt-10 sm:flex-row sm:gap-4 md:gap-10">

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

                        <button class="btn-secondary lg:flex-1">Заказать проект</button>
                    </div>
                </div>
            </div>


            <div class="flex flex-col gap-6 pt-8 border-t border-gray-200 sm:pt-10 sm:flex-row sm:gap-4 md:gap-10">

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
                        <button class="btn-secondary lg:flex-1">Заказать обратный звонок</button>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-6 pt-8 border-t border-gray-200 sm:pt-10 sm:flex-row sm:gap-4 md:gap-10">

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
                        <a href="" class="block text-center btn-primary lg:flex-1">Заказать сруб</a>

                        <button class="btn-secondary lg:flex-1">Калькулятор стоимости сруба</button>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-6 pt-8 border-t border-gray-200 sm:pt-10 sm:flex-row sm:gap-4 md:gap-10">

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
                        <button class="btn-secondary lg:flex-1">Заказать обратный звонок</button>
                    </div>
                </div>
            </div>

        </div>


    </section>

    <livewire:pageform />

    @include('user.partials.call-form')

    @include('user.partials.articles')

</x-user-layout>
