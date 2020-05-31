<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  
    protected $guarded = [];
    
    public function getPriceAttribute($value)
    {
        return $value."€";
    }
    
    public function image()
    {
        return $this->morphOne(Photo::class , 'imageable');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,"category_id");
    }

    public function attributes()
    {
        return $this->hasMany(ProductFilter::class);
    }
    
    

}