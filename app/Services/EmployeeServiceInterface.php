<?php

namespace App\Services;
use App\DTO\EmployeeREST;
interface EmployeeServiceInterface
{
    public function getAllEmployees();
    
    public function getAllEmployeesDTO();

    public function getEmployeeById($id);

    public function createEmployee(EmployeeREST $employeeREST);

    public function updateEmployeeById($employeeId, EmployeeREST $employeeREST);

    public function deleteEmployee($id);

    /*  
     */

    /* public function getEmployeeById($id);

    public function createEmployee(array $data);

    public function updateEmployee($id, array $data);

     */
}
