<?php

namespace App\Http\Controllers\Chef;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ChefAsCustomerController extends Controller
{
    public function chefAsCustomer()
    {
        return view('backend.chefAsCustomer.customer');
    }
}
