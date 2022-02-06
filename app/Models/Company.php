<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'address',
        'post_code',
        'phone',
        'fax',
        'vat_no',
        'www',
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }



}
