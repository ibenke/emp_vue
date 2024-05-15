<?php
// app/Mapping/EmployeeMapping.php

namespace App\Repositories;

use AutoMapperPlus\Configuration\AutoMapperConfig;
use App\Models\Employee;
use App\DTO\EmployeeDTO;

class EmployeeMapping
{
    public static function configure(AutoMapperConfig $config)
    {
        $config->registerMapping(Employee::class, EmployeeDTO::class)
            ->forMember('emp_no', function ($source) {
                return $source->emp_no;
            })
            ->forMember('birth_date', function ($source) {
                return $source->birth_date;
            })
            ->forMember('first_names', function ($source) {
                return $source->first_name;
            })
            ->forMember('last_name', function ($source) {
                return $source->last_name;
            })
            ->forMember('gender', function ($source) {
                return $source->gender;
            })
            /* ->forMember('hire_date', function ($source) {
                return $source->hire_date;
            }) */;
    }
}
