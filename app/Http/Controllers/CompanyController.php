<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return Company::all();   
    }
    
    public function config()
    {
        
        return view('config', ['company' => null]);
    }

    public function store(CompanyRequest $request)
    {
        Company::create($request->validated());

        return redirect()->route('home');
    }

    public function edit($id)
    {
        $company = Company::find($id);

        return view('konfigurator', ['company' => $company]);
    }

    public function update(CompanyRequest $request, Company $company)
    {
        $company->update($request->validated());

        return redirect()->route('home');
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('home');
    }
}
