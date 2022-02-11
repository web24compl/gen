<?php

namespace Gabenn\Generator\Http\Controllers;

use Gabenn\Generator\Http\Requests\CompanyRequest;
use Gabenn\Generator\Models\Company;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return view('generator::firmy', ['companies'=>$companies]);   
    }
    
    public function create()
    {
        return view('generator::konfigurator', ['company' => null]);
    }

    public function store(CompanyRequest $request)
    {
        Company::create($request->validated());

        return redirect()->route('companies.index');
    }

    public function edit($id)
    {
        $company = Company::find($id);

        return view('generator::konfigurator', ['company' => $company]);
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
