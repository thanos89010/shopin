<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Repositories\HomeRepository;

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
        $subcategories = $this->homeRepository->showSubCategory();
        // foreach ($categories as $num => $category ) {
           
        //     dd($category->par);
        //    }   
    
        
        return view("home",compact("categories","subcategories"));
    }
}
