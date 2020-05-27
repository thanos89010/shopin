<div class="col-lg-12">
  <!-- breadcrumb-->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
      <li aria-current="page" class="breadcrumb-item active">
        {{ $categories ? $categories->first()->name : "sds"  }}
      </li>
    </ol>
  </nav>
</div>