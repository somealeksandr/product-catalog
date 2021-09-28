@extends('layouts.app')

@section('content')
    <h2>Панель постачальника</h2>
    <ul>
        <a href="#">
            <li>Мій профайл</li>
        </a>
        <a href="{{ route('categories') }}">
            <li>Всі товари</li>
        </a>
        <a href="#">
            <li>Мої товари</li>
        </a>
        <a href="#">
            <li>Додати товар</li>
        </a>
    </ul>
@endsection
