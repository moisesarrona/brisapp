<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Requests\ProviderRequest;

class ProviderController extends Controller
{

    public function index()
    {
        $providers = Provider::paginate(5);
        return view('provider.index', compact('providers'));
    }

    public function create()
    {
        //
    }
    public function store(ProviderRequest $request)
    {
        $status = true;
        $request->request->add(['status' => $status]);
        Provider::create($request->all());
        return redirect()->route('provider.index')->with('status', 'Se ha creado un proveedor: ' . $request->business_n);
    }

    public function show(Provider $provider)
    {
        return view('provider.show', compact('provider'));
    }

    public function edit(Provider $provider)
    {
        //
    }

    public function update(ProviderRequest $request, Provider $provider)
    {
        $provider->update($request->all());
        return redirect()->route('provider.index')->with('status', 'Se ha editado el proveedor: ' . $request->business_n);
    }

    public function destroy(Provider $provider)
    {
        $provider->delete();
        return redirect()->route('provider.index')->with('status', 'Se ha eliminado el proveedor');
    }
}
