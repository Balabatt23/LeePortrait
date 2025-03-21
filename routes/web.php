<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ListItemController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/welcome', function() {
    return view('welcome');
});
Route::get('/user/{id}', function($id) {
    return 'User dengan ID  '.$id;
});
Route::prefix('admin')->group(function() {
    Route::get('/dashboard',function() {
        return 'Halaman Dashboard Admin';
    });

    Route::get('/users', function() {
        return 'Halaman Users Admin';
    });
});
//Route::get('/listbarang/{id}/{name}', function($id, $name) {
//    return view('list_barang', compact('id', 'name'));
//});
Route::get('/listbarang/{id}/{name}', [ListBarangController::class, 'tampilkan']);
Route::get('/listitem', [ListItemController::class, 'listItem']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::controller(AuthController::class )->group(function(){
    Route::get('/register', 'register')->name('register');
});