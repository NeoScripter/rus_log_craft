<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Удалить пользователя') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('После удаления вашей учетной записи все ее ресурсы и данные будут безвозвратно удалены. Перед удалением аккаунта не забудьте скачать всю необходимую информацию.') }}
        </p>
    </header>

    <x-admin.danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Удалить пользователя') }}</x-admin.danger-button>

    <x-admin.modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Вы уверены что хотите удалить данную учетную запись?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('После удаления вашей учетной записи все ее ресурсы и данные будут безвозвратно удалены. Пожалуйста, введите свой пароль, чтобы подтвердить окончательное удаление аккаунта.') }}
            </p>

            <div class="mt-6">
                <x-admin.input-label for="password" value="{{ __('Пароль') }}" class="sr-only" />

                <x-admin.text-input
                    id="password"
                    name="password"
                    type="password"
                    class="block w-3/4 mt-1"
                    placeholder="{{ __('Пароль') }}"
                />

                <x-admin.input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="flex justify-end mt-6">
                <x-admin.secondary-button x-on:click="$dispatch('close')">
                    {{ __('Отмена') }}
                </x-admin.secondary-button>

                <x-admin.danger-button class="ms-3">
                    {{ __('Удалить пользователя') }}
                </x-admin.danger-button>
            </div>
        </form>
    </x-modal>
</section>
