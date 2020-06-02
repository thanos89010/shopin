<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\FilterValueRepository;

class FilterValueController extends Controller
{
  protected $filterValueRepository;

  public function __construct(FilterValueRepository $filterValueRepository)
  {
    $this->filterValueRepository = $filterValueRepository;
  }


  public function create($id)
  {
    
      $filtersValue = $this->filterValueRepository->all($id);
      $value =$id;


      return view("admin.product.filter.filterValue.create" ,compact("filtersValue","value"));
  }

  public function store(Request $request)
  {



      $this->filterValueRepository->store($request);

     return redirect()->back();
    
  }
  
  public function edit($id)
  {
    $filterValue = $this->filterValueRepository->findById($id);
    return view("admin.product.filter.filterValue.edit" ,compact("filterValue"));
  }

  public function update(Request $request)
  {
      $this->filterValueRepository->update($request);

      return redirect(route('filterValue.create'));
  }

  public function destroy($id)
  {

    $this->filterValueRepository->delete($id);

    return redirect()->back();
  }

  //
    //


}
