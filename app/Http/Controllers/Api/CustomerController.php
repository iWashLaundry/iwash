<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get(){
        //return csrf_token();
        return Customer::all();
    }
        
    public function create(){
        $data = Input::all();

        $customer = new Customer;
        $customer->first_name = $data['first_name'];
        $customer->last_name = $data['last_name'];
        $customer->email = $data['email'];
        $customer->phone = $data['phone'];
        $customer->save();

        return $customer;
    }
    
    public function update(){
        $data = Input::all();
    
        $customer = Customer::where('customer_id','=', $data['customer_id'])->first();
        $customer->first_name = $data['first_name'];
        $customer->last_name = $data['last_name'];
        $customer->email = $data['email'];
        $customer->phone = $data['phone'];
        $customer->save();

        return $customer;
    }

    public function delete(){
        $data = Input::all();
        $customer = Customer::where('customer_id','=', $data['customer_id'])->first();
        $customer->delete();

        return Customer::all();
    }
}
