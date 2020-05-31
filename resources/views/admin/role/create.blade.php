@extends('layouts.admin')

@section('content')

<div class="my-4">
  <div class="row">
    <div class="col-md-6 ">
      <h1 class="font-weight-bold">Create roles</h1>
      <div class=" form-group pl-5">
        {!! Form::open(["method"=>"post", "action"=>"RoleController@store"]) !!}
        {!! Form::label("name", "Name:") !!}
        {!! Form::text("name", null, ["class"=>"form-control"]) !!}
      </div>
      <div class="form-group pl-5">
        {!! Form::submit("Create Role", ["class"=>"btn btn-primary"]) !!}
      </div>
      {!! Form::close() !!}
    </div>
    <div class="col-md-4">
      <h1 class="font-weight-bold">View Roles</h1>
      <ol>
        @foreach ($roles as $role)
        <li class="ml-4 h3 d-xl-flex  d-block">
          <span class="d-flex flex-fill">
            {{ $role->name }}
          </span>
          <div class="d-flex ">
            <a class=" btn btn-info mr-2" href="{{ route('roles.edit',$role->id) }}">Edit Role</a>
            {!! Form::open(["mathod"=>"delete","action"=>["RoleController@destroy",$role->id]]) !!}
            <a class="btn btn-danger" href="{{ route('roles.destroy',$role->id) }}">Delete Role</a>
            {!! Form::close() !!}
          </div>
        </li>

        @endforeach
      </ol>



    </div>


  </div>
</div>





@endsection