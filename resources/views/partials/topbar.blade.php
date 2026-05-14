<nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
    <div class="container">
      <a class="d-flex align-items-center gap-2 order-lg-1" href="{{ route('dashboard') }}">
        <img src="{{ asset('assets/admin/assets/images/brand/logo/logo-icon.svg') }}" alt="Logo" />
        <span class="fw-bold fs-4 site-logo-text">Tuition Portal</span>
      </a>

      <div class="d-flex align-items-center gap-2 order-lg-3">
        <div class="dropdown">
          <button class="btn btn-ghost btn-icon rounded-circle d-flex align-items-center" type="button" aria-expanded="false" data-bs-toggle="dropdown">
            <i class="ti theme-icon-active lh-1 fs-5"><i class="ti theme-icon ti-sun"></i></i>
          </button>
          <ul class="dropdown-menu dropdown-menu-end shadow">
            <li><button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light"><i class="ti ti-sun"></i> <span class="ms-2">Light</span></button></li>
            <li><button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"><i class="ti ti-moon-stars"></i> <span class="ms-2">Dark</span></button></li>
          </ul>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-primary shadow-sm">
                Logout
            </button>
        </form>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse order-lg-2" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/students*') ? 'active' : '' }}" href="{{ route('admin.students') }}">Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/teachers*') ? 'active' : '' }}" href="{{ route('admin.teachers') }}">Teachers</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
