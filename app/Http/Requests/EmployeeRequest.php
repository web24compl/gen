<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' =>['required'],
            'position' =>['required'],
            'company' =>['required'],
            'mobile' =>['required'],
            'phone' =>['required'],
            'email' =>['required', 'email'],            
        ];
    }
}
