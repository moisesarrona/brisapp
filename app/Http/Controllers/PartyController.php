<?php

namespace App\Http\Controllers;

use App\Models\Party;
use App\Models\Customer;
use App\Models\Package;
use Illuminate\Http\Request;

class PartyController extends Controller
{

    public function index()
    {
        $customers = Customer::all();
        $packages = Package::all();
        $parties = Party::all();
        return view('party.index', compact(['customers', 'packages', 'parties']));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $status = 1;
        $request->request->add(['status' => $status]);
        Party::create($request->all());
        return redirect()->route('party.index');
    }

    public function show(Party $party)
    {
        return view('party.show', compact('party'));
    }


    public function edit(Party $party)
    {
        //
    }

    public function update(Request $request, Party $party)
    {
        $party->update($request->all());
        return redirect()->route('party.index');
    }

    public function destroy(Party $party)
    {
        $party->delete();
        return redirect()->route('party.index');
    }
}
