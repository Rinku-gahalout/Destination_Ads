<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use App\Models\Faq;

class AdminController extends Controller
{
    public function login(){
        return view('wl-admin.wl-auth.login');
    }
        public function authentication(Request $request){
        $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
        ]);
        $user = \App\Models\User::where('email', $request->email)->first();

        if ($user && $user->role === 'admin') {
           if (Auth::guard('admin')->attempt([
                'email' => $request->email,
                'password' => $request->password
            ])) {
                return redirect()->route('admin.dashboard')->with('success', 'Welcome to the dashboard!');
            }

            return back()->with('error', 'Invalid password.')->withInput();
        }

        return redirect()->route('admin.login')->with('error', 'Only admin users are allowed.')->withInput($request->only('email'));
    }
        public function dashboard(Request $request) {
        $query = Blog::with('faqs')->latest();
        if ($request->filled('category')) {
            $query->where('category', 'like', '%' . $request->category . '%');
        }
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('meta_title', 'like', '%' . $request->search . '%')
                ->orWhere('blog_url', 'like', '%' . $request->search . '%')
                ->orWhere('main_headline', 'like', '%' . $request->search . '%')
                ->orWhere('tag', 'like', '%' . $request->search . '%');
            });
        }
        $blogs = $query->paginate(10)->appends($request->all());
        return view('wl-admin.dashboard', compact('blogs'));
    }

        public function logout(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
