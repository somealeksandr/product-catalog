@extends('layouts.app')

@section('content')
    <h2>Панель адміністратора</h2>
    <ul>
        <a href="{{ route('admin.products.index') }}">
            <li>Товари</li>
        </a>
        <a href="{{ route('admin.categories.index') }}">
            <li>Категорії</li>
        </a>
        <a href="#">
            <li>Атрибути товару</li>
        </a>
        <a href="#">
            <li>Товари постачальників</li>
        </a>
        <a href="{{ route('admin.users.index') }}">
            <li>Користувачі</li>
        </a>
    </ul>
@endsection
