<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="{{ route('backend.dashboard') }}" class="brand-link">
            <span class="brand-text fw-light">AdminLTE 4</span>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation" data-accordion="false">

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('backend.dashboard') }}" class="nav-link {{ request()->routeIs('backend.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Riwayat Hidup -->
                <li class="nav-item {{ request()->is('backend/pengalaman_kerja*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('backend/pengalaman_kerja*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-briefcase"></i>
                        <p>
                            Riwayat Hidup
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backend.pengalaman_kerja.index') }}" class="nav-link {{ request()->routeIs('backend.pengalaman_kerja.*') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Pengalaman Kerja</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>