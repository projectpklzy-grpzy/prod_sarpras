<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Placeholder routes for menu links
Route::get('/lahan', function () {
    return view('dashboard'); // Temporary
})->name('lahan.index');

Route::get('/lahan/create', function () {
    return view('dashboard'); // Temporary
})->name('lahan.create');

Route::get('/bangunan', function () {
    return view('dashboard'); // Temporary
})->name('bangunan.index');

Route::get('/bangunan/create', function () {
    return view('dashboard'); // Temporary
})->name('bangunan.create');

Route::get('/kendaraan', function () {
    return view('dashboard'); // Temporary
})->name('kendaraan.index');

Route::get('/peralatan', function () {
    return view('dashboard'); // Temporary
})->name('peralatan.index');

Route::get('/lapangan', function () {
    return view('dashboard'); // Temporary
})->name('lapangan.index');

Route::get('/penyewaan', function () {
    return view('dashboard'); // Temporary
})->name('penyewaan.index');

Route::get('/penyewaan/create', function () {
    return view('dashboard'); // Temporary
})->name('penyewaan.create');

Route::get('/riwayat', function () {
    return view('dashboard'); // Temporary
})->name('riwayat.index');

Route::get('/users', function () {
    return view('dashboard'); // Temporary
})->name('users.index');

Route::get('/roles', function () {
    return view('dashboard'); // Temporary
})->name('roles.index');

Route::get('/settings', function () {
    return view('dashboard'); // Temporary
})->name('settings.index');
