<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'published')
            ->latest()
            ->get();

        return view('home', compact('posts'));
    }
}