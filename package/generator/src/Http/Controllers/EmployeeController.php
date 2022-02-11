<?php

namespace Gabenn\Generator\Http\Controllers;

use App\Http\Controllers\Controller;
use Gabenn\Generator\Http\Resources\EmployeeResource;
use Gabenn\Generator\Http\Requests\EmployeeRequest;
use Gabenn\Generator\Models\Company;
use Gabenn\Generator\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return EmployeeResource::collection(Employee::all());
    }

    public function create()
    {
        $companies = Company::all();

        return view('generator::form', ['employee' => null, 'companies'=>$companies]);
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

        return view('generator::form', ['employee' => $employee, 'companies'=>$companies]);
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
