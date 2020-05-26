<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    //
    protected $guarded = [];
    
    public function values()
    {
        return $this->hasMany(FilterValue::class);
    }
}
