<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class HomeController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        $data = [
            'customers' => $customers,
        ];

        return view('relation_test', $data);
    }
}
