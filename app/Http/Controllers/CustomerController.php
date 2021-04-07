<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;

use Carbon\Carbon;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::paginate(5);
        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        //
    }

    public function store(CustomerRequest $request)
    {
        $status = true;
        $request->request->add(['status' => $status]);
        Customer::create($request->all());
        return redirect()->route('customer.index')->with('status', 'Se ha creado el cliente: ' . $request->name);
    }

    public function show(Customer $customer)
    {
        $now = Carbon::now();
        return view('customer.show', compact(['customer', 'now']));
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
