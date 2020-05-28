<?php

namespace App\Repositories;

use App\FilterValue;

class FilterValueRepository
{

  public function all($id)
  {
    return FilterValue::whereFilterId($id)
    ->orderByRaw('LENGTH(value)', 'ASC')
    ->orderBy('value', 'ASC')
    ->get();
  }



  public function findById($filterId)
  {
    return FilterValue::whereId($filterId)
      ->first();
  }

  public function store($request)
  {
 
    FilterValue::create([
      "value" => $request->value,
      "filter_id"=> $request->filter_id
    ]);

  }

  public function update( $request)
  {
    
    return $this->findById($request->id)->update($request->all());

  
  }

  public function delete($filterId)
  {
    return FilterValue::whereId($filterId)->delete();
  }
}
