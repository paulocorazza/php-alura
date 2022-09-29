<?php

use App\Http\Controllers\SeriesController;
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
    return to_route('/series');
});
 
Route::resource('/series',SeriesController::class)->only(['index','create','store','destroy']);

// Route::get('/series', [SeriesController::class, 'index'])->name('series.index');
// Route::get('/series/create',[SeriesController::class,'create'])->name('series.create');
// Route::post('/series/salvar',[SeriesController::class,'store'])->name('series.store');