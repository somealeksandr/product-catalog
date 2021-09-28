@extends('layouts.app')

@isset($user)
    @section('title', 'Редагувати користувача ' . $user->name)
@else
    @section('title', 'Створити користувача')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($user)
            <h1>Редагувати користувача <b>{{ $user->name }}</b></h1>
        @else
            <h1>Додати користувача</h1>
        @endisset
        <form method="POST" enctype="multipart/form-data"
              @isset($user)
              action="{{ route('admin.users.update', $user) }}"
              @else
              action="{{ route('admin.users.store') }}"
            @endisset
        >
            <div>
                @isset($user)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="name" class="col-sm-6 col-form-label">Ім'я: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'name'])
                        <input type="text" class="form-control" name="name" id="name"
                               value="@isset($user){{ $user->name }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="surname" class="col-sm-6 col-form-label">Прізвище: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'surname'])
                        <input type="text" class="form-control" name="surname" id="surname"
                               value="@isset($user){{ $user->surname }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="role" class="col-sm-6 col-form-label">Роль: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'role'])
                        <select name="role" id="role" class="form-control">
                            @foreach(\App\Models\User::ROLES as $role => $roleName)
                                <option value="{{ $role }}"
                                    {{ (old('role') ?: $user->role) === $role ? 'selected' : '' }}
                                >{{ $roleName }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="email" class="col-sm-6 col-form-label">Email: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'email'])
                        <input type="email" class="form-control" name="email" id="email"
                            value="@isset($user){{ $user->email }}@endisset">
                    </div>
                </div>
                <br>
                <button class="btn btn-success">Зберегти</button>
            </div>
        </form>
    </div>
@endsection
