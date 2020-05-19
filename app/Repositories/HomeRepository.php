<?php

namespace App\Repositories;

use App\Category;

class HomeRepository
{
  public function showCategory()
  {
    // return Category::whereParrentId(0)->get();
    return Category::all();
  }
  public function showSubCategory()
  {
    return Category::whereParentId(1)->get();
  }
}
