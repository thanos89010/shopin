<?php

namespace App\Http\Controllers;

use App\User;
use App\Filter;
use App\Product;
use App\Category;
use App\FilterValue;
use App\ProductFilter;
use Illuminate\Http\Request;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
  protected $productRepository;

  public function __construct(ProductRepository $productRepository)
  {
    $this->productRepository = $productRepository;
  }

  public function assign(Product $product , $productId)
  {
   
   $filters =  Filter::pluck("type","id")->all();
   $filtersValue =  FilterValue::pluck("value","id")->all();
   
   $product = $this->productRepository->findById($productId);
    return view("admin.product.assign",compact("filters","filtersValue","product"));
  }

  public function assignStore(Request $request)
  {
    $valueProduct = $this->productRepository->storeAssign($request->all());
   
    return redirect()->back();
  }


  public function index()
  {
    
    $products  = $this->productRepository->all();
    return view("admin.product.index", compact("products"));
  }


  public function create()
  {
    $categories = $this->productRepository->showProduct();
    return view('admin.product.create', compact("categories"));
  }

  public function store(Request $request)
  {

    $this->productRepository->create($request);
    return redirect(route('product.index'));
  }

  public function show($productId)
  {
    $product = $this->productRepository->findById($productId);
    return view("admin.product.show", compact("product"));
  }


  public function edit($productId)
  {
    $categories = $this->productRepository->showProduct();
    $product = $this->productRepository->findById($productId);
    return view("admin.product.edit", compact("product", "categories"));
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
