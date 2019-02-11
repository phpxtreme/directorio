<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('general.00') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/0.ico') }}"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('stylesheet')
</head>
<body class="container p-0">
    <header>
        <nav class="navbar navbar-expand-sm bg-gradient-success navbar-dark py-2">
            <div class="container-fluid">
                <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
                    <i class="fa fa-phone-square fa-3x"></i>&nbsp;{{ __('general.00') }}
                </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-user fa-lg"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container border-right border-left p-4">
        <form action="">
            <div class="input-group">
                <input class="search form-control rounded-0" type="text" placeholder="{{ __('general.01') }}" autofocus>
                <div class="input-group-prepend">
                    <button class="btn btn-success">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="alphabetic-tab" data-toggle="tab" role="tab" aria-controls="alphabetic" href="#alphabetic">
                            <i class="fa fa-sort-alpha-asc"></i>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="alphabetic" role="tabpanel" aria-labelledby="alphabetic-tab">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action border-top-0">
                                {{ __('general.03') }}
                                <span class="pull-right">
                                    <span class="badge badge-secondary">0</span>
                                </span>
                            </a>
                            @foreach(range('A', 'Z') as $indice)
                                <a href="#" class="list-group-item list-group-item-action">
                                    {{ $indice }}
                                    <span class="pull-right">
                                        <span class="badge badge-secondary">0</span>
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane" id="institutions" role="tabpanel" aria-labelledby="institutions-tab">
                        <div class="list-group"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
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
                @yield('content')
            </div>
        </div>
    </main>
    <footer class="py-2 bg-gradient-success text-center">
        <a href="#" class="back-to-top text-white"></a>
        <a href="{{ route('home') }}" class="text-white"></a>
    </footer>
    @yield('javascript')
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>