<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    

    protected $guarded = [];
    
  public function image()
  {
      return $this->morphOne(Photo::class , 'imageable');
  }

  public function user(){


    return $this->belongsTo('App\User');


}

}
