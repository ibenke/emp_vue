<?php

namespace App\DTO;

class EmployeeREST
{
    public $birth_date;
    public $first_name;
    public $last_name;
    public $gender;
    public $hire_date;

    public function __construct($birth_date, $first_name, $last_name, $gender, $hire_date)
    {
        $this->birth_date = $birth_date;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->gender = $gender;
        $this->hire_date = $hire_date;
    }
}
