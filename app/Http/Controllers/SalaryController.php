<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;
use App\Http\Requests\SalaryRequest;

class SalaryController extends Controller
{

    public function index()
    {
        $salaries = Salary::all();
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
        return redirect()->route('salary.index');
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
        return redirect()->route('salary.index');
    }

    public function destroy(Salary $salary)
    {
        $salary->delete();
        return redirect()->route('salary.index');
    }
}
