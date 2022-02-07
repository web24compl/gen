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
        $companies = Company::all();

        return view('firmy', ['companies'=>$companies]);   
    }
    
    public function create()
    {
        
        return view('konfigurator', ['company' => null]);
    }

    public function store(CompanyRequest $request)
    {
        Company::create($request->validated());

        return redirect()->route('companies.index');
    }

    public function edit($id)
    {
        $company = Company::find($id);

        return view('konfigurator', ['company' => $company]);
    }

    public function update(CompanyRequest $request, Company $company)
    {
        $company->update($request->validated());

        return redirect()->route('companies.index');
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index');
    }
}
