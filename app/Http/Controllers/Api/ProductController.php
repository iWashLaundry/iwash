<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Price;

class ProductController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get($id = null){
        if(!$id){
            return Product::allWithPrices();
        }else{
            return Product::getProductWithPrice($id);
        }
    }
        
    public function create(){
        $data = Input::all();

        $product = new Product;
        $product->name = $data['name'];
        $product->save();

        $price = new Price;
        $price->product_id = $product->product_id;
        $price->price = $data['price'];
        $price->save();

        return [
            "product_id" => $product->product_id, 
            "name" => $product->name,
            "price" => $price->price
        ];
    }
    
    public function update(){
        $data = Input::all();
        
        $product = Product::where('product_id', '=', $data['product_id'])->first();
        $product->name = $data['name'];
        $product->save();
        
        $price = Price::where('product_id', '=', $product->product_id)->first();
        $price->product_id = $product->product_id;
        $price->price = $data['price'];
        $price->save();
        
        return [
            "product_id" => $product->product_id, 
            "name" => $product->name,
            "price" => $price->price
        ];
    }

    public function delete($id){
        $product = Product::where('product_id','=', $id)->first();
        $product->delete();

        $prices = Price::where('product_id','=', $id)->get();
        foreach($prices as $price){
            $price->delete();            
        }

        return;
    }
}
