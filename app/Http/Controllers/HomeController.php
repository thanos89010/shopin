<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use app\Helpers\showsHelper;
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
      
         $categories = $this->homeRepository->showCategory();
        $products = $this->homeRepository->showProduct();
        
        return view("home",compact("categories","products"));
    }
}
