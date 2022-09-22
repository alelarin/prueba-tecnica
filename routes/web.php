<?php

use App\Http\Controllers\GeolocalizacionController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/geolocalizacion', [GeolocalizacionController::class, 'index'])->middleware('auth')->name('geolocalizacion');

Route::get('/geolocalizacion-create', [GeolocalizacionController::class, 'create'])->middleware('auth')->name('geolocalizacion.create');
Route::post('/geolocalizacion-store', [GeolocalizacionController::class, 'store'])->middleware('auth')->name('geolocalizacion.store');

require __DIR__.'/auth.php';
