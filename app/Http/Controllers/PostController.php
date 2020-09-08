<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'power' => 'required',
            'defence' => 'required',
            'description' => 'required',
            'image' => ['required', 'image']
        ]);

        $imagePath = request('image')->store('uploads', 'public');



        auth()->user()->posts()->create([
            'title' => $data['title'],
            'power' => $data['power'],
            'defence' => $data['defence'],
            'description' => $data['description'],
            'image' => $imagePath
        ]);

        return redirect('/profile/' . auth()->user()->id );
    }
}
