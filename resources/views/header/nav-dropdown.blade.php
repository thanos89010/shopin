<ul class="dropdown-menu megamenu">
  <li>
    <div class="row">
      @foreach ($categoriesMenu as $category)
      <div class="col-md-6 col-lg-3">
        @if (!$category->parent_id)
         <h5>  <a href="{{ route('home.categories',$category->name) }}">{{ $category->name }}</a></h5>
        @endif
        <ul class="list-unstyled mb-3">
          @foreach ($category->children as $children)
          <li class="nav-item"><a href="{{ route('home.categories' ,$children->id) }}" 
          class="nav-link">{{ $children->name }}</a></li>
          @endforeach
        </ul>
      </div>
      <a href="{{ route('home.categories') }}"></a>
      @endforeach
    </div>
  </li>
</ul>