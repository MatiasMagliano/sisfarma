<section>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-adminlte-input name="name" label="{{ __('formularios.name-label') }}"
                placeholder="{{ __('formularios.name-placeholder') }}" fgroup-class="col-md-6" enable-old-support />
        </div>

        <div>
            <x-adminlte-input name="email" label="{{ __('formularios.email') }}"
                placeholder="{{ __('formularios.email-placeholder') }}" fgroup-class="col-md-6" type="email"
                enable-old-support />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-adminlte-button label="{{ __('Save') }}" theme="success" type="submit" />
        </div>
    </form>
</section>
