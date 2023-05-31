<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurnalController;
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

Route::get('/jurnal',[JurnalController::class,'index'])->name('jurnal');

Route::get('/tambahdata',[JurnalController::class,'tambahdata'])->name('tambahdata');
Route::post('/insertdata',[JurnalController::class,'insertdata'])->name('insertdata');

<<<<<<< HEAD
Route::get('/tampilkandata',[JurnalController::class,'tampilkandata'])->name('tampilkandata');

// Route::get('/tampilkandata/{{id}}',[JurnalController::class,'tampilkandata'])->name('tampilkandata');
=======
Route::get('/tampilkandata/{id}',[JurnalController::class,'tampilkandata'])->name('tampilkandata');
>>>>>>> 36a2dd794edd058df5d54a9e01479d6bdcb158c9
