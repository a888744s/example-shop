<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CheckoutController;

// แก้ไข Route สำหรับ Checkout ให้ใช้แค่ฟังก์ชันเดียว
Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('checkout');  // หรือใช้ 'index' หากต้องการ

// Route สำหรับหน้า Welcome
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route สำหรับ Dashboard (ถ้ามีการตรวจสอบการเข้าสู่ระบบ)
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// กลุ่ม Route สำหรับผู้ใช้ที่เข้าสู่ระบบแล้ว
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
