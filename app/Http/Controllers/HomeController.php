<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\Category;
use App\FilterValue;
use app\Helpers\showsHelper;
use App\OrderItem;
use Illuminate\Http\Request;
use App\Repositories\HomeRepository;
use Illuminate\Support\Facades\Auth;
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

    return view("category", compact("categoriesMenu", "categories", "products"));
  }
  public function filterRam($id = null)
  {
    $categories = $this->homeRepository->showCategory();
    $categoriesMenu = $this->homeRepository->showMenu();
    $products = $this->homeRepository->filterRam($id);

    return view("category", compact("categoriesMenu", "categories", "products"));
  }
  public function show($id)
  {
    $categories = $this->homeRepository->showCategory();
    $categoriesMenu = $this->homeRepository->showMenu();
    $product = $this->homeRepository->findById($id);
    $mightAlsoLike = $this->homeRepository->mightAlsoLike($id);
    


     return view("product" , compact("categoriesMenu","categories","product","mightAlsoLike"));


  }

  public function newslatter(Request $request)
  {
    $this->homeRepository->createNewslatter($request->all());
    return redirect()->back();
  }

  public function contact()
  {
    $categories = $this->homeRepository->showCategory();
    $categoriesMenu = $this->homeRepository->showMenu();
    return view("contact",compact("categoriesMenu","categories"));
  }

  public function search(Request $request)
  {
    // $q = $request->input("q");
    // $products = Product::where("name","like","%$q%")->get();
    $products = $this->homeRepository->search($request->input());
    $categories = $this->homeRepository->showCategory();
    $categoriesMenu = $this->homeRepository->showMenu();


    return view("search",compact("categoriesMenu","categories","products"));

  }

  public function account()
  {
    $orders = $this->homeRepository->account();
    $categoriesMenu = $this->homeRepository->showMenu();
    $categories = $this->homeRepository->showCategory();

    return view("account",compact("categories","categoriesMenu","orders"));
  }

  public function order($orderId)
  {
    
    $order = $this->homeRepository->showOrder($orderId);
    $ordersItem = $this->homeRepository->showOrderItem($orderId);
    $categoriesMenu = $this->homeRepository->showMenu();
    $categories = $this->homeRepository->showCategory();

    return view("order",compact("categories","categoriesMenu","ordersItem","order"));
  }


  public function liveSearch(Request $request)
  {
    $key = $request["key"];
    $products = Product::where("name", "like", "%$key%")->take(5)->get();

    return view("partial.search",compact("products"));
  }

  public function blog()
  {
    $categoriesMenu = $this->homeRepository->showMenu();
    $blogs = $this->homeRepository->showBlog();

    return view("blog",compact("categoriesMenu","blogs"));
  
  }


}
