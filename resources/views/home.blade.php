@extends('adminlte::page')

@section('title', 'HOME')

@section('content_header')
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

@section('js')
    @include('alerts')
@stop

@section('footer')
    @include('vendor.adminlte.partials.footer.content')
@stop
