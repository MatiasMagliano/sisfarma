@props(['header', 'text', 'plus_button', 'route', 'back_route'])

<div class="row pt-3">
    <div class="col-md-8">
        <h1 class="responsive-header">
            {{ $header }}
        </h1>
        @isset($text)
            <p class="text-muted">{{$text}}</p>
        @endisset
    </div>
    <div class="col-md-4">
        <div class="float-right">
            @isset($plus_button)
                @can(['create-role'])
                    <a href="{{ route($route) }}" role="button" class="btn btn-md btn-success">
                        <i class='fas fa-plus-circle'></i>
                        <span class="hide">{{ $plus_button }}</span>
                    </a>
                @endcan
                &nbsp;
            @endisset

            <a href="{{ route($back_route) }}" role="button" class="btn btn-md btn-secondary">
                <i class="fas fa-arrow-circle-left"></i>
                <span class="hide">{{ __('Back') }}</span>
            </a>
        </div>
    </div>
</div>
