@extends('layouts.admin')

@section('content')
<h1 class="my-4 font-weight-bold">View blogs</h1>
<div class="card-body m-4 " id="userPanel">
  <div class="table-stats order-table ov-h">
    <table class="table ">
      <thead>
        <tr>
          <th class="serial">#</th>
          <th class="avatar">Photo</th>
          <th>Name</th>
          <th>title</th>
          <th>body</th>
          {{-- <th>View Product</th>
          <th>Edit Product</th>
          <th>Delete Product</th> --}}
        </tr>
      </thead>
      <tbody>
        @foreach ($blogs as $num => $blog)
        <tr>
          <td class="serial">{{$num+1}}.</td>
          <td class="avatar">
            <div class="round-img">
              <img height="80" src="{{$blog->image? $blog->image->url: 'http://placehold.it/400x400'}}">
            </div>
          </td>
          <td> <span class="name">{{$blog->user->first_name}}</span> </td>
          <td> <span class="product">{{$blog->title}}</span> </td>
          <td> <span class="product">{{$blog->body}}</span> </td>
          {{-- <td>
            <a class="btn btn-primary" href="{{route('product.show',$product->id)}}" class="nav-link">Show</a>
          </td>
          <td>
            <a class="btn btn-info" href="{{route('product.edit',$product->id)}}" class="nav-link">Edit</a>
          </td>
          <td>
            <a class="btn btn-danger" href="{{route('product.destroy',$product->id)}}" class="nav-link">Delete</a>
          </td> --}}
        </tr>

        @endforeach
      </tbody>
    </table>
  </div> <!-- /.table-stats -->
</div>

@endsection