<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{
  protected $categoryRepository;

  public function __construct(CategoryRepository $categoryRepository)
  {
    $this->categoryRepository = $categoryRepository;
  }

  

  public function create()
  {
    $parrentCategories = $this->categoryRepository->showCategory();

    $categories = $this->categoryRepository->all();
    return view("admin.category.create",compact("categories","parrentCategories"));
  }

  public function store(Request $request)
  {

    $this->categoryRepository->create($request);
    return redirect()->back();
  }

  public function edit($categoryId)
  {
    $category = $this->categoryRepository->findById($categoryId);

    return view("admin.category.edit",compact("category"));
  }

  public function update(Request $request, $categoryId)
  {

    $this->categoryRepository->update($request,$categoryId);

    return redirect(route('category.create'));
  }

  public function destroy($categoryId)
  {
    $this->categoryRepository->delete($categoryId);

    return redirect()->back();
  }
}
