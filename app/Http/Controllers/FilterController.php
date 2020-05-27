<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\FilterRepository;

class FilterController extends Controller
{
  protected $filterRepository;

  public function __construct(FilterRepository $filterRepository)
  {
    $this->filterRepository = $filterRepository;
  }

    public function create()
    {
        $filters = $this->filterRepository->all();


        return view("admin.product.filter.create" ,compact("filters"));
    }

    public function store(Request $request)
    {
       $data = $this->filterRepository->store($request);

       return redirect()->back();
      
    }
    
    public function edit($id)
    {
      $filter = $this->filterRepository->findById($id);
      return view("admin.product.filter.edit" ,compact("filter"));
    }

    public function update(Request $request)
    {
        $this->filterRepository->update($request);

        return redirect(route('filter.create'));
    }

    public function destroy($id)
    {
      $this->filterRepository->delete($id);

      return redirect()->back();
    }

    //



}
