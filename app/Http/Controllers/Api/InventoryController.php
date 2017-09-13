<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\ItemPrice;

class InventoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get($id = null){
        if(!$id){
            return Item::allWithPrices();            
        }else{
            return Item::getItemWithPrice($id);
        }
    }
        
    public function create(){
        $data = Input::all();

        $item = new Item;
        $item->name = $data['name'];
        $item->save();
      
        $price = new ItemPrice;
        $price->item_id = $item->item_id;
        $price->price = $data['price'];
        $price->save();

        return [
            "item_id" => $item->item_id, 
            "name" => $item->name,
            "price" => $price->price
        ];

        return;
    }
    
    public function update(){
        $data = Input::all();

        $item = Item::where('item_id', '=', $data['item_id'])->first();
        $item->name = $data['name'];
        $item->save();
        
        $price = ItemPrice::where('item_id', '=', $item->item_id)->first();
        $price->item_id = $item->item_id;
        $price->price = $data['price'];
        $price->save();
        
        return [
            "item_id" => $item->item_id, 
            "name" => $item->name,
            "price" => $price->price
        ];
    }

    public function delete($id){
        $item = Item::where('item_id', '=', $id)->first();
        $item->delete();

        $prices = ItemPrice::where('item_id','=', $id)->get();
        foreach($prices as $price){
            $price->delete();            
        }
        return;
    }
}
