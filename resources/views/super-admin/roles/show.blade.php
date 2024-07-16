@extends('adminlte::page')

@section('content_header')
    {{-- BREADCRUMBS PATH --}}
    <div class=" text-sm border-bottom">
        {{ Breadcrumbs::render('showrolemanagement', $role) }}
    </div>

    <x-page-header
            header="{{__('Role Information')}}"
            back_route="roles.index"/>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>{{__('Name')}}:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $role->name }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="roles" class="col-md-4 col-form-label text-md-end text-start"><strong>{{__('Permissions')}}:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            @if ($role->name=='Super Admin')
                                <span class="badge bg-primary">{{__('All')}}</span>
                            @else
                                @forelse ($rolePermissions as $permission)
                                    <span class="badge bg-primary">{{ $permission->name }}</span>
                                @empty
                                @endforelse
                            @endif
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    @include('vendor.adminlte.partials.footer.content')
@stop
