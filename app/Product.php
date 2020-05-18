<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  
    protected $guarded = [];


    public function image()
    {
        return $this->morphOne(Photo::class , 'imageable');
    }

}