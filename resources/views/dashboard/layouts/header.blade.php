<header class="navbar navbar-dark sticky-top bg-danger flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Dashboard</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form action="{{ ($title == 'Admin Category') ? '/dashboard/categories' : '/dashboard/posts' }}" class="w-100 {{ ($title == 'my-post' || $title == 'Edit Post') ? 'd-none' : '' }}">
      @if($title !== 'Admin Category' && request('category'))
      <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      <input class="form-control w-100" id="search" name="search" type="text" placeholder="Search" aria-label="Search" value="{{ request('search') }}">
    </form>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="nav-link px-3 bg-danger border-0">Logout</button>
        </form>
      </div>
    </div>
</header>