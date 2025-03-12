<section class="py-8 section-primary lg:py-15 md:py-12"
    style="background: linear-gradient(180deg, rgba(229, 233, 236, 0.00) 0%, #E5E9EC 100%);">

    <div class="md:flex md:gap-10 lg:gap-32">

        <div class="md:flex md:flex-1 md:flex-col">
            <p class="mb-4 text-2xl titles md:mb-6 md:text-4xl"> {{ __('livewire/pageform.Хотите узнать больше') }}</p>
            <p class="mb-8 md:mb-6">{{ __('livewire/pageform.Оставьте контактные данные') }}</p>

            <div class="hidden md:mt-auto md:block md:max-w-140 md:flex-1">
                <img class="object-cover object-center w-full h-full" src="{{ asset('images/home/webform.webp') }}"
                    alt="">
            </div>
        </div>

        <form wire:submit.prevent="submitForm" class="space-y-4 md:flex-1 lg:space-y-6">

            <div class="relative">
                <label for="name-page" class="sr-only">{{ __('livewire/pageform.Ваше ФИО') }}</label>
                <input wire:model.blur="full_name" type="text" id="name-page" class="w-full px-6 py-5 input-field"
                    placeholder="{{ __('livewire/pageform.Ваше ФИО') }}" required>
                @error('full_name')
                    <span class="absolute block text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative">
                <label for="phone-page" class="sr-only">{{ __('livewire/pageform.Телефон для связи') }}</label>
                <input wire:model.blur="phone" type="tel" id="phone-page" class="w-full px-6 py-5 input-field"
                    placeholder="{{ __('livewire/pageform.Телефон для связи') }}" required>
                @error('phone')
                    <span class="absolute block text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative">
                <label for="email-page" class="sr-only">{{ __('livewire/pageform.Email') }}</label>
                <input wire:model.blur="email" type="email" id="email-page" class="w-full px-6 py-5 input-field"
                    placeholder="{{ __('livewire/pageform.Email') }}" required>
                @error('email')
                    <span class="absolute block text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative">
                <label for="message-page" class="sr-only">{{ __('livewire/pageform.Сообщение') }}</label>
                <textarea wire:model.blur="message" id="message-page" rows="4" class="w-full px-6 py-5 input-field"
                    placeholder="{{ __('livewire/pageform.Сообщение') }}" required></textarea>
                @error('message')
                    <span class="absolute block text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative">
                <div class="flex items-start gap-6 me-4">
                    <input wire:model="checkbox" id="checkbox-page" type="checkbox" value="1"
                        class="w-6 h-6 bg-gray-100 border-gray-300 rounded-sm text-green-primary focus:ring-2 focus:ring-green-primary">
                    <label for="checkbox-popup"
                        class="text-sm font-bold text-gray-900">{{ __('livewire/pageform.Нажимая кнопку отправить') }}<a
                            href="{{ route('user.privacy-policy') }}" class="underline">{{ __('livewire/pageform.Политикой в отношении обработки персональных данных') }}</a></label>
                </div>
                @error('checkbox')
                    <span class="absolute block text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <button wire:loading.attr="disabled" type="submit" class="w-full btn-primary">
                <span wire:loading.remove wire:target="submitForm">{{ __('livewire/pageform.Отправить') }}</span>
                <span wire:loading wire:target="submitForm">{{ __('livewire/pageform.Отправляется') }}...</span>
            </button>

        </form>

        <div class="mt-8 md:hidden">
            <img src="{{ asset('images/home/webform.webp') }}" alt="">
        </div>

    </div>

</section>
