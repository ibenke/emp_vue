<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $primaryKey = 'emp_no';
    public $timestamps = false;
    protected $fillable = [
        'birth_date', 'first_name', 'last_name', 'gender', 'hire_date'
    ];
}
