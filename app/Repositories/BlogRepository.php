<?php

namespace App\Repositories;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;

class BlogRepository
{

  public function all()
  {
    return Blog::all();
  }

  public function create($request)  
  {
    $blog = new Blog();
    $data = collect($request)->except("url")->all();
   
    $blog->create($data);

    $blogPhoto = Blog::findOrFail(Blog::latest()->first()->id);

    if (request()->url) {
      $file = request()->url;
      $name = time() . $file->getClientOriginalName();
      $file->move('images/blog', $name);
      $blogPhoto->image()->create(["url" => $name]);
    }
  }

  public function show($id)
  {
    
  }

}
