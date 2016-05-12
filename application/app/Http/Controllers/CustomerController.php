<?php

namespace App\Http\Controllers;

use App\Customer as Customer;
use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
	public function show($id){
		$customer = Customer::find($id);
		echo "Hello my name is ". $customer->Nombre;
	}
}
