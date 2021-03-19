<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Requests\ProviderRequest;

class ProviderController extends Controller
{

    public function index()
    {
        $providers = Provider::all();
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(ProviderRequest $request, Provider $provider)
    {
        $provider->update($request->all());
        return redirect()->route('provider.index')->with('status', 'Se ha editado el proveedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        $provider->delete();
        return redirect()->route('provider.index')->with('status', 'Se ha eliminado el proveedor');
    }
}
