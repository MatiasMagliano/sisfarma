@extends('adminlte::page')

@section('title', 'HOME')

@section('content_header')
    {{-- BREADCRUMBS PATH --}}
    <div class=" text-sm border-bottom">
        {{ Breadcrumbs::render('home') }}
    </div>
    <h1 class="m-0 text-dark">{{ __('Dashboard') }}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    CONTENIDO DEL PANEL PRINCIPAL
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')
    @include('vendor.adminlte.partials.footer.content')
@stop
