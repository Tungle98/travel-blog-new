<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function index()
    {
        $roles = Role::query()->latest()->get();
        $permissions = Permission::query()->get();
        return view('admin.pages.role.list-role', compact('roles','permissions'));
    }
    public function store(Request $request)
    {
        $role = Role::updateOrCreate(['name' => $request->name],
            ['guard_name' => $request->guard_name]);
        $role->givePermissionTo($request->permission_id);
        return redirect()->route('admin.role.index')->with('message', 'Tạo vai trò thành công!!');
    }
    public function delete($id)
    {
        $role = Role::query()->findOrFail($id);
        $role->delete();

        return redirect()->route('admin.role.index')->with('message','Xóa vai trò thành công');
    }
}
