<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $model = Driver::orderBy('id', 'DESC')->get();
        return view('driver/index', compact('model'));
    }

    public function store(Request $request)
    {
        $model = new Driver();
        $model->username = $request->username;
        $model->email = $request->email;
        $model->password = $request->password;
        $model->save();

        return redirect('/driver');
    }

    public function create()
    {
        return view('driver/create');
    }
}
