<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilterValue extends Model
{
    //
    protected $guarded = [];
    
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

    // public function products()
    // {
    //     $products = $this->hasMany(ProductFilter::class);

    //     return $products;
    //     foreach($products as $pro ){
    //         return $this->belongsTo(Product::class);
    //     }

    // }
}
