<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Setting;

class SettingController extends Controller
{
    //
    public function action(){
        // dd(request()->all());
        $data = request()->validate([
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
        ]);
        if(request('settingId') == 1){
            $setting = Setting::first();
            if($setting->update($data)){
                return response()->json([
                    'status' => 'success',
                    'message' =>  'Setting Update Successfully',
                    'payload' => $setting
                ]);
            }
        }
        $setting = Setting::create($data);
        if($setting->save()){
            return response()->json([
                'status' => 'success',
                'message' =>  'Setting Added Successfully',
                'payload' => $setting
            ]);
        }
    }
}
