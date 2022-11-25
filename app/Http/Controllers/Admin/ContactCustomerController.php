<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerRequest;
use Illuminate\Http\Request;

class ContactCustomerController extends Controller
{
    //
    public function index()
    {
        $customers = CustomerRequest::query()->latest()->paginate(10);
        return view('admin.pages.contact.list-contact',compact('customers'));
    }
    public function listReview()
    {
        return view('admin.pages.review.list-review');
    }
}
