<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Repositories\ProductRepository;
use App\User;

class ProductController extends Controller
{
  protected $productRepository;

  public function __construct(ProductRepository $productRepository)
  {
    $this->productRepository = $productRepository;
  }




  public function index()
  {
    $products  = $this->productRepository->all();
    return view("admin.product.index",compact("products"));
  }


  public function create()
  {
    return view('admin.product.create');
  }

  public function store(Request $request)
  {

     $this->productRepository->create($request);
    return redirect(route('product.index'));
    
  }

  public function show($productId)
  {
    $product = $this->productRepository->findById($productId);
    return view("admin.product.show",compact("product"));
  }


  public function edit($productId)
  {
    $product = $this->productRepository->findById($productId);
    return view("admin.product.edit",compact("product"));
  }

  public function update(Request $request)
  {
    $this->productRepository->update($request);
    return redirect(route("product.index"));
    
  }

  public function destroy($productId)
  {
    $this->productRepository->delete($productId);
    return redirect(route("product.index"));
  }

    //

}
