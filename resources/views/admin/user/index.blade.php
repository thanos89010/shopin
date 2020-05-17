@extends('layouts.admin')

@section('content')
<h1 class="my-4">View Users</h1>
<div class="card-body m-4 " id="userPanel">
  <div class="table-stats order-table ov-h">
    <table class="table ">
      <thead>
        <tr>
          <th class="serial">#</th>
          <th class="avatar">Avatar</th>
          <th>Name</th>
          <th>Email</th>
          {{-- <th>Role</th> --}}
          <th>Created</th>
          <th>Updated</th>
          <th>Profil User</th>
          <th>Edit User</th>
          <th>Delete User</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $num => $user)
        <tr>
          <td class="serial">{{$num+1}}.</td>
          <td class="avatar">
            <div class="round-img">
              <a href="#"><img class="rounded-circle" height="50"
                  src="{{$user->image->url ? $user->image->url: 'http://placehold.it/400x400'}}"></a>

            </div>
          </td>
          <td> <span class="name">{{$user->first_name}}</span> </td>
          <td> <span class="product">{{$user->email}}</span> </td>
          {{-- <td> <span class="product">{{$user->role->name}}</span> </td> --}}
          <td> <span class="product">{{$user->created_at->diffForHumans()}}</span> </td>
          <td> <span class="product">{{$user->updated_at->diffForHumans()}}</span> </td>
          <td>
            <a class="btn btn-primary" href="{{route('user.show',$user->id)}}" class="nav-link">Show</a>
          </td>
          <td>
            <a class="btn btn-info" href="{{route('user.edit',$user->id)}}" class="nav-link">Edit</a>
          </td>
          <td>
            <a class="btn btn-danger" href="{{route('user.destroy',$user->id)}}" class="nav-link">Delete</a>
          </td>
        </tr>

        @endforeach
      </tbody>
    </table>
  </div> <!-- /.table-stats -->
</div>

@endsection