<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Support\Facades\App;
use Spatie\Browsershot\Browsershot;

class FooterController extends Controller
{
    public function desktop_show($id,$lang)
    {
        $employee = Employee::find($id);
        $company = Company::where('company',$employee->company)->get();
        if($lang=='en')
        {
            App::setLocale('en');
        }
        else
        {
            App::setLocale("pl");
        }
        
        return view('footer', ['employee' => $employee,'company' => $company[0]]);
    }

    public function mobile_show($id,$lang)
    {
        $employee = Employee::find($id);
        $company = Company::where('company',$employee->company)->get();
        if($lang=='en')
        {
            App::setLocale('en');
        }
        else
        {
            App::setLocale("pl");
        }
        return view('footer', ['employee' => $employee,'company' => $company[0]]);
    }

    public function desktop_image($id,$lang)
    {
        Browsershot::url(route('footer.desktop',['id'=>$id,'lang'=>$lang]))->setNodeBinary(config('mag.node_path'))->select('body')->save("stopka{$id}{$lang}.jpg");
        return response()->download("stopka{$id}{$lang}.jpg");
    }

    public function mobile_image($id,$lang)
    {
        Browsershot::url(route('footer.mobile',['id'=>$id,'lang'=>$lang]))->setNodeBinary(config('mag.node_path'))->select('body')->save("stopka{$id}{$lang}.jpg");
        return response()->download("stopka{$id}{$lang}.jpg");
    }

}
