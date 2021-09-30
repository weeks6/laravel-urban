@extends('layout.app')
@section('content')
    <div class="content__wrapper">
        <h1>Регистрация</h1>
        <form action="/register" class="i-form" >
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="i-label">
                    ФИО
                    <input type="text" class="form-control" required>
                </label>
            </div>
            <div class="form-group">
                <label class="i-label">
                    Email
                    <input type="email" class="form-control"  required>
                </label>
            </div>
            <div class="form-group">
                <label class="i-label">
                    Пароль
                    <input type="password" class="form-control"  required>
                </label>
            </div>
            <div class="form-group">
                <label class="i-label">
                    Повторите пароль
                    <input type="password" class="form-control"  required>
                </label>
            </div>
            <button type="submit" class="btn btn-default">Зарегистрироваться</button>
        </form>
    </div>
@endsection