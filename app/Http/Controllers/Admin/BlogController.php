<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StoreBlogRequest;
use App\Http\Requests\Blog\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends BaseController
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(StoreBlogRequest $request)
    {
        Blog::create($request->validated());
        toast('Blog added successfully', 'success');
        return back();
    }


    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(UpdateBlogRequest $request,Blog $blog)
    {

        if ($request->hasFile('image') && $data = $blog->getRawOriginal('image')) {
            $this->deleteFile($data);
        }
        $blog->update($request->validated());
        toast('Blog updated successfully', 'success');
        return redirect(route('admin.blog.index'));
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        toast('Blog deleted successfully', 'success');
        return back();
    }
    
}
