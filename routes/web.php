<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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


Route::view('index','index');

Route::get('profile_page', [AdminController::class, 'profile_page']);
Route::get('table', [AdminController::class, 'basic_table']);
Route::get('profile_page', [AdminController::class, 'profile_page']);
Route::get('icon_materiale', [AdminController::class, 'icon_materiale']);
Route::get('google_map', [AdminController::class, 'google_map']);
Route::get('blank', [AdminController::class, 'blank']);
Route::get('error', [AdminController::class, 'error']);
Route::get('user_list', [AdminController::class, 'user_list']);

