<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company',
        'position',
        'department',
        'mobile',
        'email',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }


}
