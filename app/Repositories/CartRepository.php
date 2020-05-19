<?php

namespace App\Repositories;


use App\Product;
use App\Category;


class CartRepository
{

  public function showCategory()
  {
    return Category::all();
  }
  public function showProduct()
  {
    return Product::all();
  }


  public function all()
  {
  }

  public function add($request)
  {
    \Cart::add([
      'id' => $request->id,
      'name' => $request->name,
      'price' => $request->price,
      'quantity' => $request->quantity,
      'attributes' => [
        'image' => $request->img,
        'details' => $request->details,
        'description' => $request->description,
        'shpping_cost' => $request->shpping_cost,
        'discount_price' => $request->discount_price
      ]
    ]);
  }
  public function update($request)
  {

    \Cart::update(
      $request->id,
      [
        'quantity' => [
          'value' => $request->quantity
        ],
      ]
    );
  }
}
