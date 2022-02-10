<?php

namespace Gabenn\Generator\Http\Controllers;

use App\Http\Controllers\Controller;
use Gabenn\Generator\Models\Employee;

class HomeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return view('generator::home', ['employees' => $employees]);
    }
}
