<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('main.online_shop') }}: @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('index') }}">{{ __('main.online_shop') }}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li @routeactive('index')><a href="{{ route('index') }}">{{ __('main.all_products') }}</a></li>
                <li @routeactive('categor*')><a href="{{ route('categories.index') }}">{{ __('main.categories') }}</a></li>
                <li><a href="{{ route('locale', __('main.set_lang')) }}">{{ __('main.set_lang') }}</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ route('login') }}">{{ __('auth.login') }}</a></li>
                    <li><a href="{{ route('register') }}">{{ __('auth.register') }}</a></li>
                @endguest
                @auth
                    @admin
                        <li><a href="{{ route('admin.dashboard') }}">{{ __('main.admin_panel') }}</a></li>
                    @endadmin
                    <li><a href="{{ route('logout') }}">{{ __('auth.logout') }}</a></li>
                @endauth

            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        @if(session()->has('success'))
            <p class="alert alert-success">{{ session()->get('success') }}</p>
        @elseif(session()->has('warning'))
            <p class="alert alert-warning">{{ session()->get('warning') }}</p>
        @endif
        @yield('content')
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
{{--            <div class="col-lg-6"><p>Категорії товарів</p>--}}
{{--                <ul>--}}
{{--                    @foreach($categories as $category)--}}
{{--                        <li><a href="{{ route('category', $category->code) }}">{{ $category->__('name') }}</a></li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6"><p>Найпопулярніші товари</p>--}}
{{--                <ul>--}}
{{--                    @foreach($bestProducts as $bestProduct)--}}
{{--                        <li><a href="{{ route('product', [$bestProduct->category->code, $bestProduct->code]) }}">{{ $bestProduct->name }}</a></li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </div>
</footer>
</body>
</html>
