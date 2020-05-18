<?php
namespace App\Http\Controllers;
use App\Role;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\UserRole;
class UserController extends Controller
{
    protected $userRepository;
    
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users =  $this->userRepository->all();
        return view("admin.user.index", compact("users"));
    }

    public function create()
    {
        $roles = $this->userRepository->showRole();
        return view('admin.user.create', compact("roles"));
    }

    public function store(Request $request)
    {
        $this->userRepository->create($request);
        return redirect(route('user.index'));
    }

    public function show($userId)
    {
        $user = $this->userRepository->findById($userId);
        return view("admin.user.show", compact("user"));
    }

    public function edit($userId)
    {
        $roles = $this->userRepository->showRole();
        $user = $this->userRepository->findById($userId);
        return view('admin.user.edit', compact("user", "roles"));
    }

    public function update($userId)
    {
        $this->userRepository->update($userId);
        return redirect(route('user.index'));
    }

    public function destroy($userId)
    {
        $this->userRepository->delete($userId);
        return redirect()->back();
    }
}
