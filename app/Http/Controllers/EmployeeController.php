<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeResource;
use App\Http\Requests\EmployeeRequest;
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
        return view('form');
    }

    public function store(EmployeeRequest $request)
    {
        $employee = Employee::create($request->validated());

        return new EmployeeResource($employee);
    }

    public function show(Employee $employee)
    {
        return new EmployeeResource($employee);
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
      
        return view('form', ['employee'=>$employee]);
    }
    
    public function update(EmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->validated());
        
        return new EmployeeResource($employee);
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        
        return response()->noContent();
    }
    
    

}