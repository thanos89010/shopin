<div class="col-lg-3">
  <!--
  *** MENUS AND FILTERS ***
  _________________________________________________________
  -->
  <div class="card sidebar-menu mb-4">
    <div class="card-header">
      <h3 class="h4 card-title ">Κατηγοριες</h3>
    </div>
    <div class="card-body">
      <ul class="nav nav-pills flex-column category-menu">
        @foreach ($categoriesMenu as $category)
        @if (!$category->parent_id)
        <li><a href="{{ route('home.categories',$category->id) }}" class="nav-link ">{{ $category->name }}</a>
          @endif
          @foreach ($category->children as $children)
          <ul class="list-unstyled">
            <li><a href="{{ route('home.categories' ,$children->id) }}" class="nav-link">{{ $children->name }}
                {{-- @php
                dd(count($category->children) )
                @endphp --}}
                <span class="badge badge-secondary">42</span></a></li>
          </ul>
          @endforeach
        </li>
        @endforeach
      </ul>
    </div>
  </div>
  <style>

  </style>
  @foreach (App\Filter::all() as $filter)
  <div class="card sidebar-menu mb-4">
    <div class="card-header">
      <h3 style="color: #2b90d9;" class="h4 card-title  font-weight-bold">{{ $filter->type }}</h3>
    </div>
    <div class="card-body">
      <ul class="list-group list-group-flush ">
        @foreach (App\FilterValue::whereFilterId($filter->id)->get() as $values)
        {{-- @php
        dd($values);
        @endphp --}}
        <li class="list-group-item p-2"><a class="filter-title nav-link"
            href="{{ route('home.filterRam',['include=productFilters.product',"filter[id]=$values->id"]) }}"
            type="checkbox">
            {{ $values->value }}</a></li>
        @endforeach
      </ul>
    </div>
  </div>
  @endforeach
  <!-- *** MENUS AND FILTERS END ***-->

</div>