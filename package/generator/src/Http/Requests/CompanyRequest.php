<?php

namespace Gabenn\Generator\Http\Requests;

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
            'street' =>['required'],
            'street_number' =>['required'],
            'post_code' =>['required'],
            'city' =>['required'],
            'phone' =>['required'],
            'fax' =>['required'],            
            'nip' =>['required'],            
            'www' =>['required'],            
        ];
    }
}
