<section class="py-8 section-primary md:py-12 lg:py-15"
    style="background: linear-gradient(180deg, rgba(229, 233, 236, 0.00) 0%, #E5E9EC 100%);">

    <div class="md:flex md:gap-10 lg:gap-32">

        <div class="md:flex-1 md:flex md:flex-col">
            <p class="mb-4 text-2xl titles md:mb-6 md:text-4xl">Хотите узнать больше о строительстве вашего будущего
                дома?</p>
            <p class="mb-8 md:mb-6">Оставьте свои контактные данные, и наш специалист свяжется с вами в ближайшее
                время. Ответим на все ваши вопросы и поможем сделать первый шаг к уютному и экологичному дому из
                бревна!</p>

            <div class="hidden md:block md:mt-auto md:max-w-140 md:flex-1">
                <img class="object-cover object-center w-full h-full" src="{{ asset('images/home/webform.webp') }}"
                    alt="">
            </div>
        </div>

        <form wire:submit.prevent="submitForm" class="space-y-4 md:flex-1 lg:space-y-6">

            <div class="relative">
                <label for="name-page" class="sr-only">Ваше ФИО</label>
                <input wire:model.blur="full_name" type="text" id="name-page"
                    class="w-full px-6 py-4 bg-transparent border rounded-md border-dim-gray" placeholder="Ваше ФИО"
                    required>
                @error('full_name')
                    <span class="absolute block text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative">
                <label for="phone-page" class="sr-only">Телефон для связи</label>
                <input wire:model.blur="phone" type="tel" id="phone-page"
                    class="w-full px-6 py-5 bg-transparent border rounded-md border-dim-gray"
                    placeholder="Телефон для связи" required>
                @error('phone')
                    <span class="absolute block text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative">
                <label for="email-page" class="sr-only">Email</label>
                <input wire:model.blur="email" type="email" id="email-page"
                    class="w-full px-6 py-5 bg-transparent border rounded-md border-dim-gray" placeholder="E-mail"
                    required>
                @error('email')
                    <span class="absolute block text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative">
                <label for="message-page" class="sr-only">Сообщение</label>
                <textarea wire:model.blur="message" id="message-page" rows="4"
                    class="w-full px-6 py-5 bg-transparent border rounded-md border-dim-gray" placeholder="Сообщение" required></textarea>
                @error('message')
                    <span class="absolute block text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative">
                <div class="flex items-start gap-6 me-4">
                    <input wire:model="checkbox" id="checkbox-page" type="checkbox" value="1"
                        class="w-6 h-6 bg-gray-100 border-gray-300 rounded-sm text-green-primary focus:ring-green-primary focus:ring-2">
                    <label for="checkbox" class="text-sm font-bold text-gray-900">Нажимая кнопку отправить, вы
                        соглашаетесь с Политикой в отношении обработки персональных данных , а так же с обработкой
                        персональных данных</label>
                </div>
                @error('checkbox')
                    <span class="absolute block text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <button wire:loading.attr="disabled" type="submit" class="w-full btn-primary">
                <span wire:loading.remove wire:target="submitForm">Отправить</span>
                <span wire:loading wire:target="submitForm">Отправляется...</span>
            </button>

        </form>

        <div class="mt-8 md:hidden">
            <img src="{{ asset('images/home/webform.webp') }}" alt="">
        </div>

    </div>

</section>
