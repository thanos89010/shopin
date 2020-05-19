<ul class="dropdown-menu megamenu">
  <li>
    <div class="row">
      @foreach ($categories as $category)
      <div class="col-md-6 col-lg-3">
        @if (!$category->parent_id)
        <h5>{{ $category->name }}</h5>
        @endif
        <ul class="list-unstyled mb-3">
          @foreach ($category->children as $children)
          <li class="nav-item"><a href="category.html" class="nav-link">{{ $children->name }}</a></li>
          @endforeach
        </ul>
      </div>
      @endforeach
    </div>
  </li>
</ul>