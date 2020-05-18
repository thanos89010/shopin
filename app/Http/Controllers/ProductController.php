<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
  protected $productRepository;

  public function __construct(ProductRepository $productRepository)
  {
    $this->productRepository = $productRepository;
  }

  public function index()
  {
    
  }


  public function create()
  {
    return view('admin.product.create');
  }

  public function store(Request $request)
  {
    return $this->productRepository->create($request);

    return redirect(route('product.index'));
  }


    //

}
