<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Dotenv\Parser\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::query()->get();
        $roles = Role::query()->get();
        return view('admin.pages.user.list-user', compact('users','roles'));
    }
    public function store(Request $request)
    {
        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "password" => Hash::make($request->password)
        ];
       $user =  User::create($data);
        $user->assignRole($request->role_id);
        return redirect()->route('admin.user.index')->with('message','Tạo tài khoản thành công');
    }
}
