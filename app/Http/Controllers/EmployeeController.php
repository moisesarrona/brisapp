<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        $salaries = Salary::all();
        return view('employee.index', compact(['employees', 'salaries']));
    }

    public function create()
    {
        //
    }

    public function store(EmployeeRequest $request)
    {
        $status = 1;
        $request->request->add(['status' => $status]);
        Employee::create($request->all());
        return redirect()->route('employee.index')->with('status', 'Se ha creado un nuevo empeado: ' . $request->name);

    }

    public function show(Employee $employee)
    {
        return view('employee.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        //
    }

    public function update(EmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());
        return redirect()->route('employee.index')->with('status', 'Se ha editado el empelado');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index')->with('status', 'Se ha eliminado el empelado');
    }
}
