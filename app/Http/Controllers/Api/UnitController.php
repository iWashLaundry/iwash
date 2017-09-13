<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Unit;

class UnitController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
  
      public function get($id = null){
        if(!$id){
            return Unit::all();            
        }else{
            return Unit::where('unit_id', '=', $id)->first();
        }
    }
        
    public function create(){
        $data = Input::all();
      
        $unit = new Unit;
        $unit->name = $data['name'];
        $unit->symbol = $data['symbol'];
        $unit->save();
      
        return;
    }
    
    public function update(){
        $data = Input::all();
      
        $unit = Unit::where('unit_id', '=', $data['unit_id'])->first();
        $unit->name = $data['name'];
        $unit->symbol = $data['symbol'];
        $unit->save();
      
        return;

    }

    public function delete($id){
        $unit = Unit::where('unit_id', '=', $id);
        $unit->delete();
        return;
    }
}