<?php

namespace App\Repositories;

use App\Filter;

class FilterRepository
{

  public function all()
  {
    return Filter::all();
  }

  public function findById($filterId)
  {
    return Filter::whereId($filterId)
      ->first();
  }

  public function store($request)
  {

    Filter::create([
      "type" => $request->type 
    ]);

  }

  public function update( $request)
  {
    
    return $this->findById($request->id)->update($request->all());

  
  }

  public function delete($filterId)
  {
    return Filter::whereId($filterId)->delete();
  }
}
