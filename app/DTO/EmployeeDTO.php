<?php

namespace App\DTO;

class EmployeeDTO
{
    public $emp_no;
    public $birth_date;
    public $first_names;
    public $last_name;
    public $gender;
    //public $hire_date;

    public function __construct($emp_no, $birth_date, $first_name, $last_name, $gender, /* $hire_date */)
    {
        $this->emp_no = $emp_no;
        $this->birth_date = $birth_date;
        $this->first_names = $first_name;
        $this->last_name = $last_name;
        $this->gender = $gender;
        //$this->hire_date = $hire_date;
    }
}
