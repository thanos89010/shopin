<div class="col-lg-3">
  <!--
  *** MENUS AND FILTERS ***
  _________________________________________________________
  -->
  <div class="card sidebar-menu mb-4">
    <div class="card-header">
      <h3 class="h4 card-title">Categories</h3>
    </div>
    <div class="card-body">
      <ul class="nav nav-pills flex-column category-menu">
        @foreach ($categoriesMenu as $category)
        @if (!$category->parent_id)
        <li><a href="{{ route('home.categories',$category->id) }}" class="nav-link">{{ $category->name }} <span
              class="badge badge-secondary">42</span></a>
          @endif
          <ul class="list-unstyled">
            @foreach ($category->children as $children)
            <li><a href="{{ route('home.categories' ,$children->id) }}" class="nav-link">{{ $children->name }}</a></li>
            @endforeach
          </ul>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
  @foreach (App\Filter::all() as $filter)
  <div class="card sidebar-menu mb-4">
    <div class="card-header">
      <h3 class="h4 card-title">{{ $filter->type }} <a href="#" class="btn btn-sm btn-danger pull-right"><i
            class="fa fa-times-circle"></i> Clear</a></h3>
    </div>
    <div class="card-body">
      <ul class="list-group list-group-flush">
        @foreach (App\FilterValue::whereFilterId($filter->id)->get() as $values)
        {{-- @php
        dd($values->id);
        @endphp --}}
        <li class="list-group-item"><a
            href="{{ route('home.filterRam',['include=productFilters.product',"filter[id]=$values->id"]) }}"
            type="checkbox">
            {{ $values->value }}</a> (10)</li>
        @endforeach
      </ul>
    </div>
  </div>
  @endforeach
  <!-- *** MENUS AND FILTERS END ***-->
  <div class="banner"><a href="#"><img src="img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
</div>