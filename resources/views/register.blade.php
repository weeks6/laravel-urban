@extends('layout.app')



@section('title', 'Городские проекты - Регистрация')
@section('content')
    <div class="content__wrapper">
        <h1>Регистрация</h1>
        <form action="{{ route('register') }}" class="i-form" method="POST">
            @csrf
            @method('POST')
            <div class="form-group @error('fio') has-error has-feedback @enderror">
                <label class="i-label">
                    ФИО
                    <input type="text" name="fio" class="form-control" value="{{ old('fio') }}">
                </label>

                @error('fio')
                    <span class="help-block">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group @error('email') has-error has-feedback @enderror">
                <label class="i-label">
                    Email
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                </label>
                @error('email')
                    <span class="help-block">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group @error('login') has-error has-feedback @enderror">
                <label class="i-label">
                    Логин
                    <input type="text" name="login" class="form-control" value="{{ old('login') }}">
                </label>

                @error('login')
                    <span class="help-block">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group @error('password') has-error has-feedback @enderror">
                <label class="       i-label">
                    Пароль
                    <input type="password" name="password" class="form-control">
                </label>

                @error('password')
                    <span class="help-block">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="i-label">
                    Повторите пароль
                    <input type="password" name="password_confirmation" class="form-control">
                </label>
            </div>

            <div class="form-group">
                <label class="i-label">
                    <input type="checkbox" name="user_agreement" required>
                    Согласие на обработку персональных данных
                </label>
            </div>
            <button type="submit" class="btn btn-primary mt-1">Зарегистрироваться</button>
        </form>
    </div>
@endsection
