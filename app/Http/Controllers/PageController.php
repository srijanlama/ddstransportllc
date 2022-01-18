<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Driver;

class PageController extends Controller
{
    public function home(){
        return view('page.home');
    }
    public function drive(){
        return view('page.drive');
    }
    public function store(){
       $data = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:drivers',
            'phone' => 'required',
            'state' => 'required',
        ]);
        $driver = Driver::create($data);
        if ($driver->save()) {  
            return redirect()->route('default')->with(['success'=> 'Driver Added Successfully']);
        }
        return back()->withErrors(['error'=> 'something went wrong']);
    }
}
