<?php

namespace App\Repositories;

use App\Product;
use Illuminate\Http\Request;

class ProductRepository
{

  public function findById($productId)
  {
    return Product::whereId($productId)
      ->first();
  }


  public function all()
  {
    return Product::all();
  }

  public function create(Request $request)
  {

    $product = new Product();

    $data = collect($request)->except("url")->all();
    $data['slug'] =  str_replace(' ', '-', $request->name);

    $product->create($data);

    $productPhoto = $this->findById(Product::latest()->first()->id);

    if (request()->url) {
      $file = request()->url;
      $name = time() . $file->getClientOriginalName();
      $file->move('images', $name);
      $productPhoto->image()->create(["url" => $name]);
    }



  }


}
