<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Models\Setting;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    //
    public function form(){
        $setting = Setting::First();
        return view('admin.setting.form',compact('setting'));
    }

}
