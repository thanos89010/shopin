<?php

namespace App\Repositories;

use App\Category;
use App\Product;

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
    // $test = Category::findOrFail(1);
    // dd($test->slug);
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

  public function categories($request)
  {
  }
}
