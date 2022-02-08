<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Spatie\Browsershot\Browsershot;

class FooterController extends Controller
{
    public function show($id)
    {
        $employee = Employee::find($id);
        $company = Company::where('company',$employee->company)->get();
        return view('footer', ['employee' => $employee,'company' => $company[0]]);
    }
    public function image($id){
        Browsershot::url(route('footer.show',['id'=>$id]))->setNodeBinary(config('mag.node_path'))->save("stopka{$id}.png");
        redirect()->route('home');
        return response()->download("stopka{$id}.png");
    }
}
