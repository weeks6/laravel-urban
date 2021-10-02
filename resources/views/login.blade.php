@extends('layout.app')
@section('content')
    <div class="content__wrapper">
        <h1>Вход</h1>
        <form action="{{ route('login') }}" class="i-form" method="POST">
            @csrf
            @method('POST')
            <div class="form-group @error('email') has-error has-feedback @enderror">
                <label class="i-label">
                    Email
                    <input type="email" name="email" class="form-control">
                </label>

                @error('email')
                    <span class="help-block">
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
                    <span class="help-block">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-default">Войти</button>
        </form>
    </div>
@endsection
