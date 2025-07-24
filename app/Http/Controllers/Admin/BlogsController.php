<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\Faq;

class BlogsController extends Controller
{
    public function addblog(){
        return view('wl-admin.blog.addblog');
    }

    public function storeblog(Request $request){
        $validator = Validator::make($request->all(), [
            'language' => 'required',
            'category' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'title_tag' => 'required',
            'blog_url' => 'required|unique:blogs,blog_url',
            'main_headline' => 'required|string|max:255',
            'blog_description' => 'required|string',
            'tag' => 'required|string|max:255',
            'image' => 'nullable|image',
            'alt_tag' => 'required|string|max:255',
        ]);
        

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imagePath = null;
        if ($request->hasFile('image')) {
                $fileName = time() . '.' . $request->image->extension();
                $path = public_path('images/blog_img');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
                $request->image->move($path, $fileName);
                $imagePath = 'images/blog_img/' . $fileName;
        }

        // Store blog
        $blog = new Blog();
        $blog->language = $request->language;
        $blog->category = $request->category;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->title_tag = $request->title_tag;
        $blog->blog_url =  Str::slug($request->blog_url);
        $blog->main_headline = $request->main_headline;
        $blog->blog_description = $request->blog_description;
        $blog->tag = $request->tag;
        $blog->image = $imagePath;
        $blog->alt_tag = $request->alt_tag;

        try {
            if (!$blog->save()) {
                return redirect()->back()->with('error', 'Blog failed to save.');
            }
        } catch (\Exception $e) {
            Log::error('Blog save failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Exception: ' . $e->getMessage());
        }
        // Store FAQs if available
        if ($request->has('question') && is_array($request->question)) {
            foreach ($request->question as $index => $question) {
                if (!empty($question)) {
                    Faq::create([
                        'blog_id' => $blog->id,
                        'question' => $question,
                        'answer' => $request->answer[$index] ?? '',
                    ]);
                }
            }
        }

        $redirectTarget = $request->input('redirect_to');

        if ($redirectTarget === 'dashboard') {
            return redirect()->route('admin.dashboard')->with('success', 'Blog stored successfully.');
        } elseif ($redirectTarget === 'showblog') {
            return redirect()->route('admin.blogs')->with('success', 'Blog stored successfully.');
        } else {
            return redirect()->route('admin.blogs')->with('success', 'Blog stored successfully.');
        }
    }

    public function showblog(Request $request){
        $query = Blog::with('faqs')
            ->where('category', 'blog') 
            ->latest();

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('main_headline', 'like', '%' . $request->search . '%')
                ->orWhere('blog_url', 'like', '%' . $request->search . '%')
                ->orWhere('blog_description', 'like', '%' . $request->search . '%'); // ✅
            });
        }

        $blogs = $query->paginate(10)->appends($request->all());
        return view('wl-admin.blog.showblog', compact('blogs'));
    }

    public function editblog($id){
        $blog = Blog::with('faqs')->findOrFail($id);
        return view('wl-admin.blog.editblog', compact('blog'));
    }

        public function updateblog(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'language' => 'required',
            'category' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'title_tag' => 'required',
            'blog_url' => 'required|unique:blogs,blog_url,' . $id,
            'main_headline' => 'required|string|max:255',
            'blog_description' => 'required|string',
            'tag' => 'required|string|max:255',
            'image' => 'nullable|image',
            'alt_tag' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $path = public_path('images/blog_img');

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $request->image->move($path, $fileName);
            $imagePath = 'images/blog_img/' . $fileName;

        // Delete old image
            if (!empty($blog->image)) {
                $oldImagePath = public_path($blog->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $blog->image = $imagePath; // ✅ Only set this if new image exists
        }

        $blog->language = $request->language;
        $blog->category = $request->category;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->title_tag = $request->title_tag;
        $blog->blog_url =  Str::slug($request->blog_url);
        $blog->main_headline = $request->main_headline;
        $blog->blog_description = $request->blog_description;
        $blog->tag = $request->tag;
        $blog->alt_tag = $request->alt_tag;

        try {
            if (!$blog->save()) {
                return redirect()->back()->with('error', 'Blog failed to update.');
            }
        } catch (\Exception $e) {
            Log::error('Blog update failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Exception: ' . $e->getMessage());
        }

        // Update FAQs
        Faq::where('blog_id', $blog->id)->delete();

        if ($request->has('question') && is_array($request->question)) {
            foreach ($request->question as $index => $question) {
                if (!empty($question)) {
                    Faq::create([
                        'blog_id' => $blog->id,
                        'question' => $question,
                        'answer' => $request->answer[$index] ?? '',
                    ]);
                }
            }
        }

    $redirectUrl = $request->input('redirect');

    return redirect($redirectUrl ?: route('admin.blogs'))
        ->with('success', 'Blog updated successfully.');

    }

        public function destroyblog(Request $request, $id){
        $blog = Blog::findOrFail($id);
        Faq::where('blog_id', $blog->id)->delete();
        if ($blog->blog_img && file_exists(public_path($blog->blog_img))) {
            unlink(public_path($blog->blog_img));
        }
        $blog->delete();
        
        $redirectUrl = $request->input('redirect', route('admin.blogs'));
        return redirect($redirectUrl)->with('success', 'Blog deleted successfully.');
    }

}
