<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function listBlog()
    {
        $blogs = Blog::query()->where('status',1)->latest()->paginate('10');
        return view('frontend.pages.blog.list-blog',compact('blogs'));
    }

    public function detailBlog($slug)
    {
        $blog = Blog::query()->where('slug',$slug)->first();
        return view('frontend.pages.blog.detail-blog',compact('blog'));
    }
}
