<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Models\Driver;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function index()
    {
        $users = User::all();
        $drivers = Driver::all();
        return view('admin.dashboard.index', compact('users','drivers'));
    }
}
