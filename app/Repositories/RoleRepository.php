<?php

namespace App\Repositories;

use App\Role;
use App\UserRole;
use Illuminate\Support\Facades\Auth;

class RoleRepository
{

  public function all()
  {
    $roles = Role::all();

    return $roles;
    

  }

  public function create($input)
  {
    $role =  Role::create(request()->all());

    $user = 1 ; /*NA to svisw auto */

    $data = [
      "user_id"=>$user,
      "role_id"=>$role->id
    ];

    UserRole::create($data);
      


  } 
}
