@extends('layouts.admin')

@section('content')
<h1 class="my-4 font-weight-bold">View Products</h1>
<div class="card-body m-4 " id="userPanel">
  <div class="table-stats order-table ov-h">
    <table class="table ">
      <thead>
        <tr>
          <th class="serial">#</th>
          <th class="avatar">Photo</th>
          <th>Name</th>
          <th>Details</th>
          <th>Description</th>
          <th>Price</th>
          <th>Shipping Cost</th>
          <th>Quantity</th>
          <th>Status</th>
          <th>View Product</th>
          <th>Edit Product</th>
          <th>Delete Product</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $num => $product)
        <tr>
          <td class="serial">{{$num+1}}.</td>
          <td class="avatar">
            <div class="round-img">
              <img height="80" src="{{$product->image? $product->image->url: 'http://placehold.it/400x400'}}">
            </div>
          </td>
          <td> <span class="name">{{$product->name}}</span> </td>
          <td> <span class="product">{{$product->details}}</span> </td>
          <td> <span class="product">{{$product->description}}</span> </td>
          <td> <span class="product">{{$product->price}}</span> </td>
          <td> <span class="product">{{$product->shipping_cost}}</span> </td>
          <td> <span class="product">{{$product->quantity}}</span> </td>
          <td> <span class="product">{{$product->product_status}}</span> </td>
          <td>
            <a class="btn btn-primary" href="{{route('product.show',$product->id)}}" class="nav-link">Show</a>
          </td>
          <td>
            <a class="btn btn-info" href="{{route('product.edit',$product->id)}}" class="nav-link">Edit</a>
          </td>
          <td>
            <a class="btn btn-danger" href="{{route('product.destroy',$product->id)}}" class="nav-link">Delete</a>
          </td>
        </tr>

        @endforeach
      </tbody>
    </table>
  </div> <!-- /.table-stats -->
</div>

@endsection