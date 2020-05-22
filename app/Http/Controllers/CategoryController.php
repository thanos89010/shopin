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

    $categories = $this->categoryRepository->all();
    $parentCategories = $this->categoryRepository->showCategory();
    return view("admin.category.create",compact("categories","parentCategories"));
  }

  public function store(Request $request)
  {

    $this->categoryRepository->create($request);
    return redirect()->back();
  }

  public function edit($categoryId)
  {
    $category = $this->categoryRepository->findById($categoryId);
    $parentCategories = $this->categoryRepository->showCategory();
    return view("admin.category.edit",compact("category","parentCategories"));
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
