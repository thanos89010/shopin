<?php

namespace App\Repositories;

use App\Category;
use Illuminate\Http\Request;

class CategoryRepository
{

  public function all()
  {
    return Category::all();
  }
  
  public function create(Request $request)
  {
    Category::create($request->all());
    
  }

  public function findById($categoryId)
  {
    return Category::whereId($categoryId)
      ->first();
  }

  public function update(Request $request,$categoryId)
  {

    $category = Category::whereId($categoryId)->first();

    $category->update(request()->all());
    
  }

  public function delete($categoryId)
  {
    Category::whereId($categoryId)->first()->delete();
  }

  public function showCategory()
  {
    return Category::pluck("name","id")->all();
    
  }
}
