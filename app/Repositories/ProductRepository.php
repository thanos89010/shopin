<?php

namespace App\Repositories;

use App\Product;
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

  
}
