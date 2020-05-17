@extends('layouts.admin')

@section('content')

<h1 class="my-4">View Users</h1>

{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
<!------ Include the above in your HEAD tag ---------->
<div class="container emp-profile">
  <form method="post">
    <div class="row">
      <div class="col-md-4">
        <div class="profile-img">
          <img height="200" src="{{$user->image->url ? $user->image->url : 'http://placehold.it/200x200'}}" alt="" />
        </div>
      </div>

      <div class="col-md-6">
        <div class="profile-head">
          <h5>
            {{ucfirst($user->name)}}
          </h5>
          <h6>
            {{-- {{$user->role}} --}}
          </h6>
          <hr>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                aria-selected="true">About</a>
            </li>

          </ul>
        </div>
      </div>
      <div class="col-md-2">
        <a href="{{route('user.edit',$user->id)}}" class="btn-outline-info text-center form-control"
          name="btnAddMore">Edit Profile<a />
          {!! Form::close() !!}
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-8">
        <div class="tab-content profile-tab" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row">
              <div class="col-md-6">
                <label>User Id</label>
              </div>
              <div class="col-md-6">
                <p>{{$user->id}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Username</label>
              </div>
              <div class="col-md-6">
                <p>{{ucfirst($user->user_name)}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>First Name</label>
              </div>
              <div class="col-md-6">
                <p>{{ucfirst($user->first_name)}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Last Name</label>
              </div>
              <div class="col-md-6">
                <p>{{ucfirst($user->last_name)}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Email</label>
              </div>
              <div class="col-md-6">
                <p>{{$user->email}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Profession</label>
              </div>
              <div class="col-md-6">
                {{-- <p>{{$user->role}}</p> --}}
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </form>
</div>

@endsection