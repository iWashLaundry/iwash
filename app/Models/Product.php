<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Price;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    public $timestamps = false;

    public static function allWithPrices(){
        $products = Product::all();
        $productsWithPrice = [];
        foreach($products as $product){
            $product = Product::getProductWithPrice($product->product_id);
            array_push($productsWithPrice, $product);
        }

        return $productsWithPrice;
    }

    public static function getProductWithPrice($product_id){
        $product = Product::where('product_id', '=', $product_id)->first();
        if(isset($product)){
            $price = Price::where('product_id', '=', $product_id)->first();
            $product->price = $price ? $price->price : null;              
        }
        return $product;
    }
}
