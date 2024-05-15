<?php
// app/Repositories/EmployeeRepository.php

namespace App\Repositories;
date_default_timezone_set('Europe/Zagreb');
use App\Models\Employee;
use App\DTO\EmployeeDTO;
use App\DTO\EmployeeREST;
use AutoMapperPlus\AutoMapper;
use App\Repositories\EmployeeMapping;
class EmployeeRepository implements EmployeeRepositoryInterface
{
    protected $mapper;

    public function __construct(AutoMapper $mapper)
    {
        $this->mapper = $mapper;
    }

    public function getAll()
    {
        return Employee::all();
    }

    public function getAllDTO(){
        /* $employees = Employee::all();

        $employeeDTOs = [];
        foreach ($employees as $employee) {
            $employeeDTOs[] = new EmployeeDTO(
                $employee->emp_no,
                $employee->birth_date,
                $employee->first_name,
                $employee->last_name,
                $employee->gender,
                $employee->hire_date
            );
        }

        return $employeeDTOs; */
        $employees = Employee::all();

        // Mapiranje dobivenih objekata Employee na EmployeeDTO objekte
        return $this->mapper->mapMultiple($employees, EmployeeDTO::class);
    }


    public function getById($id)
    {
        return Employee::findOrFail($id);
    }

    public function createEmployee(EmployeeREST $employeeREST)
    {
        $employee = new Employee();
        $employee->birth_date = $employeeREST->birth_date;
        $employee->first_name = $employeeREST->first_name;
        $employee->last_name = $employeeREST->last_name;
        $employee->gender = $employeeREST->gender;
        $employee->hire_date = $employeeREST->hire_date;
        $employee->created_at = date("Y-m-d H:i:s");
        $employee->updated_at = date("Y-m-d H:i:s");
        $employee->save();
    }

    public function updateEmployee($employeeId, EmployeeREST $employeeREST)
    {
        //$employee = Employee::findOrFail($employeeId);

        $array = [];
        $array['birth_date'] = $employeeREST->birth_date;
        $array['first_name'] = $employeeREST->first_name;
        $array['last_name'] = $employeeREST->last_name;
        $array['gender'] = $employeeREST->gender;
        $array['hire_date'] = $employeeREST->hire_date;

        Employee::findOrFail($employeeId)->update($array);
        //return $employee;
    }

    public function delete($id)
    {
        Employee::find($id)->delete();
    }

    /*  */

    /* public function createEmployee(EmployeeREST $employeeREST)
    {
        $employee = new Employee();
        $employee->birth_date = $employeeREST->birth_date;
        $employee->first_name = $employeeREST->first_name;
        $employee->last_name = $employeeREST->last_name;
        $employee->gender = $employeeREST->gender;
        $employee->hire_date = $employeeREST->hire_date;
        $employee->save();
    } */
/*
    public function create(array $data)
    {
        return Employee::create($data);
    }

    

     */
}
