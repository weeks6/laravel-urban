<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    //
    public function index(Request $request)
    {
        if (Gate::allows('view-admin-panel')) {
            return view('admin');
        } else {
            return redirect()->route('home');
        }
    }
}
