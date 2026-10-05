<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\ContactMessage;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        if ($username === 'admin' && $password === 'admin123') {
            session(['admin_logged_in' => true]);

            return redirect('/admin/dashboard');
        }

        return back()->with('error', 'Invalid username or password.');
    }

    public function dashboard()
    {
        if (!session('admin_logged_in')) {
            return redirect('/admin');
        }

        $totalPosts = Post::count();

        $publishedPosts = Post::where('status', 'published')->count();

        $totalMessages = ContactMessage::count();

        return view('admin.dashboard', compact(
            'totalPosts',
            'publishedPosts',
            'totalMessages'
        ));
    }

    public function logout()
    {
        session()->forget('admin_logged_in');

        return redirect('/admin');
    }
}
