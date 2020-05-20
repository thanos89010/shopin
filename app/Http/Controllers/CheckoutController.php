<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CheckoutRepository;

class CheckoutController extends Controller
{
  protected $checkoutRepository;

  public function __construct(CheckoutRepository $checkoutRepository)
  {
    $this->checkoutRepository = $checkoutRepository;
  }

  public function index()
  {
    $categories = $this->checkoutRepository->showCategory();
    $products = $this->checkoutRepository->showProduct();
    
    return view("cart.checkout.index",compact("categories","products"));

  }
  public function store(Request $request)
  {
    $this->checkoutRepository->create($request);

    return redirect()->back();
  }

    
}
