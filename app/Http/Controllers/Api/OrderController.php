<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
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
            $orders = Order::where('date_claimed', '=', '0000-00-00 00:00:00')->get();
            foreach($orders as $index => $order){
                $products = OrderProduct::where('order_product.order_id', '=', $order->order_id)
                ->join('product', 'product.product_id', '=', 'order_product.product_id')
                ->get();
                $orders[$index]->products = $products;
            }
            return $orders;
        }else{
            return Order::where('order_id', '=', $id)->first();
        }
    }
        
    public function create(){
        $data = Input::all();
        
        $order = new Order;
        $order->customer_id = isset($data['customer_id']) ? $data['customer_id'] : 0;
        $order->customer_first_name = $data['customer_first_name'];
        $order->customer_last_name = $data['customer_last_name'];
        $order->customer_email = $data['customer_email'];
        $order->customer_phone = $data['customer_phone'];
        $order->date_ordered = $data['date_ordered'];
        $order->save();

        if(isset($data['products'])){
            $order_products = $data['products'];
            foreach($order_products as $index => $temp_product){
                $product = Product::where('product_id', '=', $index)->first();
                if($product){
                    $price = Price::where('product_id', '=', $product->product_id)->first();                
                    if($price){
                        $order_product = new OrderProduct;
                        $order_product->order_id = $order->order_id;
                        $order_product->product_id = $product->product_id;
                        $order_product->quantity = $temp_product;
                        $order_product->price = $price->price;
                        $order_product->save();
                    }  
                }
            }    
        }
        return $order;
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

        return $order;
    }

    public function delete($id){
        $order = Order::where('order_id','=', $id)->first();
        $order->delete();

        return;
    }
}
