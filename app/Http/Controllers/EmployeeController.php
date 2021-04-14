<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\PayrollRequest;
use App\Models\Payroll;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(10);
        $salaries = Salary::all();
        $now = new Carbon();
        return view('employee.index', compact(['employees', 'salaries', 'now']));
    }

    public function create()
    {
        //
    }

    public function store(EmployeeRequest $request)
    {
        $status = true;
        $request->request->add(['status' => $status]);
        Employee::create($request->all());
        return redirect()->route('employee.index')->with('status', 'Se ha creado un nuevo empeado: ' . $request->name);

    }

    public function show(Employee $employee)
    {
        $payrolls = Payroll::paginate(20)->where('employee_id', '=', $employee->id);
        return view('employee.show', compact(['employee', 'payrolls']));
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

    public function status(Request $request) 
    {
        $employee = Employee::find($request->id);
        if($employee->status == false) {
            $employee->status = true;
        }else {
            $employee->status = false;
        }
        $employee->save();
        return redirect()->route('employee.index')->with('status', 'Se cambio el estatus del empleado' . $employee->name .' ' . $employee->lastname);
    }

    //Payroll
    public function showpay(Payroll $payroll)
    {
        return view('employee.showpay', compact('payroll'));
    }

    public function payrollAll(PayrollRequest $request)
    {
        $employee = Employee::find($request->id);
        if ($employee->status == true) {
            $payroll = new Payroll();

            $payroll->employee_id = $employee->id;
            $payroll->salary_id = $employee->salary->id;
            $payroll->hours = $request->hours;
            $payroll->total = $employee->salary->salary * $request->hours;

            $payroll->save();
            return redirect()->route('employee.showpay', $payroll)->with('status', 'Se genero la nomina del empleado' . $employee->name);  
        } else {
            return redirect()->route('employee.index')->with('status', 'Problemas al generar nomina' . $employee->name);  
        }
    }  

}
