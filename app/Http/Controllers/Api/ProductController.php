<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get(){
        return Product::all();
    }
        
    public function create(){
        return "Hello create";
    }
    
    public function update(){
        return "Hello update";
    }

    public function delete(){
        return "Hello delete";
    }
}
