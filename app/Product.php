<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

  
    protected $guarded = [];
    
    public function getPriceAttribute($value)
    {
        // return $value."€";
        return  (int)$value;
        
    }

    // public function getDescriptionAttribute($value)
    // {
    //     if (strlen($value) > 125){
    //         return substr_replace($value, "...", 80);
    //     }else{
    //         return $value;
    //     }
    // }

   
    
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