<div>

    @if ($show)
        <div wire:transition class="fixed inset-0 z-50 w-screen h-screen overflow-y-auto sm:pt-[5vh] bg-black/50">

            <div x-data @click.away="$dispatch('close-form')" class="w-full px-4 py-6 mx-auto bg-white md:px-10 md:py-16 max-w-200" >

                <div class="flex items-center justify-between mb-2 md:mb-4">
                    <div class="font-bold titles text-2xl md:text-4xl !text-green-primary">{{ __('livewire/pageform.Заказать звонок') }}</div>

                    <button type="button" @click="$dispatch('close-form')" class="w-4 h-4 md:w-5 md:h-5">
                        <img class="object-cover object-center w-full h-full" src="{{ asset('images/svgs/close-popup.svg') }}" alt="Close popup button">
                    </button>
                </div>

                <p class="mb-3 md:text-lg md:mb-5">{{ __('livewire/pageform.Мы перезвоним вам в удобное для вас время') }}</p>

                <form wire:submit.prevent="submitForm" class="space-y-4 md:flex-1 lg:space-y-6">

                    <div class="">
                        <label for="name" class="sr-only">{{ __('livewire/pageform.Ваше ФИО') }}</label>
                        <input wire:model.blur="full_name" type="text" id="name"
                            class="w-full px-6 py-4 input-field"
                            placeholder="{{ __('livewire/pageform.Ваше ФИО') }}" required>
                        @error('name') <span class="block text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div class="">
                        <label for="phone" class="sr-only">{{ __('livewire/pageform.Телефон для связи') }}</label>
                        <input wire:model.blur="phone"  type="tel" id="phone"
                            class="w-full px-6 py-5 input-field"
                            placeholder="{{ __('livewire/pageform.Телефон для связи') }}" required>
                        @error('phone') <span class="block text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div class="">
                        <label for="email" class="sr-only">{{ __('livewire/pageform.Email') }}</label>
                        <input wire:model.blur="email" type="email" id="email"
                            class="w-full px-6 py-5 input-field" placeholder="{{ __('livewire/pageform.Email') }}"
                            required>
                        @error('email') <span class="block text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div class="">
                        <label for="message" class="sr-only">{{ __('livewire/pageform.Сообщение') }}</label>
                        <textarea wire:model.blur="message" id="message" rows="4" class="w-full px-6 py-5 input-field"
                            placeholder="{{ __('livewire/pageform.Сообщение') }}" required></textarea>
                        @error('message') <span class="block text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <div class="flex items-start gap-6 me-4">
                            <input wire:model="checkbox" id="checkbox-popup" type="checkbox" value="1"
                                class="w-6 h-6 bg-gray-100 border-gray-300 rounded-sm text-green-primary focus:ring-green-primary focus:ring-2">
                            <label for="checkbox-popup" class="text-sm font-bold text-gray-900">{{ __('livewire/pageform.Нажимая кнопку отправить') }}</label>
                        </div>
                        @error('checkbox') <span class="block text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <button wire:loading.attr="disabled" type="submit" class="w-full btn-primary">
                        <span wire:loading.remove wire:target="submitForm">{{ __('livewire/pageform.Отправить') }}</span>
                        <span wire:loading wire:target="submitForm">{{ __('livewire/pageform.Отправляется') }}...</span>
                    </button>

                </form>
            </div>

        </div>
    @endif
</div>
