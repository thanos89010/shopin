<?php

namespace App\Http\Controllers;


use App\Repositories\RoleRepository;
use Illuminate\Http\Request;

class RoleController extends Controller
{
  protected $roleRepository;

  public function __construct(RoleRepository $roleRepository)
  {
    $this->roleRepository = $roleRepository;
  }

  public function index()
  {
    
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


}
