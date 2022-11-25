<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    //
    public function index()
    {
        $permissions = Permission::query()->latest()->get();
        return view('admin.pages.permission.list-permission', compact('permissions'));
    }
    public function store(Request $request)
    {
        Permission::updateOrCreate(['name' => $request->name],
            ['guard_name' => $request->guard_name]);
        return redirect()->route('admin.permission.index')->with('message', 'Tạo quyền thành công!!');
    }
}
