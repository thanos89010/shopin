<?php
namespace App\Repositories;
use App\Role;
use App\User;
use App\Photo;
use App\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserRepository
{

  public function all()
  {
    return User::orderby("id")
      ->get();
  }

  public function create($input)
  {
    $user = new User();
    $data = collect($input)->except('password', "url")->all();
    if (isset($input['password'])) {
      $data['password'] = bcrypt($input['password']);
    }
    $user->create($data);

    $userPhoto = $this->findById(User::latest()->first()->id);
    if (request()->url) {
      $file = request()->url;
      $name = time() . $file->getClientOriginalName();
      $file->move('images', $name);
      $userPhoto->image()->create(["url" => $name]);
    }

  }

  public function showRole()
  {
    return  Role::pluck('name', 'id')->all();
  }

  public function findById($userId)
  {
    return User::where("id", $userId)
      ->firstOrFail();
  }

  public function update($userId)
  {
    $user = User::whereId($userId)->firstOrFail();
    if (request()->password)
      $user->password = bcrypt(request()->password);
    $user->update(request()->except('password'));
  }
  
  public function delete($userId)
  {
    $user = $this->findById($userId);
    unlink(public_path() . "/images/" . $user->url);
    User::whereId($userId)->delete();
  }
}
