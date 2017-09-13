<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';
    protected $primaryKey = 'item_id';
    public $timestamps = false;
  
    public static function allWithPrices(){
        $items = Item::all();
        $itemsWithPrice = [];
        foreach($items as $item){
            $item = Item::getItemWithPrice($item->item_id);
            array_push($itemsWithPrice, $item);
        }

        return $itemsWithPrice;
    }

    public static function getItemWithPrice($item_id){
        $item = Item::where('item_id', '=', $item_id)->first();
        if(isset($item)){
            $price = ItemPrice::where('item_id', '=', $item_id)->first();
            $item->price = $price ? $price->price : null;              
        }
        return $item;
    }
}
