<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <!-- Navbar Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
            aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <h1 class="navbar-brand navbar-brand-autodark">
            <div class="d-flex align-items-center justify-content-center">
                <a href="/dashboard" class="d-flex align-items-center text-decoration-none">

                    <span class="mb-0">Dashboard</span>

                </a>
            </div>

        </h1>

        <!-- Mobile Navigation -->
        <div class="navbar-nav flex-row d-lg-none">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu">
                    <div class="d-none d-xl-block ps-2">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="mt-1 small text-secondary">{{ Auth::user()->role }}</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="#" class="dropdown-item">Settings</a>
                    <a href="{{ route('logout') }}" class="dropdown-item"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>

        <!-- Sidebar Navigation -->
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('dashboard.index') ? 'active' : '' }}"
                        href="{{ route('dashboard.index') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-home icon"></i>
                        </span>
                        <span class="nav-link-title">Dashboard</span>
                    </a>
                </li>

                <!-- Landing Page Header -->
                <li class="nav-item">
                    <div class="nav-link">
                        <span class="nav-link-title">Portfolio</span>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Route::is('dashboard.index') ? 'active' : '' }}"
                        href="{{ route('dashboard.index') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-user-circle icon"></i>
                        </span>
                        <span class="nav-link-title">Profileku</span>
                    </a>
                </li>

                <!-- Content Dropdown -->
                {{-- <li
                    class="nav-item {{ Route::is('be/hero.*') || Route::is('be/galery.*') || Route::is('be/teams.index') || Route::is('be/testimonials.index') ? 'active' : '' }} dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-content" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button"
                        aria-expanded="{{ Route::is('be/hero.*') || Route::is('be/galery.*') || Route::is('be/teams.index') || Route::is('be/testimonials.index') ? 'true' : 'false' }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-device-desktop-analytics icon"></i>
                        </span>
                        <span class="nav-link-title">Konten</span>
                    </a>

                    <div
                        class="dropdown-menu {{ Route::is('be/hero.*') || Route::is('be/teams.index') || Route::is('be/testimonials.index') || Route::is('be/galery.*') ? 'show' : '' }}">
                        <a class="dropdown-item {{ Route::is('be/hero.*') ? 'active text-white' : '' }}"
                            href="{{ route('be/hero.index') }}">Hero</a>
                        <a class="dropdown-item {{ Route::is('be/teams.index') ? 'active text-white' : '' }}"
                            href="{{ route('be/teams.index') }}">Teams</a>
                        <a class="dropdown-item {{ Route::is('be/testimonials.index') ? 'active text-white' : '' }}"
                            href="{{ route('be/testimonials.index') }}">Testimonials</a>
                        <a class="dropdown-item {{ Route::is('be/galery.*') ? 'active text-white' : '' }}"
                            href="{{ route('be/galery.index') }}">Galery</a>
                    </div>
                </li> --}}


            </ul>
        </div>
    </div>
</aside>
