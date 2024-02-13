<section class="space-y-6">
    <x-adminlte-button label="{{ __('Delete Account') }}" data-toggle="modal" data-target="#modalDeleteAccount"
        class="bg-danger" />

    <div class="modal fade" id="modalDeleteAccount" tabindex="-1" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-gradient-danger">
                    <h5 class="modal-title">{{ __('Account deletion confirmation') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                    @csrf
                    @method('delete')

                    <div class="modal-body">
                        <h2 class="text-gray-700 text-md">
                            {{ __('Are you sure you want to delete your account?') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                        </p>

                        <div class="mt-6">
                            <x-adminlte-input id="password" name="password" label="{{ __('formularios.password') }}"
                                type="password">
                                <x-slot name="bottomSlot">
                                    <x-input-error :messages="$errors->userDeletion->get('password')" />
                                </x-slot>
                            </x-adminlte-input>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" id="guardarAprobada"
                            class="mr-auto btn btn-danger">{{ __('Delete Account') }}</button>
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ __('Cancel') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if ($errors->userDeletion->isNotEmpty())
        <script src="http://sisfarma.sisfarma/vendor/jquery/jquery.min.js"></script>
        <script src="http://sisfarma.sisfarma/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">
            $("#modalDeleteAccount").modal("show");
        </script>
    @endif
</section>
