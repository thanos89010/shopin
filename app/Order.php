<?php

namespace App;

use App\User;
use App\OrderItem;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $guarded = [];

    public function getTotalAttribute($value)
    {
        return round($value,2);
    }
    
    public function getFullNameAttribute() {
        return $this->first_name . ' ' . $this->last_name;
    } 

 
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }


}
