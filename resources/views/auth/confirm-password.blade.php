<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Пожалуйста, подтвердите доступ с помощью пароля.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-admin.input-label for="password" :value="__('Пароль')" />

            <x-admin.text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            :is_hidable="true" />

            <x-admin.input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-admin.primary-button>
                {{ __('Подтвердить') }}
            </x-admin.primary-button>
        </div>
    </form>
</x-guest-layout>
