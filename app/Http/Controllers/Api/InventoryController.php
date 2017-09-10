<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Item;

class InventoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get($id = null){
        if(!$id){
            return Item::all();            
        }else{
            return Item::where('item_id', '=', $id)->first();
        }
    }
        
    public function create(){
        $data = Input::all();

        $item = new Item;
        $item->name = $data['name'];
        $item->save();

        return;
    }
    
    public function update(){
        $data = Input::all();

        $item = Item::where('item_id', '=', $id)->first();
        $item->name = $data['name'];
        $item->save();
        
        return;
    }

    public function delete($id){
        $item = Item::where('item_id', '=', $id)->first();
        $item->delete();

        return;
    }
}
