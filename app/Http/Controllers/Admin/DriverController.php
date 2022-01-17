<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Models\Driver;
use App\Http\Controllers\Controller;

class DriverController extends Controller
{
    public function index(){
       return view('admin.driver.index'); 
    }
    public function create(){
       return view('admin.driver.create'); 
    }
    public function edit($id){
       $driver = Driver::findOrFail($id);
       return view('admin.driver.edit', compact('driver')); 
    }


}
