@extends('adminlte::page')

@section('content_header')
    {{-- BREADCRUMBS PATH --}}
    <div class=" text-sm border-bottom">
        {{ Breadcrumbs::render('userprofile') }}
    </div>

    {{-- MAIN HEADER w/optional plus button--}}
    <x-page-header
        header="{{__('User profile')}}"
        back_route="home"/>
@endsection

@section('plugins.Toastr', true)

@section('content')
    <div class="container pt-3 pb-3">
        <div class="card">
            <div class="card-header">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Profile Information') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __("Update your account's profile information and email address.") }}
                </p>
            </div>
            <div class="card-body">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Update Password') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Ensure your account is using a long, random password to stay secure.') }}
                </p>
            </div>
            <div class="card-body">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Delete Account') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                </p>
            </div>
            <div class="card-body">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
@stop

@section('footer')
    @include('vendor.adminlte.partials.footer.content')
@stop
