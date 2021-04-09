<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Party;
use Illuminate\Http\Request;

use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index () {
        $customers = Customer::all();
        $products = Product::all();
        $parties = Party::all();
        $now = new Carbon;
        return view('dashboard.index', compact(['customers', 'products', 'parties', 'now']));
    }
}
    