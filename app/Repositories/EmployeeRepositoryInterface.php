<?php
namespace App\Repositories;
use App\DTO\EmployeeREST;
interface EmployeeRepositoryInterface
{
    public function getAll();
    
    public function getAllDTO();

    public function getById($id);

    public function createEmployee(EmployeeREST $employeeREST);
    
    public function updateEmployee($employeeId, EmployeeREST $employeeREST);
    
    public function delete($id);
/* 
    
    
    public function updateEmployee(EmployeeREST $employeeREST, $employeeId); */
/*
    public function create(array $data);

    public function update($id, array $data);

     */
}
