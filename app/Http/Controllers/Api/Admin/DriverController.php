<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Models\Models\Driver;
use App\Http\Controllers\Controller;
use App\Http\Resources\DriverCollection;

class DriverController extends Controller
{
    public function all()
    {
        if ($terms = request('search')) {
            $drivers = Driver::where('name', 'like', '%' . $terms . '%')->latest()->paginate(5);
        } else {
            $drivers = new DriverCollection(Driver::latest()->paginate(5));
        }
        return $drivers;
    }
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:drivers',
            'phone' => 'required',
            'state' => 'required',
            'status' => 'required',
        ]);
        $data['status'] = (int)$data['status'];
        $driver = Driver::create($data);
        if ($driver->save()) {
            return response()->json([
                'status' => 'success',
                'message' =>  'Driver Created Successfully',
                'payload' => $driver
            ]);
        }
        return response()->json([
            'status' => 'error',
            'message' => 'something went wrong',
        ]);
    }
    public function update($id)
    {
        $driver = Driver::findOrFail($id);
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'state' => 'required',
            'status' => 'required',
        ]);
        if ($driver->update($data)) {
            return response()->json([
                'status' => 'success',
                'message' =>  'Driver Created Successfully',
                'payload' => $driver
            ]);
        }
        return response()->json([
            'status' => 'error',
            'message' => 'something went wrong',
        ]);
    }
}
