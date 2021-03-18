<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Requests\PackageRequest;

class PackageController extends Controller
{

    public function index()
    {
        $packages =Package::all();
        return view('package.index', compact('packages'));
    }

    public function create()
    {
        //
    }

    public function store(PackageRequest $request)
    {
        Package::create($request->all());
        return redirect()->route('package.index')->with('status', 'Se ha creado un paquete: ' . $request->name);
    }

    public function show(Package $package)
    {
        return view('package.show', compact('package'));
    }

    public function edit(Package $package)
    {
        //
    }

    public function update(PackageRequest $request, Package $package)
    {
        $package->update($request->all());
        return redirect()->route('package.index')->with('status', 'Se ha editado el paquete');
    }

    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('package.index')->with('status', 'Se ha eliminado el paquete');
    }
}
