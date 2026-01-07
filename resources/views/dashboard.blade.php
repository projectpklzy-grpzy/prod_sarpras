@extends('layouts.app')

@section('title', 'Dashboard - Sistem Sarpras')

@section('content')
<div class="fade-in">
    <!-- Page Header -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 fw-bold">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-calendar3 me-1"></i>
                    This week
                </button>
            </div>
            <button type="button" class="btn btn-sm btn-primary">
                <i class="bi bi-download me-1"></i>
                Export
            </button>
        </div>
    </div>

    <!-- Welcome Alert -->
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <i class="bi bi-info-circle me-2"></i>
        <strong>Selamat datang!</strong> di Sistem Manajemen Sarana dan Prasarana Universitas.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <!-- Stats Cards -->
    <div class="row g-4 mb-4">
        <!-- Total Lahan -->
        <div class="col-xl-3 col-md-6">
            <div class="card border-start-primary">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <div class="small fw-bold text-primary text-uppercase mb-1">Total Lahan</div>
                            <div class="h5 mb-0">24</div>
                        </div>
                        <div class="flex-shrink-0">
                            <i class="bi bi-tree text-primary" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                    <div class="mt-2">
                        <small class="text-success">
                            <i class="bi bi-arrow-up"></i>
                            12% dari bulan lalu
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Bangunan -->
        <div class="col-xl-3 col-md-6">
            <div class="card border-start-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <div class="small fw-bold text-success text-uppercase mb-1">Total Bangunan</div>
                            <div class="h5 mb-0">156</div>
                        </div>
                        <div class="flex-shrink-0">
                            <i class="bi bi-building text-success" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                    <div class="mt-2">
                        <small class="text-success">
                            <i class="bi bi-arrow-up"></i>
                            8% dari bulan lalu
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kendaraan Aktif -->
        <div class="col-xl-3 col-md-6">
            <div class="card border-start-warning">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <div class="small fw-bold text-warning text-uppercase mb-1">Kendaraan Aktif</div>
                            <div class="h5 mb-0">42</div>
                        </div>
                        <div class="flex-shrink-0">
                            <i class="bi bi-car-front text-warning" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                    <div class="mt-2">
                        <small class="text-danger">
                            <i class="bi bi-arrow-down"></i>
                            3% dari bulan lalu
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Penyewaan Bulan Ini -->
        <div class="col-xl-3 col-md-6">
            <div class="card border-start-danger">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <div class="small fw-bold text-danger text-uppercase mb-1">Penyewaan</div>
                            <div class="h5 mb-0">18</div>
                        </div>
                        <div class="flex-shrink-0">
                            <i class="bi bi-handshake text-danger" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                    <div class="mt-2">
                        <small class="text-success">
                            <i class="bi bi-arrow-up"></i>
                            25% dari bulan lalu
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row g-4">
        <!-- Recent Activity -->
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-clock-history me-2"></i>
                        Aktivitas Terbaru
                    </h5>
                    <a href="#" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="bi bi-plus text-white"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Lahan baru ditambahkan</h6>
                                <p class="text-muted mb-1">Area Kampus Utara telah berhasil didaftarkan ke sistem</p>
                                <small class="text-muted">2 jam yang lalu</small>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <div class="bg-success rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="bi bi-pencil text-white"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Bangunan diperbarui</h6>
                                <p class="text-muted mb-1">Data Gedung Rektorat telah diperbarui</p>
                                <small class="text-muted">4 jam yang lalu</small>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="bi bi-handshake text-white"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Penyewaan baru</h6>
                                <p class="text-muted mb-1">Lapangan Basket disewa untuk acara mahasiswa</p>
                                <small class="text-muted">6 jam yang lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions & System Info -->
        <div class="col-lg-4">
            <!-- Quick Actions -->
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-lightning me-2"></i>
                        Aksi Cepat
                    </h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('lahan.create') }}" class="btn btn-primary">
                            <i class="bi bi-plus-circle me-2"></i>
                            Tambah Lahan
                        </a>
                        
                        <a href="{{ route('bangunan.create') }}" class="btn btn-success">
                            <i class="bi bi-building me-2"></i>
                            Tambah Bangunan
                        </a>
                        
                        <a href="{{ route('penyewaan.create') }}" class="btn btn-warning">
                            <i class="bi bi-handshake me-2"></i>
                            Buat Penyewaan
                        </a>
                        
                        <a href="#" class="btn btn-outline-secondary">
                            <i class="bi bi-download me-2"></i>
                            Export Data
                        </a>
                    </div>
                </div>
            </div>

            <!-- System Info -->
            <div class="card shadow">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-info-circle me-2"></i>
                        Info Sistem
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="text-center">
                                <div class="h4 mb-0 text-primary">v1.0.0</div>
                                <small class="text-muted">Versi</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <div class="h4 mb-0 text-success">
                                    <i class="bi bi-check-circle"></i>
                                </div>
                                <small class="text-muted">Database</small>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="text-center">
                                <small class="text-muted">Last Backup: 2 hari lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection