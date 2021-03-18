<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        //
    }

    public function store(CustomerRequest $request)
    {
        $status = 1;
        $request->request->add(['status' => $status]);
        Customer::create($request->all());
        return redirect()->route('customer.index')->with('status', 'Se ha creado el cliente: ' . $request->name);
    }

    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        //
    }

    public function update(CustomerRequest $request, Customer $customer)
    {
        $customer->update($request->all());
        return redirect()->route('customer.index')->with('status', 'Se ha editado el cliente');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customer.index')->with('status', 'Se ha eliminado el cliente');
    }
}
