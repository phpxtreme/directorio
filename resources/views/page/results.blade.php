@extends('base.base')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-1 pb-1">
            <li class="breadcrumb-item active">
                <small>
                    <i class="fa fa-angle-double-right"></i> {{ __('general.04') }}
                    <strong>{{ __('general.03') }}</strong>
                </small>
            </li>
            <li class="ml-auto">
                <small>
                    <i class="fa fa-hourglass-half"></i>
                    {{ round((microtime(true) - LARAVEL_START), 4) }} ms
                </small>
            </li>
        </ol>
    </nav>
    <div class="alert alert-danger" role="alert">
        <i class="fa fa-info-circle"></i>
        &nbsp;No se encuentran resultados para la búsqueda.
    </div>
@endsection