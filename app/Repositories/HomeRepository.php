<?php

namespace App\Repositories;

use App\Filter;
use App\Product;
use App\Category;
use App\FilterValue;
use Spatie\QueryBuilder\QueryBuilder;

class HomeRepository
{


  public function showCategory($id = null)
  {
    if ($id) {
      return  Category::whereId($id)->get();
    }
  }

  public function showMenu()
  {
    return Category::all();
  }


  public function showProduct($id = null)
  {
    if ($id) {
      if (Category::findOrFail($id)->parent_id) {
        return  Product::whereCategoryId($id)->get();
      }
      return Product::whereParentId($id)->get();
    }


    return Product::all();
  }

  public function filterPrice($id = null)
  {
    if ($id) {
      if (Category::findOrFail($id)->parent_id) {
        return   QueryBuilder::for(Product::whereCategoryId($id))
          ->allowedSorts('price')
          ->get();
      }
      return  QueryBuilder::for(Product::whereParentId($id))
        ->allowedSorts('price')
        ->get();
    }
    return  QueryBuilder::for(Product::class)
      ->allowedSorts('price')
      ->get();
  }

  public function filterRam()
  {

    $test =  QueryBuilder::for(FilterValue::class)
    ->allowedFilters(['id', "product_filters.id"])
    ->allowedIncludes('productFilters.product')
    ->get()
    ->first();


  if (count($test->productFilters()->get())) {
    foreach ($test->productFilters()->get() as $tes) {
      $pro[] =  $tes->product()->get();
    }

    return  $pro;
  }
  


  //  return  QueryBuilder::for(FilterValue::class)
  //  ->allowedFilters(['id',"product_filters.id"])
  //   ->allowedIncludes('productFilters')
  //   ->get();
   
  }
}
