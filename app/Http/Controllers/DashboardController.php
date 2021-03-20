<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Party;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index () {
        $customers = Customer::all();
        $products = Product::all();
        $parties = Party::all();
        return view('dashboard.index', compact(['customers', 'products', 'parties']));
    }
}
    