<div id="miniSidebar">
    <div class="brand-logo">
      <a class="d-none d-md-flex align-items-center gap-2" href="{{ route('dashboard') }}">
        <img src="{{ asset('assets/admin/images/brand/logo/logo-icon.svg') }}" alt="Logo" />
        <span class="fw-bold fs-4 site-logo-text">Tuition Portal</span>
      </a>
    </div>

    <ul class="navbar-nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
          <span class="nav-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-layout-dashboard">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M4 4h6v8h-6z" /><path d="M4 16h6v4h-6z" /><path d="M14 12h6v8h-6z" /><path d="M14 4h6v5h-6z" />
            </svg>
          </span>
          <span class="text">Dashboard</span>
        </a>
      </li>

      <li class="nav-item mt-4 mb-2">
        <div class="navbar-heading text-uppercase text-muted fw-bold" style="font-size: 11px; padding: 0 20px;">Management</div>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->is('admin/students*') ? 'active' : '' }}" href="{{ route('admin.students') }}">
          <span class="nav-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-users">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <circle cx="9" cy="7" r="4" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
            </svg>
          </span>
          <span class="text">Students</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->is('admin/teachers*') ? 'active' : '' }}" href="{{ route('admin.teachers') }}">
          <span class="nav-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-school">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" /><path d="M6 10.6V16a6 3 0 0 0 12 0v-5.4" />
            </svg>
          </span>
          <span class="text">Teachers</span>
        </a>
      </li>

    </ul>
  </div>
