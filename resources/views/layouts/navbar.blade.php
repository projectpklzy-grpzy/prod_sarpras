<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow-sm">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">
            <i class="bi bi-building me-2"></i>
            Sistem Sarpras
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Search Bar -->
            <div class="mx-auto d-none d-lg-flex" style="max-width: 400px; width: 100%;">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">
                        <i class="bi bi-search text-muted"></i>
                    </span>
                    <input type="text" class="form-control border-start-0" placeholder="Cari sarana prasarana..." aria-label="Search">
                </div>
            </div>

            <!-- Right Side Items -->
            <ul class="navbar-nav ms-auto">
                <!-- Notifications -->
                <li class="nav-item dropdown">
                    <a class="nav-link position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-bell fs-5"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            3
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow" style="width: 300px;">
                        <li><h6 class="dropdown-header">Notifikasi Terbaru</h6></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-plus-circle text-success"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <div class="fw-semibold">Lahan baru ditambahkan</div>
                                        <small class="text-muted">Area Kampus Utara - 2 jam lalu</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-pencil text-warning"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <div class="fw-semibold">Bangunan diperbarui</div>
                                        <small class="text-muted">Gedung Rektorat - 4 jam lalu</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-center" href="#">Lihat semua notifikasi</a></li>
                    </ul>
                </li>

                <!-- User Profile -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="rounded-circle bg-light text-primary d-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px;">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <span class="d-none d-md-inline">Admin User</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow">
                        <li><h6 class="dropdown-header">Admin User</h6></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-person-circle me-2"></i>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-gear me-2"></i>
                                Settings
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item text-danger" href="#">
                                <i class="bi bi-box-arrow-right me-2"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>