<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'company' =>['required'],
            'address' =>['required'],
            'post_code' =>['required'],
            'phone' =>['required'],
            'fax' =>['required'],            
            'vat_no' =>['required'],            
            'www' =>['required'],            
        ];
    }
}
