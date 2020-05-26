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
    $categoriesMenu = $this->checkoutRepository->showMenu();
    $categories = $this->checkoutRepository->showCategory();
    $products = $this->checkoutRepository->showProduct();
    return view("cart.checkout.index",compact("categories","products","categoriesMenu"));

  }

  public function show()
  {
    $categories = $this->checkoutRepository->showCategory();
    $products = $this->checkoutRepository->showProduct();
    
    return view("cart.checkout.show",compact("categories","products"));
    
  }
  public function store(Request $request)
  {
    $this->checkoutRepository->create($request);
    return redirect(route('checkout.done'));
  }

    public function done()
  {
    $categories = $this->checkoutRepository->showCategory();
    $products = $this->checkoutRepository->showProduct();
    return view("includes.thx-order",compact("categories","products"));
  }

    
}
