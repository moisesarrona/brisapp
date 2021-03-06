<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        Package::create($request->all());
        return redirect()->route('package.index');
    }

    public function show(Package $package)
    {
        return view('package.show', compact('package'));
    }

    public function edit(Package $package)
    {
        //
    }

    public function update(Request $request, Package $package)
    {
        $package->update($request->all());
        return redirect()->route('package.index');
    }

    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('package.index');
    }
}
