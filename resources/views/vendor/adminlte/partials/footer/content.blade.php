<div class="row">
    <div class="col">
        <a href="{{ route('home') }}">
            <img class="image img-fluid img-thumbnail" src="{{ asset('img/logo-sisfarma_white_small.png') }}"
                alt="SISFARMA">
        </a>
    </div>
    <div class="col">
        <div class="float-right d-none d-sm-inline-block">
            Versión: <b>{{ env('APP_VERSION') }}</b>
            <br>
            PHP: v{{ phpversion() }} | LARAVEL: v{{ App::VERSION() }}
        </div>
    </div>
</div>
