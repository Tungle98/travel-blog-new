<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    public function index()
    {
        $reviews  = Review::query()->latest()->paginate('10');
        return view('admin.pages.review.list-review',compact('reviews'));
    }

    public function store(Request $request)
    {
        Review::updateOrCreate(['name' => $request->name],
            ['content' => $request['content'],'status' => $request->status]);
        return redirect()->route('admin.review.index')->with('message', 'Tạo review thành công!!');;
    }
}
