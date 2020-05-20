<?php

namespace App\Repositories;

use App\Order;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class CheckoutRepository
{

  public function showCategory()
  {
    return Category::all();
  }
  public function showProduct()
  {
    return Product::all();
  }

  public function create(Request $request)
  {
    dd($request->all());
    Order::create([$request->all()]);
  }


}
