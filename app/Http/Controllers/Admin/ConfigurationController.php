<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConfigurationSystem;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    //
    public function index()
    {
        $configs = ConfigurationSystem::query()->latest()->paginate(10);
        return view('admin.pages.config.list-config', compact('configs'));
    }

    public function store(Request $request)
    {

        ConfigurationSystem::updateOrCreate(['title' => $request->title],
            ['description' => $request->description, 'type' => $request->type, 'status' => $request->status]);
        return redirect()->route('admin.configuration.index')->with('message', 'Tạo cấu hình thành công!!');;
    }
}
