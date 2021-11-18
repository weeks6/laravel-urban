<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
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

    public function store(Request $request)
    {
        if (Gate::allows('create-posts')) {

            $this->validate($request, [
                'title' => ['required'],
                'content' => ['required'],
            ]);

            $user = Auth::user();

            Post::create([
                'title' => $request->title,
                'content' => $request->content,
                'author_id' => $user->id,
            ]);

            return redirect()->name('admin');
        } else {
            return redirect()->name('home');
        }
    }
}
