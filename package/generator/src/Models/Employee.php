<?php

namespace Gabenn\Generator\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'employees';

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
