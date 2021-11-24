<?php

namespace App\Http\Controllers\Admin;

use App\Models\Motorcycle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MotorController extends Controller
{
    public function index()
    {
        $motorcycles = Motorcycle::all();
        return view('admin.motor.index', compact('motorcycles'));
    }
}
