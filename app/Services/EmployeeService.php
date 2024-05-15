<?php
// app/Services/EmployeeService.php

namespace App\Services;

use App\Repositories\EmployeeRepositoryInterface;
use App\Repositories\EmployeeRepository;
use App\DTO\EmployeeDTO;
use App\DTO\EmployeeREST;
class EmployeeService implements EmployeeServiceInterface
{
    protected $employeeRepository;

    public function __construct(EmployeeRepositoryInterface $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function getAllEmployees()
    {
        return $this->employeeRepository->getAll();
    }

    public function getAllEmployeesDTO()
    {
        return $this->employeeRepository->getAllDTO();
    }

    public function getEmployeeById($id)
    {
        return $this->employeeRepository->getById($id);
    }

    public function createEmployee(EmployeeREST $employeeREST)
    {
        $this->employeeRepository->createEmployee($employeeREST);
    }

    public function updateEmployeeById($employeeId, EmployeeREST $employeeREST)
    {
        return $this->employeeRepository->updateEmployee($employeeId, $employeeREST);
    }
    
    public function deleteEmployee($id)
    {
        return $this->employeeRepository->delete($id);
    }
    /*
     */
/*
    public function createEmployee(array $data)
    {
        return $this->employeeRepository->create($data);
    }


     */
}
