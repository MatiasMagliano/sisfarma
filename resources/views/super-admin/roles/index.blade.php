@extends('adminlte::page')

@section('content_header')
    {{-- BREADCRUMBS PATH --}}
    <div class=" text-sm border-bottom">
        {{ Breadcrumbs::render('rolemanagement') }}
    </div>

    {{-- MAIN HEADER w/optional plus button --}}
    <x-page-header header="{{ __('Manage Roles') }}" plus_button="{{ __('Add New Role') }}" route="roles.create"
        back_route="home" />
@endsection


@section('plugins.Sweetalert2', true)
@section('plugins.Toastr', true)

@section('content')
    <div class="container pt-3">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive-lg">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($roles as $role)
                                <tr>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <form action="{{ route('roles.destroy', $role->id) }}" method="post"
                                            id="frm_borrar-{{ $role->id }}">
                                            @csrf
                                            @method('DELETE')

                                            <a href="{{ route('roles.show', $role->id) }}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-search"></i>
                                                <span class="hide">{{ __('Show') }}</span>
                                            </a>

                                            @if ($role->name != 'Super Admin')
                                                @can('edit-role')
                                                    <a href="{{ route('roles.edit', $role->id) }}"
                                                        class="btn btn-primary btn-sm">
                                                        <i class="fas fa-pen"></i>
                                                        <span class="hide">{{ __('Edit') }}</span>
                                                    </a>
                                                @endcan

                                                @can('delete-role')
                                                    @if ($role->name != Auth::user()->hasRole($role->name))
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            {{-- return confirm('Do you want to delete this role?'); --}}
                                                            onclick="Swal.fire({ text: '{{ __('Do you want to delete this role?') }}', showCancelButton: true}).then((result) => {if (result.isConfirmed) {$('#frm_borrar-' + {{ $role->id }}).submit();}});">
                                                            <i class="fas fa-trash"></i>
                                                            <span class="hide">{{ __('Delete') }}</span>
                                                        </button>
                                                    @endif
                                                @endcan
                                            @endif

                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="3">
                                    <span class="text-danger">
                                        <strong>{{ __('No Role Found!') }}</strong>
                                    </span>
                                </td>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{ $roles->links() }}

            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('vendor.adminlte.partials.footer.content')
@stop
