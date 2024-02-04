<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class HomeController extends Controller
{
    public function index()
    {
        $customer = Customer::first();

        $data = [
            'relation' => $customer,
        ];

        return view('relation_test', $data);
    }
}
