<?php

namespace App\Http\Controllers;

use App\Models\Models\State;
use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Setting;

class PageController extends Controller
{
    public function home(){
        $setting = Setting::first();
        return view('page.home',compact('setting'));
    }
    public function drive(){
        $states = State::all();
        $setting = Setting::first();
        return view('page.drive', compact('states','setting'));
    }
    public function store(){
        // dd(request()->all());
       $data = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:drivers',
            'phone' => 'required',
            'state' => 'required',
        ]);
        $driver = Driver::create($data);
        if ($driver->save()) {  
            return back()->with(['success'=> 'Driver Added Successfully']);
        }
        return back()->withErrors(['error'=> 'something went wrong']);
    }
}
