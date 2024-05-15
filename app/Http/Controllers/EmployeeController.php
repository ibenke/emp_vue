<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Services\EmployeeService;
use App\DTO\EmployeeDTO;
use App\DTO\EmployeeREST;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    protected $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
         $this->employeeService = $employeeService;
        
    }

    public function index()
    {
        $aEmployees = $this->employeeService->getAllEmployees();
        return Inertia::render('Employee/Index',['employees' => $aEmployees]);
    }

    public function create()
    {
        return Inertia::render('Employee/Create'); //ovo je putanja: mapa Employee, datoteka Create
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'birth_date' => 'required|date',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'gender' => 'required|in:M,F',
            'hire_date' => 'required|date',
        ]);

        $employeeREST = new EmployeeREST(
            $validatedData['birth_date'],
            $validatedData['first_name'],
            $validatedData['last_name'],
            $validatedData['gender'],
            $validatedData['hire_date']
        );

        $this->employeeService->createEmployee($employeeREST);

        return redirect()->route('employee.index');
    }
}
