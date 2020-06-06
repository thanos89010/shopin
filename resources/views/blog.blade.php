@extends('layouts.app')


@section('content')

<div id="all">
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- breadcrumb-->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class=""><a href="{{ route('home') }}">Αρχικη</a></li>
              <li aria-current="page" class="breadcrumb-item active">/Blog</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <!--
        *** LEFT COLUMN ***
        _________________________________________________________
        -->
        <div id="blog-listing" class="col-lg-12">
          <div class="box">
            <h1>Shopin Blog</h1>
            <p> Όλα τα τελευταία trends του Internet</p>
          </div>
          <!-- post-->
          @foreach ($blogs as $num=> $blog)
          <div class="post my-5">
            <h2>{{ $blog->title }}</h2>
            <p class="">Απο <strong>{{ $blog->user->first_name }}</strong> </p>
            <hr>
            <p class="date-comments "><i class="fa fa-calendar-o m-2"></i>{{$blog->created_at->format("d-m-y")}}</p>
            <div class="image">
              <img width="500" src="{{ $blog->image->url }}" alt="Example blog post alt" class="img-fluid">
            </div>
            <div>
              <p class="intro">{{$blog->body}}</p>
            </div>
            <hr>
          </div>
          @endforeach

          <!-- /.col-lg-9-->
        </div>
        </>
      </div>
    </div>
  </div>

  @endsection