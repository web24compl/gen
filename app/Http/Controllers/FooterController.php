<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class FooterController extends Controller
{
    public function create($id){
        
        $employee = Employee::find($id);

        return view('footer', ['employee'=>$employee]);
    }
}
