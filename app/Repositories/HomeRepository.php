<?php

namespace App\Repositories;

use App\Order;
use App\Filter;
use App\Product;
use App\Category;
use App\OrderItem;
use App\Newslatter;
use App\FilterValue;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\QueryBuilder;

class HomeRepository
{

public function mightAlsoLike($id = null)
{
  return   Product::where("id","!=",$id)->inRandomOrder()->take(3)->get();
}

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
    // echo url('/');
    if(request()->url()==url('/')){
        
      return Product::inRandomOrder()->limit(5)->get();
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

  }

 public function findById($productId)
 {
   return product::whereId($productId)
    ->first();
 }

 public function createNewslatter($request)
 {

   Newslatter::create($request);
 }

 public function search($request)
 {
   $q = $request["q"];

  return $products = Product::where("name","like","%$q%")->get();
 }

 public function account()
 {
   return Order::whereUserId(Auth::user()->id)->get();

 }

 public function showOrder($orderId)
 {
   $findOrder = OrderItem::findOrFail($orderId);
   return $order = Order::whereId($findOrder->id)->first();
 }

 public function showOrderItem($orderId)
 {
    $findOrder = OrderItem::findOrFail($orderId);
    return $ordersItem = OrderItem::whereOrderId($findOrder->id)->get();
 }


}
