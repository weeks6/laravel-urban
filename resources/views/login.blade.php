@extends('layout.app')
@section('content')
    <div class="content__wrapper">
        <h1>Вход</h1>
        <form action="/register" class="i-form" >
            @csrf
            @method('PUT')
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
            
            <button type="submit" class="btn btn-default">Войти</button>
        </form>
    </div>
@endsection