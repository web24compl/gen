<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class FooterController extends Controller
{
    public function show($id)
    {
        $employee = Employee::find($id);

        return view('footer', ['employee' => $employee]);
    }

    public function config()
    {
        return view('konfigurator');
    }
}
