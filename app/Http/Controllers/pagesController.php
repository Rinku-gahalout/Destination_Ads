<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Faq;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function services() {
        return view('service');
    }

    public function blog() {
        $blogs = Blog::where('category', 'blog')->latest()->paginate(3);
        return view('blogs.blog' , compact('blogs'));
    }

    public function blogDetails($category, $blog_url) {
        $blog = Blog::where('category', $category)->where('blog_url', $blog_url)->firstOrFail();
        $faqs = Faq::where('blog_id', $blog->id)->get();
        $recentPosts = Blog::where('category', $category)->where('id', '!=', $blog->id)->latest()->take(5)->get();
        return view('blogs.blog-details', compact('blog', 'faqs', 'recentPosts'));
    }
}