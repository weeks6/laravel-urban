<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
    * Оснвной метод регистрации
    */
    public function store(Request $request)
    {
        /**
         * Валидация полей регистрации, если поле не соответсвует указанным правилам,
         * Laravel автоматические вернется обратно на страницу регистрации с информацией об ошибках
         * Дальнейший код не исполняется.
         * На взод передатеся объект запроса, который мы сделали на сервер
         */
        $this->validate($request, [
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ]);

        /**
         * Валидация прошла успешно
         * Создаем пользователя, необходимые данные берем также из запроса
         * Пароль необходиом хэшировать (условно переделать в рандомную строку для безопасности)
         */
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        /**
         * Далее авторизуем пользователя используя фасад Auth
         */
        Auth::login($user);

        /**
         * Перенаправляем пользователя на путь с именем home
         */
        return redirect()->route('home')->with('success', 'Вы успешно зарегистрировались.');
    }
}
