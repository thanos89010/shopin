<?php

namespace App\Repositories;

use App\Category;
use App\Product;

class HomeRepository
{
  public function showCategory()
  {
    return Category::all();
  }
  public function showProduct()
  {
    return Product::all();
  }


 
}
