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
<body class="container">
    <header>
        <nav class="navbar navbar-expand-sm bg-gradient-success navbar-dark py-2">
            <div class="container">
                <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
                    <i class="fa fa-phone-square fa-2x"></i>
                </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <form class="mx-2 my-auto d-inline w-100" action="">
                        <div class="input-group">
                            <input class="search form-control border-0 rounded-0" type="text" placeholder="{{ __('general.01') }}" autofocus>
                            <div class="input-group-prepend">
                                <button class="btn btn-light">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="badge badge-light">
                            @foreach($languages as $language)
                                <a href="{{ route('lang', [$language['flag']]) }}" title="{{ $language['name'] }}">
                                    <img src="{{ asset('images/flags/'.$language['flag'].'.png') }}" alt="">
                                </a>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container border-right border-left">
        <div class="row">
            <div class="col-sm-3 p-2">
                <div class="list-group">
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
            <div class="col-sm-9 border-left p-4">
                @yield('content')
            </div>
        </div>
    </main>
    <footer class="py-2 bg-gradient-success text-center">
        <a href="#" class="back-to-top text-white"></a>
        <div class="row">
            <div class="col-sm-12">
                <a href="{{ route('home') }}" class="text-white">EXAMPLE</a>
            </div>
        </div>
    </footer>
    @yield('javascript')
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>