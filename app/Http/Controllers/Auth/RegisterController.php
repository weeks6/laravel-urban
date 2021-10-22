<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
       public function store(Request $request)
       {
            // $this->validate($request, [
            //     'fio' => ['required'],
            //     'email' => ['required','email', 'unique:users'],
            //     'password' => ['required', 'confirmed'],
            //     'login' => ['required']
            // ]);

            User::create([
                'fio' => $request->fio,
                'email' => $request->email,
                'login' => $request->login,
                'password' => Hash::make($request->password)
            ]);

            // Auth::attempt($request->only('email', 'password'));

            return redirect()->route('home');

       }
}
