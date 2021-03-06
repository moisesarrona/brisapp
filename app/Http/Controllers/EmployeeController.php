<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $status = 1;
        $request->request->add(['status' => $status]);
        Employee::create($request->all());
        return redirect()->route('employee.index');

    }

    public function show(Employee $employee)
    {
        return view('employee.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        //
    }

    public function update(Request $request, Employee $employee)
    {
        $employee->update($request->all());
        return redirect()->route('employee.index');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index');
    }
}
