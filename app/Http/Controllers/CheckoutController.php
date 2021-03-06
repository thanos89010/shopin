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
    $shipping = $this->checkoutRepository->showShipping();
    $categoriesMenu = $this->checkoutRepository->showMenu();
    $categories = $this->checkoutRepository->showCategory();
    $products = $this->checkoutRepository->showProduct();
    return view("cart.checkout.index",compact("categories","products","categoriesMenu","shipping"));

  }

  public function show()
  {
    $categoriesMenu  = $this->checkoutRepository->showCategory();
    $products = $this->checkoutRepository->showProduct();
    
    return view("cart.checkout.show",compact("categoriesMenu","products"));
    
  }
  public function store(Request $request)
  {
    $this->checkoutRepository->create($request);
    return redirect(route('checkout.done'));
  }

    public function done()
  {
    $categoriesMenu = $this->checkoutRepository->showCategory();
    $products = $this->checkoutRepository->showProduct();
    $this->checkoutRepository->clear();
    return view("partial.thx-order",compact("categoriesMenu","products"));
  }

    
}
