@extends('layout.app')



@section('title', 'Городские проекты - Регистрация')
@section('content')
    <div class="content__wrapper">
        <h1>Регистрация</h1>
        <form action="{{ route('register') }}" class="i-form" method="POST">
            @csrf
            @method('POST')
            <div class="form-group @error('email') has-error has-feedback @enderror">
                <label class="i-label">
                    Email
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                </label>
                @error('email')
                    <span class="help-block text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group @error('password') has-error has-feedback @enderror">
                <label class="i-label">
                    Пароль
                    <input type="password" name="password" class="form-control">
                </label>

                @error('password')
                    <span class="help-block text-danger">
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
            <button type="submit" class="btn btn-primary mt-4">Зарегистрироваться</button>
        </form>
    </div>
@endsection
