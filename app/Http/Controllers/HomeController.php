<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\FilterValue;
use app\Helpers\showsHelper;
use Illuminate\Http\Request;
use App\Repositories\HomeRepository;
use Spatie\QueryBuilder\QueryBuilder;
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

    return view("home", compact("categoriesMenu", "products"));
  }

  public function categories($id = null)
  {
    $categories = $this->homeRepository->showCategory($id);
    $categoriesMenu = $this->homeRepository->showMenu();
    $products = $this->homeRepository->showProduct($id);



    return view("category", compact("categories", "products", "categoriesMenu"));
  }


  public function filterPrice($id = null)
  {

 
    $categories = $this->homeRepository->showCategory();
    $categoriesMenu = $this->homeRepository->showMenu();
    $products = $this->homeRepository->filterPrice($id);

  

    // dd($products);
    return view("category", compact( "categoriesMenu","categories","products"));
    
  }

  public function filterRam($id = null)
  {

    $test =  QueryBuilder::for(FilterValue::class)
    ->allowedFilters(['id',"product_filters.id"])
     ->allowedIncludes('productFilters')
     ->get();

     foreach ($test as $tes){
     $product = $tes->productFilters->first()->product_id;
     return Product::whereId($product)->first();
     }

     


    $categories = $this->homeRepository->showCategory();
    $categoriesMenu = $this->homeRepository->showMenu();
    $products = $this->homeRepository->filterRam($id);

  

    // dd($products);
    return view("category", compact( "categoriesMenu","categories","products"));
    
  }
    


}
