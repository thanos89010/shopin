<?php

namespace App\Repositories;

use App\Order;
use App\Product;
use App\Category;
use App\OrderItem;
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

  public function clear()
  {
    \Cart::clear();
  }


  public function create($request)
  {
    // $order = new order();
    $data = collect($request)->all();
    $order = Order::create($data);

    if ($data) {

      $items = \Cart::getContent();
          foreach ($items as $item)
          {
            // $orderId = order::latest()->first()->id;
            // dd($orderId);
              $orderItem = new OrderItem([
                  'product_id'    =>  $item->id,
                  // 'order_id'     =  $orderId, 
                  'quantity'      =>  $item->quantity,
                  'price'         =>  $item->getPriceSum()
              ]);      
              // $orderItem['order_id']=$orderId;
              
              $order->items()->save($orderItem);
              
          }
  }

  //  
  }


}
