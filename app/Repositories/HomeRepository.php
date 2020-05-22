<?php

namespace App\Repositories;

use App\Category;
use App\Product;

class HomeRepository
{


  public function showCategory($id = null)
  {
    if($id)
      return  Category::whereId($id)->get();

  }

  public function showMenu()
  {
      return Category::all();
  }


  public function showProduct($id = null)
  {
   if($id){
     return  Product::whereCategoryId($id)->get();
   }
   
   else {
     return Product::all();
   }


   
  }

  public function categories($request)
  {

  
    
   
  }

 
}
