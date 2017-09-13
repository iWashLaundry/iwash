<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemPrice extends Model
{
    protected $table = "item_price";
    protected $primaryKey = "item_price_id";
    public $timestamps = false;
}
