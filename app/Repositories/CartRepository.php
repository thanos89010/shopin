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
  public function showMenu()
  {
    // $test = Category::findOrFail(1);
    // dd($test->slug);
    return Category::all();
  }

  public function showShipping()
  {
    $shipping = 0 ;
    foreach(\Cart::getContent() as $product ){
      $shipping += $product->attributes->shipping_cost *$product->quantity;
    }
    return $shipping ;
  }


  public function mightAlsoLike()
  {
    return   Product::all(); 
  }

  public function add($request)
  {
  
    \Cart::add([
      'id' => $request->id,
      'name' => $request->name,
      'price' => $request->price,
      'quantity' => $request->quantity,
      'attributes' => [
        'url' => $request->url,
        'details' => $request->details,
        'description' => $request->description,
        'shipping_cost' => $request->shipping_cost,
        'discount_price' => $request->discount_price
      ]
    ]);
  }
  public function update($request)
  {
    if($request->quantity<=0)
      return redirect()->back();

    \Cart::update(
      $request->id,
      [
        'quantity' => [
            'relative' => false,
            'value' => $request->quantity
        ],
      ]
    );
  }

  public function delete($cartId)
  {
    \Cart::remove($cartId);
  }

  public function clear()
  {
    \Cart::clear();
  }
}
