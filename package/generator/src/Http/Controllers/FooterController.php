<?php

namespace Gabenn\Generator\Http\Controllers;


use App\Http\Controllers\Controller;
use Gabenn\Generator\Models\Company;
use Gabenn\Generator\Models\Employee;
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
        
        return view('generator::footer', ['employee' => $employee,'company' => $company[0]]);
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
        return view('generator::footer', ['employee' => $employee,'company' => $company[0]]);
    }

    public function desktop_image($id,$lang)
    {
        Browsershot::url(route('footer.desktop',['id'=>$id,'lang'=>$lang]))->setNodeBinary(config('mag.node_path'))->select('body')->save("stopka{$id}{$lang}.jpg");
        return response()->download("stopka{$id}{$lang}.jpg")->deleteFileAfterSend(true);
    }

    public function mobile_image($id,$lang)
    {
        Browsershot::url(route('footer.mobile',['id'=>$id,'lang'=>$lang]))->setNodeBinary(config('mag.node_path'))->select('body')->save("stopka{$id}{$lang}.jpg");
        return response()->download("stopka{$id}{$lang}.jpg")->deleteFileAfterSend(true);
    }

}
