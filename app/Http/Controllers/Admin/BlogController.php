<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blogs = Blog::query()->latest()->paginate(10);
        return view('admin.pages.blog.index', compact('blogs'));
    }
    public function create()
    {
        $categories = Category::query()->get();
        return view('admin.pages.blog.store', compact('categories'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['image'] = $request->hasFile('image') ? $this->uploadCover($request->file('image')) : null;
        $result= Blog::create($data);
        $result->categories()->attach($request->category_id);
        return redirect()->route('admin.blog.index')->with('message','Tạo bài viết mới thành công');
    }

    private function uploadCover($cover)
    {
        $coverName = 'images/blog/' . rand(1, 1000) . '_' . time() . '_blog' . '.' . $cover->getClientOriginalExtension();

       $cover->move(public_path('images/blog/'), $coverName);
        return  $coverName;

    }
    private function removeCoverFromStorage($coverName)
    {

    }

    public function delete($id)
    {
        $blog = Blog::query()->findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blog.index')->with('message','Xóa bài viết thành công');
    }
}
