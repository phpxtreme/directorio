@extends('base.base')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-1 pb-1">
            <li class="breadcrumb-item active">
                <small>
                    <i class="fa fa-angle-double-right"></i> {{ __('general.05') }}
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
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <h6 class="card-header">
                    <i class="fa fa-search"></i>
                    Featured
                </h6>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <h6 class="card-header">
                    <i class="fa fa-clock-o"></i>
                    Featured
                </h6>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
@endsection