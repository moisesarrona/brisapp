<?php

namespace App\Http\Controllers;

use App\Models\Party;
use App\Models\Customer;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Requests\PartyRequest;

use Carbon\Carbon;

class PartyController extends Controller
{

    public function index()
    {
        $customers = Customer::all();
        $packages = Package::select('id', 'name', 'price_e', $this->date())->get();
        $parties = Party::orderBy('date', 'asc')->where('status', '=', false)->paginate(5);
        $partiess = Party::all();
        $now = Carbon::now();

        return view('party.index', compact(['customers', 'packages', 'parties', 'partiess', 'now']));
    }

    public function create()
    {
        //
    }

    public function store(PartyRequest $request)
    {
        
        if ($this->aviality($request) == false) {
            $status = false;
            $request->request->add(['status' => $status, 'total' => $this->total($request)]);
            Party::create($request->all());
            return redirect()->route('party.index')->with('status', 'Se ha creado una nueva fiesta');
        }
        return redirect()->route('party.index')->with('error', 'La fecha ya esta agenda intenta con otra');
    }

    public function show(Party $party)
    {
        $parties = Party::orderBy('date', 'asc')->take(5)->get();
        $now = Carbon::now();
        return view('party.show', compact(['party', 'parties', 'now']));
    }


    public function edit(Party $party)
    {
        //
    }

    public function update(PartyRequest $request, Party $party)
    {
        $party->update($request->all());
        return redirect()->route('party.index')->with('status', 'Se ha editado la fiesta');
    }

    public function destroy(Party $party)
    {
        $party->delete();
        return redirect()->route('party.index')->with('status', 'Se ha eliminado la fiesta');
    }

    public function status(Request $request)
    {
        $party = Party::find($request->id);
        if ($party->status == false) {
            $party->status = true;
            $party->save();
            return redirect()->route('party.index')->with('status', ' Se realizo la fiesta');
        }
    }

    public function all()
    {
        $customers = Customer::all();
        $packages = Package::select('id', 'name', 'price_e', $this->date())->get();
        $parties = Party::orderBy('date', 'asc')->paginate(10);
        $now = Carbon::now();

        return view('party.all', compact(['customers', 'packages', 'parties', 'now']));
    }


    //Calculate day to package
    public function date() {
        $now  = Carbon::now();
        $day = $now->isoformat('dddd');

        if ($day == 'Monday' || $day == 'Tuesday' || $day == 'Wednesday') {
            $priceDay = 'price_lm';
        } else if ($day == 'Thursday' || $day == 'Friday') {
            $priceDay = 'price_jv';
        } else {
            $priceDay = 'price_sd';
        }

        return $priceDay;
    }

    //Calculate the total to party
    public function total($request)
    {
        $this->date();
        $package = Package::find($request->package_id);

        //Multiplicacion para sacar el precio extra por niño
        $price_e = $package->price_e * $request->kid;

        foreach ($package->toArray() as $key => $item) {
            if ($key == $this->date()) {
                //Suma de precio extra mas el precio de paquete
                return $total = $price_e + $item;
            }
        }
    }

    //Availability
    public function aviality($request) 
    {
        $status = false;
        $party = Party::where('status',  '=', false)->get();
        foreach ($party as $value) {
            if(Carbon::parse($value->date)->format('d-m-Y h') == Carbon::parse($request->date)->format('d-m-Y h')) {
                //echo 'lo encontre';
                $status = true;
                break;
            }
        }
        return $status;
    }
}
