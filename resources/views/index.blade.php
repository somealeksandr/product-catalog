@extends('layouts.app')

@section('title', 'Головна')

@section('content')
    <h1>{{ __('main.all_products') }}</h1>
    <form method="GET" action="{{ route('index') }}">
        <div class="filters row">
            <div class="col-sm-6 col-md-3">
                <label for="price_from">{{ __('main.price_from') }}
                    <input type="text" name="price_from" id="price_from" size="6" value="{{ request()->price_from }}">
                </label>
                <label for="price_to">{{ __('main.to') }}
                    <input type="text" name="price_to" id="price_to" size="6" value="{{ request()->price_to }}">
                </label>
            </div>
            <div class="col-sm-6 col-md-3">
                <button type="submit" class="btn btn-primary">{{ __('main.filter') }}</button>
                <a href="{{ route('index') }}" class="btn btn-warning">{{ __('main.reset') }}</a>
            </div>
        </div>
    </form>
    <div class="row">
        @foreach($products as $product)
            @include('layouts.card', compact('product'))
        @endforeach
    </div>
    {{ $products->links() }}
@endsection

