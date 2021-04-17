<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\SalaryRequest;

class SalaryController extends Controller
{

    public function index()
    {
        $salaries = Salary::paginate(5);
        return view('salary.index', compact('salaries'));
    }

    public function create()
    {
        //
    }

    public function store(SalaryRequest $request)
    {
        $decimal = str_replace (",", ".", $request->salary);
        $request->salary = number_format($decimal,2,".","");

        Salary::create($request->all());
        return redirect()->route('salary.index')->with('status', 'Se ha creado un nuevo salario: ' . $request->name);
    }

    public function show(Salary $salary)
    {
        return view('salary.show', compact('salary'));
    }

    public function edit(Salary $salary)
    {
        //
    }

    public function update(SalaryRequest $request, Salary $salary)
    {
        $salary->update($request->all());
        return redirect()->route('salary.index')->with('status', 'Se ha editado el salario: ' . $request->name);
    }

    public function destroy(Salary $salary)
    {
        $employee = Employee::all();
        foreach ($employee as $value) {
            if ($value->salary_id == $salary->id) {
                $value->status = 0;
                $value->save();
            }
        }
        $salary->delete();
        return redirect()->route('salary.index')->with('status', 'Se ha eliminado el salario');
    }
}
