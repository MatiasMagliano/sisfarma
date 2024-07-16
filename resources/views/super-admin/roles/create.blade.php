@extends('adminlte::page')

@section('content_header')
    {{-- BREADCRUMBS PATH --}}
    <div class=" text-sm border-bottom">
        {{ Breadcrumbs::render('createrolemanagement') }}
    </div>

    {{-- MAIN HEADER w/optional plus button --}}
    <x-page-header header="{{ __('Add New Role') }}" back_route="roles.index" />
@endsection

@section('plugins.Select2', true)

@section('content')
    <div class="container pt-3">

        <div class="card">
            <div class="card-body">
                <form action="{{ route('roles.store') }}" method="post">
                    @csrf

                    <div>
                        <div>
                            <x-adminlte-input name="name" label="{{ __('Name') }}" enable-old-support />
                        </div>
                    </div>

                    <div>
                        <div>
                            <x-adminlte-select2 id="permissions" name="permissions[]" label="{{ __('Permissions') }}" :config="$config" aria-label="{{ __('Permissions') }}" multiple enable-old-suppor>
                                <x-slot name="prependSlot">
                                    <div class="input-group-text bg-gradient-cyan">
                                        <i class="fas fa-tag"></i>
                                    </div>
                                </x-slot>

                                {{-- SELECT CONTENT --}}
                                @forelse ($permissions as $permission)
                                    <option value="{{ $permission->id }}"
                                        {{ in_array($permission->id, old('permissions') ?? []) ? 'selected' : '' }}>
                                        {{ $permission->name }}
                                    </option>
                                @empty
                                @endforelse

                                {{-- EXTRA INFORMATION --}}
                                <x-slot name="bottomSlot">
                                    <span
                                        class="text-sm text-muted pl-3">{{ __('Control-click for multiple selection.') }}</span>
                                </x-slot>
                            </x-adminlte-select2>
                        </div>
                    </div>

                    <div>
                        <div>
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="{{ __('Save') }}">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('vendor.adminlte.partials.footer.content')
@stop
