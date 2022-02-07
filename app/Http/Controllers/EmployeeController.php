<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeResource;
use App\Http\Requests\EmployeeRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return EmployeeResource::collection(Employee::all());
    }

    public function create()
    {
        $companies = Company::all();

        return view('form', ['employee' => null, 'companies'=>$companies]);
    }

    public function store(EmployeeRequest $request)
    {
        Employee::create($request->validated());

        return redirect()->route('home');
    }

    public function edit($id)
    {
        $employee = Employee::find($id);

        $companies = Company::all();

        return view('form', ['employee' => $employee, 'companies'=>$companies]);
    }

    public function update(EmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->validated());

        return redirect()->route('home');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('home');
    }
}
