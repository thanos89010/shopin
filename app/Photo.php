<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $guarded = [];

    protected $photo = "/images/";

    public function imageable()
    {
        return $this->morphTo();
    }

    public function getUrlAttribute($value)
    {
        return  $this->photo . $value;
    }


}
