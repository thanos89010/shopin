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

  public function findById($id)
  {
    return Blog::whereId($id)->first();
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
      $file->move('images', $name);
      $blogPhoto->image()->create(["url" => $name]);
    }
  }

  public function show($id)
  {
    return Blog::findOrFail($id);
  }

  public function update($request)
  {
    $blog = Blog::whereId($request->id)->first();
    $blog->update($request->except("url"));

    if ($request->url) {
      $file = $request->url;
      $name = time() . $file->getClientOriginalName();
      $file->move('images', $name);
      $$blog->image->update(["url" => $name]);
    }
  }

  public function delete($id)
  {
    $blog = $this->findById($id);
    
    if($blog->image){
      unlink(public_path()  . $blog->image->url);
    }

    $blog->delete();
  }

}
