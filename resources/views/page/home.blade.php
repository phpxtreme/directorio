@extends('base.base')
@section('content')
    <div class="row">
        <div class="col-sm-4 mb-3">
            <div class="card text-white bg-gradient-secondary rounded-0">
                <div class="card-header text-center">Header</div>
                <div class="card-body text-center">
                    <h1 class="card-title total-records">100</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-3">
            <div class="card text-white bg-gradient-secondary rounded-0">
                <div class="card-header text-center">Header</div>
                <div class="card-body text-center">
                    <h1 class="card-title total-records">200</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-3">
            <div class="card text-white bg-gradient-secondary rounded-0">
                <div class="card-header text-center">Header</div>
                <div class="card-body text-center">
                    <h1 class="card-title total-records">300</h1>
                </div>
            </div>
        </div>
    </div>
    <hr class="mt-0">
    <div class="row">
        <div class="col-sm-6 mb-3">
            <div class="card">
                <div class="card-header">Card Header</div>
                <table class="table table-sm table-striped">
                    <tbody>
                    @foreach($countries as $country)
                        <tr>
                            <td class="text-center">
                                <img src="{{ asset('images/flags/'.$country['flag'].'.png') }}" alt="{{ $country['name'] }}">
                            </td>
                            <td>
                                {{ $country['name'] }}
                            </td>
                            <td class="text-center">
                                {{ $country['code'] }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="card-footer text-right">
                    <a href="#">{{ __('general.07') }}</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-3">
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
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Card Header</div>
                <ul class="nav nav-tabs" role="tablist">
                    @foreach($prefixes as $country)
                        <li class="nav-item">
                            <a href="#{{ $country->flag }}" class="nav-link py-1 px-2 rounded-0 border-top-0 {{ $loop->first ? 'active' : '' }}" id="{{ $country->flag }}-tab" data-toggle="tab" role="tab" aria-controls="{{ $country->flag }}" aria-selected="{{ $loop->first ? 'true' : '' }}">
                                <img src="{{ asset('images/flags/'.$country->flag.'.png') }}" alt="{{ $country->name }}">
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content">
                    @foreach($prefixes as $country)
                        <div class="tab-pane show {{ $loop->first ? 'active' : '' }}" role="tabpanel" id="{{ $country->flag }}">
                            <table class="table table-sm table-striped">
                                <tbody>
                                @foreach($country->prefixes->take(10) as $prefix)
                                    <tr class="d-flex">
                                        <td class="col-sm-10">
                                            {{ $prefix->name }}
                                        </td>
                                        <td class="col-sm-2">
                                            <span class="text-primary">
                                                (+{{ ($country->code) }})
                                            </span>
                                            {{ $prefix->prefix }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
                <div class="card-footer text-right">
                    <a href="#">{{ __('general.07') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection