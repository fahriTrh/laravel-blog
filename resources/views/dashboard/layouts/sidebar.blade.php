<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'text-danger' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'text-danger' : '' }}" href="/dashboard/posts">
            <span data-feather="file"></span>
            My Posts
          </a>
        </li>
      </ul>
      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span class="text-decoration-underline">Admin</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'text-danger' : '' }}" href="/dashboard/categories">
            <span data-feather="file"></span>
            Post Categories
          </a>
        </li>
      </ul>
      @endcan
    </div>
</nav>