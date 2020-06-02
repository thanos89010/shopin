<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilterValue extends Model
{
    //
    protected $guarded = [];
    
    public function getValueAttribute($value)
    {
            return  $value." GB";

    }
    public function filter()
    {
        return $this->belongsTo(Filter::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function productFilters()
    {
        return $this->hasMany(ProductFilter::class);
    }

}
