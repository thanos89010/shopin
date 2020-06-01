<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CartRepository;
use Illuminate\Support\Facades\Auth;

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

  
    $shipping = $this->cartRepository->showShipping();
    $categoriesMenu = $this->cartRepository->showMenu();
    $categories = $this->cartRepository->showCategory();
    $products = $this->cartRepository->showProduct();
    $mightAlsoLike = $this->cartRepository->mightAlsoLike();
    
    return view("cart.index", compact("categories", "products","categoriesMenu","mightAlsoLike" ,"shipping"));
  }

  public function store(Request $request)
  {

    if(!Auth::check()){
      return redirect(route('login'));
    }
    
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
