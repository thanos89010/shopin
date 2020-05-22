<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use app\Helpers\showsHelper;
use Illuminate\Http\Request;
use App\Repositories\HomeRepository;
use Symfony\Component\Console\Helper\Helper;

class HomeController extends Controller
{
  protected $homeRepository;

  public function __construct(HomeRepository $homeRepository)
  {
    $this->homeRepository = $homeRepository;
  }
 

    public function index()
    {
      
      $categoriesMenu = $this->homeRepository->showMenu();
        $products = $this->homeRepository->showProduct();
        
        return view("home",compact("categoriesMenu","products"));
    }

    public function categories($id = null)
    {
     
      $categories = $this->homeRepository->showCategory($id);
      $categoriesMenu = $this->homeRepository->showMenu();
      $products = $this->homeRepository->showProduct($id );
     
      // dd(count($categories));
     
      return view("category",compact("categories","products","categoriesMenu"));
    }

}
