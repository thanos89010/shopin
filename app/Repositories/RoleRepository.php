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
  } 

  public function findById($roleId)
  {
    return Role::whereId($roleId)
    ->firstOrFail();
  }

  public function update($roleId)
  {
     Role::whereId($roleId)->firstOrFail()->update(request()->all());
  }

  public function delete($roleId)
  {
   Role::whereId($roleId)->delete(); 
  }
  
}
