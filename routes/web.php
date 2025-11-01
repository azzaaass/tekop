<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// auth
Route::get('/', \App\Livewire\Auth\Logo::class)->name('logo');
Route::get('/onBoard', \App\Livewire\Auth\OnBoard::class)->name('onBoard');
Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
Route::get('/signInNumber', \App\Livewire\Auth\SignInNumber::class)->name('signInNumber');
Route::get('/otp', \App\Livewire\Auth\Otp::class)->name('otp');
Route::get('/register', \App\Livewire\Auth\Register::class)->name('register');


Route::prefix('/admin')->group(function(){
    Route::get('/login', \App\Livewire\Pages\Admin\LoginLw::class)->name('admin.login');
    Route::get('/dashboard', \App\Livewire\Pages\Admin\DashboardLw::class)->name('admin.dashboard');
    Route::get('/pesanan', \App\Livewire\Pages\Admin\PesananLw::class)->name('admin.pesanan');
    Route::get('/produk', \App\Livewire\Pages\Admin\ProdukLw::class)->name('admin.produk');
    Route::get('/transaksi', \App\Livewire\Pages\Admin\TransaksiLw::class)->name('admin.transaksi');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', \App\Livewire\Pages\HomeLw::class)->name('home');
    Route::get('/menu', \App\Livewire\Pages\MenuLw::class)->name('menu');
    Route::get('/product/{id}', \App\Livewire\Pages\ProductDetailLw::class)->name('product.detail');
    Route::get('/favorite', \App\Livewire\Pages\FavoriteLw::class)->name('favorite');
    Route::get('/pesanan', \App\Livewire\Pages\PesananLw::class)->name('pesanan');
    Route::get('/profile', \App\Livewire\Pages\ProfileLw::class)->name('profile');
    Route::get('/editProfile', \App\Livewire\Pages\EditProfileLw::class)->name('editProfile');

    Route::get('/paymentMethod', \App\Livewire\Pages\PaymentMethodLw::class)->name('paymentMethod');
    Route::get('/confirmPayment', \App\Livewire\Pages\ConfirmPaymentLw::class)->name('confirmPayment');
    Route::get('/pinPayment', \App\Livewire\Pages\PinPaymentLw::class)->name('pinPayment');
    Route::get('/paymentSuccess', \App\Livewire\Pages\PaymentSuccessLw::class)->name('paymentSuccess');

    Route::get('/history', \App\Livewire\Pages\HistoryLw::class)->name('history');
});