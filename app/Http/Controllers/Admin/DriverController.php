<?php

namespace App\Http\Controllers\Admin;

use App\Models\Models\State;
use Illuminate\Http\Request;
use App\Models\Models\Driver;
use App\Http\Controllers\Controller;

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
       $driver = Driver::findOrFail($id);
       $states = State::all();
       return view('admin.driver.edit', compact('driver','states')); 
    }


}
