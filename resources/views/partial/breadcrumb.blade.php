<div class="col-lg-12">
  <!-- breadcrumb-->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('home') }}">Αρχικη</a></li>
      <li aria-current="page" class="breadcrumb-item active">
        {{ $categories ? $categories->first()->name : "Φιλτρα"  }}
      </li>
    </ol>
  </nav>
</div>