<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CartRepository;

class CartController extends Controller
{
  protected $cartRepository;

  public function __construct(CartRepository $cartRepository)
  {
    $this->cartRepository = $cartRepository;
  }

  //


  public function index()
  {
    $categories = $this->cartRepository->showCategory();
    $products = $this->cartRepository->showProduct();
    return view("cart.index", compact("categories", "products"));
  }

  public function store(Request $request)
  {

    $this->cartRepository->add($request);
    return redirect()->back();
  }

 public function update(Request $request)
 {
    
   $this->cartRepository->update($request);
   return redirect()->back();
 }

 public function destroy($cartId)   
 {
   $this->cartRepository->delete($cartId);

   return redirect()->back();
 }

 public function clear()
 {
   $this->cartRepository->clear();
   return redirect()->back();
   
 }
}
