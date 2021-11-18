@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <form action="{{ route('post_create') }}" method="post" class="i-form">
            @csrf
            @method('PUT')

            <div class="form-group @error('email') has-error has-feedback @enderror">
                <label class="i-label">
                    Заголовок
                    <input type="text" name="title" class="form-control">
                </label>

                @error('title')
                    <span class="help-block">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="i-label">
                    Пост
                    <textarea class="form-control" name="content"></textarea>
                </label>
                @error('content')
                    <span class="help-block">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-1">Создать</button>

        </form>
    </div>
@endsection
