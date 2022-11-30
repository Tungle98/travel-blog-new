<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $latest = Blog::query()->where('status',1)->latest()->take(6)->get();
        $popular = Blog::query()->where('status',1)->where('is_top',1)->latest()->take(9)->get();
        $slides  = Slide::query()->where('status',1)->latest()->take(4)->get();
        return view('frontend.pages.home',compact('popular','latest','slides'));
    }

    public function listCategory()
    {
        $listCategory = Category::query()->where('status',1)->latest()->paginate(6);
        return view('frontend.pages.category.list-category',compact('listCategory'));
    }
    public function detailCategory($slug)
    {
       $detailCategory= Category::query()->with('blogs')->where('slug',$slug)->first();
        return view('frontend.pages.category.detail-category',compact('detailCategory'));
    }

}
