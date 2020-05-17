<?php

namespace App\Http\Controllers;


use App\Role;
use Illuminate\Http\Request;
use App\Repositories\RoleRepository;

class RoleController extends Controller
{
  protected $roleRepository;

  public function __construct(RoleRepository $roleRepository)
  {
    $this->roleRepository = $roleRepository;
  }

  public function create()
  {
    $roles =  $this->roleRepository->all();
    

      return view("admin.role.create", compact("roles"));
  }


  public function store(Request $request)
  {
     
    $this->roleRepository->create($request);

      return redirect(route('roles.create'));
  }
  
  public function edit($roleId)  
  {
    $role = $this->roleRepository->findById($roleId);
 
    return view("admin.role.edit",compact("role"));
  }


  public function update($request)
  {
    $this->roleRepository->update($request);
    return redirect(route("roles.create"));
  }

  public function destroy($roleId)
  {
      $this->roleRepository->delete($roleId);
      return redirect()->back();
  }


}
