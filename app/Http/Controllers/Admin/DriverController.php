<?php

namespace App\Http\Controllers\Admin;

use App\Models\State;
use Illuminate\Http\Request;
use App\Models\Driver;
use App\Http\Controllers\Controller;
use App\Http\Resources\DriverCollection;

class DriverController extends Controller
{
    public function index(){
       return view('admin.driver.index'); 
    }
    public function create(){
       $states = State::all();
       return view('admin.driver.create', compact('states')); 
    }
    public function edit($id){
        $driver = Driver::with('employment_histories','accident_histories','experience_histories','education_histories','license_histories')->findOrFail($id);
       $states = State::all();
       return view('admin.driver.edit', compact('driver','states')); 
    }


}
