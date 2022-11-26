<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SlideController extends Controller
{
    //
    public function index()
    {
        $slides = Slide::query()->where('status',1)->take(4)->get();
return view('admin.pages.slide.list-slide',compact('slides'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = $request->hasFile('image') ? $this->uploadCover($request->file('image')) : null;
        Slide::create($data);
        return redirect()->route('admin.slide.index')->with('message','Tạo slide mới thành công');
    }

    private function uploadCover($cover)
    {
        $coverName = 'images/slide/' . rand(1, 1000) . '_' . time() . '_slide' . '.' . $cover->getClientOriginalExtension();

        $cover->move(public_path('images/slide/'), $coverName);
        return  $coverName;

    }
}
