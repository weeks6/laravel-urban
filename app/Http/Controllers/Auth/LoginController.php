<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(Request $request)
    {
        $this->validate($request, [
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        Auth::attempt($request->only('email', 'password'));

        return redirect()->route('home');
    }
}
