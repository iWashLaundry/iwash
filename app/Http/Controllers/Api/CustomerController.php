<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;

class CustomerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get($id = null){
        $customers = Customer::all();
        foreach($customers as $index => $customer){
          $orders = Order::where('customer_id', '=', $customer->customer_id)->get();
          if($orders->count()){
            $orders_claimed = Order::where('customer_id', '=', $customer->customer_id)->where('date_claimed', '!=', '0000-00-00 00:00:00')->count();
            $customers[$index]->orders_claimed = $orders_claimed;
            $customers[$index]->visits = count($orders);
            $customers[$index]->current_order = $orders[count($orders) - 1];            
          }
        }
      
        return $customers;
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
