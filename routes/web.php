<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ListUserController;
use App\Http\Controllers\JadwalController;



Route::get('/', function () {
    return view('landingpage');
})->name('Landing Page');

// playground
Route::get('/pl', function () {
    return view('user/playground');
})->name('Uji Coba');

Route::middleware('auth')->group(function () {

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::controller(RuanganController::class)->group(function () {
        Route::get('/ruangan', 'index')->name('List Ruangan');
        Route::get('/detail/{id}/', 'detail')->name('Detail Ruangan');
        Route::get('/carosel', 'carosel');
    });


    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/list-ruangan', 'index')->name('List Ruangan');
        Route::get('/admin/create', 'create')->name('Add Ruangan');
        Route::post('/admin/create/store', 'store');
        Route::get('/admin/edit/{id}', 'edit')->name('Edit Ruangan');
        Route::put('/admin/{id}/', 'update');
        Route::delete('/admin/{id}/', 'destroy');
        Route::get('/admin/gambar/{id}/', 'gambar');
        Route::post('/admin/gambar/gambar_add', 'gambar_add')->name('gambar_add');
        Route::delete('/admin/gambar/{id}/', 'hapusGambar');
        
    });

    // Route::controller(UserController::class)->group(function () {
    //     Route::get('/user/form-user/{id}/', 'index')->name('Profil');
    //     // Route::post('/user/form-user', 'store');
    //     Route::put('/user/form-user/{id}/', 'update');
    // });

    Route::controller(ListUserController::class)->group(function () {
        Route::get('/admin/list-user', 'index')->name('List User');
        Route::get('/admin/{id}/edit-user', 'edit')->name('Edit User');
        Route::put('/admin/{id}/edit-user', 'update');
        Route::delete('/admin/{id}/delete-user', 'delete');
        Route::get('/profile/{id}/edit', 'view');
        Route::get('/profile/{id}/', 'profile');
        Route::get('/profile/{id}/edit-profile', 'update_profile');
    });
    
    // Route::controller(MataKuliahController::class)->group(function () {
    //     Route::get('/mataKuliah', 'read');
    //     Route::get('/mataKuliah/create', 'showCreate');
    //     Route::post('/mataKuliah/create', 'saveCreate');
    //     Route::get('/mataKuliah/update/{id}', 'showUpdate');
    //     Route::post('/mataKuliah/update', 'saveUpdate');
    //     Route::get('/mataKuliah/delete/{id}', 'delete');
    // });

    Route::controller(JadwalController::class)->group(function () {
        Route::get('/jadwal', 'read')->name('Jadwal');
        Route::get('/jadwal/{id}/edit-jadwal', 'edit')->name('Edit Jadwal');
        Route::put('/jadwal/{id}/', 'update');   
        Route::delete('/jadwal/{id}/delete-jadwal', 'delete');
        Route::post('/jadwal/create/store', 'store');
        Route::get('/jadwal/create/', 'create');
        Route::get('/ruangan/jadwal', 'editJadwal');
    });

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'read')->name('dashboard');
    });

});

require __DIR__.'/auth.php';
