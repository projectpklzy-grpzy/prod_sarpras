<!-- Desktop Sidebar -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
    <div class="position-sticky sidebar-sticky">
        <div class="sidebar-content">
            <!-- Dashboard Section -->
            <div class="sidebar-section">
                <h6 class="sidebar-heading px-3 mt-3 mb-2 text-uppercase text-muted">
                    <i class="bi bi-speedometer2 me-2"></i>Dashboard
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white active" href="{{ route('dashboard') }}">
                            <i class="bi bi-house-door me-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="#">
                            <i class="bi bi-bar-chart me-2"></i>
                            Statistik
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sarana Section -->
            <div class="sidebar-section">
                <h6 class="sidebar-heading px-3 mb-2 text-uppercase text-muted">
                    <i class="bi bi-building me-2"></i>Sarana
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="{{ route('bangunan.index') }}">
                            <i class="bi bi-house me-2"></i>
                            Bangunan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="{{ route('kendaraan.index') }}">
                            <i class="bi bi-car-front me-2"></i>
                            Kendaraan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="{{ route('peralatan.index') }}">
                            <i class="bi bi-tools me-2"></i>
                            Peralatan
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Prasarana Section -->
            <div class="sidebar-section">
                <h6 class="sidebar-heading px-3 mb-2 text-uppercase text-muted">
                    <i class="bi bi-geo-alt me-2"></i>Prasarana
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="{{ route('lahan.index') }}">
                            <i class="bi bi-tree me-2"></i>
                            Lahan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="{{ route('lapangan.index') }}">
                            <i class="bi bi-circle me-2"></i>
                            Lapangan
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Transaksi Section -->
            <div class="sidebar-section">
                <h6 class="sidebar-heading px-3 mb-2 text-uppercase text-muted">
                    <i class="bi bi-arrow-left-right me-2"></i>Transaksi
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="{{ route('penyewaan.index') }}">
                            <i class="bi bi-handshake me-2"></i>
                            Penyewaan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="{{ route('riwayat.index') }}">
                            <i class="bi bi-clock-history me-2"></i>
                            Riwayat
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Pengaturan Section -->
            <div class="sidebar-section">
                <h6 class="sidebar-heading px-3 mb-2 text-uppercase text-muted">
                    <i class="bi bi-gear me-2"></i>Pengaturan
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="{{ route('users.index') }}">
                            <i class="bi bi-people me-2"></i>
                            Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="{{ route('roles.index') }}">
                            <i class="bi bi-shield-check me-2"></i>
                            Roles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="{{ route('settings.index') }}">
                            <i class="bi bi-sliders me-2"></i>
                            Settings
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Offcanvas Sidebar -->
<div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="sidebarOffcanvas" aria-labelledby="sidebarOffcanvasLabel">
    <div class="offcanvas-header border-bottom border-secondary">
        <h5 class="offcanvas-title" id="sidebarOffcanvasLabel">
            <i class="bi bi-building me-2"></i>
            Sistem Sarpras
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
        <!-- Mobile Search -->
        <div class="p-3 border-bottom border-secondary">
            <div class="input-group input-group-sm">
                <span class="input-group-text bg-secondary border-secondary">
                    <i class="bi bi-search text-white"></i>
                </span>
                <input type="text" class="form-control bg-secondary border-secondary text-white" placeholder="Cari...">
            </div>
        </div>

        <!-- Same menu structure as desktop -->
        <div class="sidebar-content">
            <div class="sidebar-section">
                <h6 class="sidebar-heading px-3 mt-3 mb-2 text-uppercase text-muted">
                    <i class="bi bi-speedometer2 me-2"></i>Dashboard
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('dashboard') }}">
                            <i class="bi bi-house-door me-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="#">
                            <i class="bi bi-bar-chart me-2"></i>
                            Statistik
                        </a>
                    </li>
                </ul>
            </div>

            <hr class="sidebar-divider">

            <div class="sidebar-section">
                <h6 class="sidebar-heading px-3 mb-2 text-uppercase text-muted">
                    <i class="bi bi-building me-2"></i>Sarana
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="{{ route('bangunan.index') }}">
                            <i class="bi bi-house me-2"></i>
                            Bangunan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="{{ route('kendaraan.index') }}">
                            <i class="bi bi-car-front me-2"></i>
                            Kendaraan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="{{ route('peralatan.index') }}">
                            <i class="bi bi-tools me-2"></i>
                            Peralatan
                        </a>
                    </li>
                </ul>
            </div>

            <hr class="sidebar-divider">

            <div class="sidebar-section">
                <h6 class="sidebar-heading px-3 mb-2 text-uppercase text-muted">
                    <i class="bi bi-geo-alt me-2"></i>Prasarana
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="{{ route('lahan.index') }}">
                            <i class="bi bi-tree me-2"></i>
                            Lahan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="{{ route('lapangan.index') }}">
                            <i class="bi bi-circle me-2"></i>
                            Lapangan
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>