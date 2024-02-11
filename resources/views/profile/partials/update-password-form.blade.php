<section>
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-adminlte-input id="update_password_current_password" name="current_password"
                label="{{ __('formularios.current_password') }}" type="password" fgroup-class="col-md-6"
                autocomplete="current-password">
                <x-slot name="bottomSlot">
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" />
                </x-slot>
            </x-adminlte-input>
        </div>

        <div>
            <x-adminlte-input id="update_password_password" name="password" label="{{ __('formularios.new_password') }}"
                type="password" fgroup-class="col-md-6" autocomplete="new-password">
                <x-slot name="bottomSlot">
                    <x-input-error :messages="$errors->updatePassword->get('password')" />
                </x-slot>
            </x-adminlte-input>
        </div>

        <div>
            <x-adminlte-input id="update_password_password_confirmation" name="password_confirmation"
                label="{{ __('formularios.retype_password') }}" type="password" fgroup-class="col-md-6"
                autocomplete="new-password">
                <x-slot name="bottomSlot">
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" />
                </x-slot>
            </x-adminlte-input>
        </div>

        <div class="flex items-center gap-4">
            <x-adminlte-button label="{{ __('Save') }}" theme="success" type="submit" />
        </div>
    </form>
</section>
