<?php

use App\Http\Controllers\Postcontroller;
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
    return redirect('/home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('/ali', [PostController::class,'ali']);
Route::get('/home', [PostController::class,'index'])->middleware(['auth']);
Route::get('/s/{id}', [PostController::class,'create']);
Route::post('/home', [PostController::class,'store']);
Route::post('/del_msg/{id}', [PostController::class,'destroy']);
Route::get('/setting', [PostController::class,'edit'])->middleware(['auth']);
Route::post('/setting/s/{id}', [PostController::class,'update']);

