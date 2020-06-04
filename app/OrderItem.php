<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //

    protected $guarded = [];

    public function getPriceAttribute($value)
    {
        return round($value,2);
    }
    

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    
}
