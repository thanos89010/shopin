<?php

namespace App\Http\Controllers;

use App\Repositories\BlogRepository;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
      $this->blogRepository = $blogRepository;
    }

    public function index()
    {
      $blogs = $this->blogRepository->all();

        return view("admin.blog.index",compact("blogs"));
    }

    public function create()
    {
      return view("admin.blog.create");
    }

    public function store(Request $request)
    {
  
      $this->blogRepository->create($request);

      return redirect(route('blog.index'));
      
    }

    public function show($id)
    {
      $blog = $this->blogRepository->show($id);

      return view("admin.blog.show",compact("blog"));
    }

}
