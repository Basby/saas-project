<?php

//use App\Http\Controllers\Production;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlantsController;
use App\Http\Controllers\DiseasesController;
use App\Http\Controllers\PestsController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\PropController;
use App\Http\Controllers\TubeController;
use App\Http\Controllers\PotController;
use App\Http\Controllers\OrderController;
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
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function (){
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('plants', PlantsController::class);
    Route::resource('diseases', DiseasesController::class);
    Route::resource('pests', PestsController::class);
    Route::resource('media', MediaController::class);
    Route::resource('locations', LocationsController::class);
    Route::resource('propagation', PropController::class);
    Route::resource('tubing', TubeController::class);
    Route::resource('potting', PotController::class);
    Route::resource('order', OrderController::class);
});

//Route::get('/production', [Production::Class, 'index']);

Route::resource('batch',BatchController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
