<?php

namespace Gabenn\Generator\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'companies';

    protected $fillable = [
        'company',
        'street',
        'street_number',
        'post_code',
        'city',
        'phone',
        'fax',
        'nip',
        'www',
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }



}
