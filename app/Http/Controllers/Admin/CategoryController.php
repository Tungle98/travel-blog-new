<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::query()->latest()->paginate('10');
        return view('admin.pages.category.index',compact('categories'));
    }
    public function create()
    {
        return view('admin.pages.category.store');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['image'] = $request->hasFile('image') ? $this->uploadCover($request->file('image')) : null;
        Category::create($data);
        return redirect()->route('admin.category.index')->with('message','Tạo danh mục mới thành công');
    }

    private function uploadCover($cover)
    {
        $coverName = 'images/category/' . rand(1, 1000) . '_' . time() . '_category' . '.' . $cover->getClientOriginalExtension();

        $cover->move(public_path('images/category/'), $coverName);
        return  $coverName;

    }

public function delete($id)
{
    $category = Category::query()->findOrFail($id);
    $category->delete();

    return redirect()->route('admin.category.index')->with('message','Xóa danh mục thành công');
}
}
