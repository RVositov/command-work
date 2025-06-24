<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    protected $fillable = ['order_id','menu_item_id','quantity','price'];

    public function order()
    {
    return $this->belongsTo(Order::class);
    }

    public function menu_item()
    {
     return $this->belongsTo(Menu_item::class);
    }
}
