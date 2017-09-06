<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\Price;


class OrderController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get($id = null){
        if(!$id){
            return Order::all();            
        }else{
            return Order::where('order_id', '=', $id)->first();
        }
    }
        
    public function create(){
        $data = Input::all();
        
        $order = new Order;
        $order->customer_first_name = $data['customer_first_name'];
        $order->customer_last_name = $data['customer_last_name'];
        $order->customer_email = $data['customer_email'];
        $order->customer_phone = $data['customer_phone'];
        $order->save();

        if(isset($data['order_products'])){
            $order_products = json_decode($data['order_products']);
            foreach($order_products as $temp_product){
                $product = Product::where('product_id', '=', $temp_product->product_id)->first();
                $price = Price::where('product_id', '=', $product->product_id)->first();
                
                if($product && $price){
                    $order_product = new OrderProduct;
                    $order_product->order_id = $order->order_id;
                    $order_product->product_id = $product->product_id;
                    $order_product->quantity = $temp_product->quantity;
                    $order_product->price = $price->price;
                    $order_product->save();
                }
            }    
        }
        return;
    }
    
    public function update(){
        $data = Input::all();
        
        $order = Order::where('order_id', '=', $data['order_id'])->first();
        $order->customer_first_name = $data['customer_first_name'];
        $order->customer_last_name = $data['customer_last_name'];
        $order->customer_email = $data['customer_email'];
        $order->customer_phone = $data['customer_phone'];

        $order->date_claimed = $data['date_claimed'];
        $order->date_ordered = $data['date_ordered'];
        $order->date_started = $data['date_started'];
        $order->date_ready = $data['date_ready'];
        $order->save();

        return;
    }

    public function delete($orderId){
        $customer = Order::where('order_id','=', $orderId)->first();
        $customer->delete();

        return;
    }
}
