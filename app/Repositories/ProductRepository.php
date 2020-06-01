<?php

namespace App\Repositories;

use App\Product;
use App\Category;
use App\ProductFilter;
use Illuminate\Http\Request;

class ProductRepository
{


  public function all()
  {
    return   Product::all();
  }


  public function create(Request $request)
  {
    $product = new Product();

    $data = collect($request)->except("url")->all();
    $data['slug'] =  str_replace(' ', '-', $request->name);

    $product->create($data);


    $productPhoto = $this->findById(Product::latest()->first()->id);
    $product = Product::whereId($productPhoto->id)->first();
    $product['parent_id']=$productPhoto->category->parent_id;
    $product->save();
    
    
    // $request->parent_id->upd$productPhoto->category->parent_id  ;

    if (request()->url) {
      $file = request()->url;
      $name = time() . $file->getClientOriginalName();
      $file->move('images', $name);
      $productPhoto->image()->create(["url" => $name]);
    }



  }

  public function findById($productId)
  {
    return Product::whereId($productId)
      ->first();
  }

  public function update(Request $request)
  {
    $product = Product::whereId($request->id)->first();
    $product['slug'] =  str_replace(' ', '-', $request->name);
    $product->update($request->except("url"));

    if ($request->url) {
      $file = $request->url;
      $name = time() . $file->getClientOriginalName();
      $file->move('images', $name);
      $product->image->update(["url" => $name]);
    }
  }

  public function delete($ProductId)
  {
    $product = $this->findById($ProductId);
    unlink(public_path()  . $product->image->url);
    Product::whereId($ProductId)->delete();
  }

  public function showProduct()
  {
    return Category::pluck("name","id")->all();
  }

  public function storeAssign($request)
  {
   
  
    // ProductFilter::create([
    //   "product_id"=>$request->product_id,
    //   "filter_value_id"=>$request->filter_value_id
    // ]);
    if(!ProductFilter::whereProductId($request['product_id'])->whereFilterValueId($request['filter_value_id'])->first()){
      ProductFilter::create($request);
    }else{
      dd('allready assigned');

    }

  }

  
}
