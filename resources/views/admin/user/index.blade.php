@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <h1>Користувачі</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Ім'я
                </th>
                <th>
                    Прізвище
                </th>
                <th>
                    Роль
                </th>
                <th>
                    Пошта
                </th>
                <th>
                    Дії
                </th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->surname }}</td>
                    <td>
                        {{ \App\Models\User::ROLES[$user->role] }}
                    </td>
                    <td>{{ $user->email }}</td>
                    <td></td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                                <a class="btn btn-success" type="button"
                                   href="{{ route('admin.users.show', $user) }}">Відкрити</a>
                                <a class="btn btn-warning" type="button"
                                   href="{{ route('admin.users.edit', $user) }}">Редагувати</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Видалити"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
{{--        {{ $products->links('vendor.pagination.default') }}--}}
{{--        <a class="btn btn-success" type="button" href="{{ route('products.create') }}">Додати товар</a>--}}
    </div>
@endsection
