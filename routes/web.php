<?php

use Illuminate\Support\Facades\Route;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/kontak', function () {
    return view('layouts.kontak');
});
Route::get('/', function () {
    return view('beranda');
});
Route::get('/reguser', function () {
    return view('reguser');
})->name('user.reguser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('user/logout', 'Auth\LoginController@userlogout')->name('user.logout');


//admin auth cariPdk/* 
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    Route::post('/kategori', 'AdminController@indexkategori')->name('admin.kategori');
    Route::post('/kategori/submit', 'AdminController@submitkategori')->name('admin.submitkategori');
});

//pengajar auth /* 
Route::prefix('pengajar')->group(function() {
    Route::get('/login', 'Auth\PengajarLoginController@showLoginForm')->name('pengajar.login');
    Route::post('/login', 'Auth\PengajarLoginController@login')->name('pengajar.login.submit');
    Route::get('/', 'PengajarController@index')->name('pengajar.dashboard');
    Route::get('/logout', 'Auth\PengajarLoginController@logout')->name('pengajar.logout');
});


Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle'); 
Route::get('auth/{provider}/redirect', 'Auth\AuthController@redirectToProvider');

Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleFacebookCallback');


Route::get('pengajar/auth/google', 'PengajarController@redirectToGoogle');
Route::get('pengajar/auth/google/callback', 'PengajarController@handleGoogleCallback');

Route::post('/kontak/kirim_pesan', 'PublicController@kirim_pesan')->name('public.kirim_pesan');

Route::get('/send-mail', function () {
    $detail = [
        'title' => 'From mubaligh.id',
        'body' => 'Yth. Pengunjung'
    ];
    \Mail::to('oman.buluatie@gmail.com')->send(new App\Mail\Publicmail($detail));
    echo "email terkirim";
//    mail($to_email, $subject, $body, $headers);
});



//Route::get('verifikasi/user/{id}', 'PengajarController@redirectToGoogle');
Auth::routes(['verify' => true]);
