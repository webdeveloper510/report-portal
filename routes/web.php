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


Route::view('index','admin.index');

Route::get('profile_page', [AdminController::class, 'profile_page']);
Route::get('users', [AdminController::class, 'basic_table']);
Route::get('profile_page', [AdminController::class, 'profile_page']);
Route::get('icon_materiale', [AdminController::class, 'icon_materiale']);
Route::get('google_map', [AdminController::class, 'google_map']);
Route::get('blank', [AdminController::class, 'blank']);
Route::get('error', [AdminController::class, 'error']);
Route::get('user_list', [AdminController::class, 'user_list']);
Route::post('add_user', [AdminController::class, 'add_user'])->name('add.user');
Route::get('users', [AdminController::class, 'get_user']);
Route::post('/update', [AdminController::class, 'update']);
Route::get('/delete_supervisor/{id}', [AdminController::class, 'delete_supervisor']);
Route::get('/delete_location/{id}', [AdminController::class, 'delete_location']);
Route::get('/edit_supervisor/{id}', [AdminController::class, 'ShowData']);
Route::get('admin_login', [AdminController::class, 'admin_login']);
Route::post('login', [AdminController::class, 'login']);
Route::post('deny_access',[AdminController::class, 'deny_access']);
Route::post('location_insert',[AdminController::class, 'locations_insert']);
Route::get('admin_reports',[AdminController::class, 'admin_reports']);
Route::get('manage_access',[AdminController::class, 'manage_access']);
Route::get('locations',[AdminController::class, 'locations']);
Route::get('edit_location/{id}',[AdminController::class, 'edit_location']);
Route::post('/update_locations', [AdminController::class, 'update_locations']);
Route::post('update_profile', [AdminController::class, 'update_profile']);
Route::get('report_title',[AdminController::class, 'report_title']);
// Route::view('report_title',[AdminController::class, 'report_title']);
Route::post('insert_title', [AdminController::class, 'insert_title']);
Route::post('edit_title/', [AdminController::class, 'edit_title']);
Route::get('/delete_title/{id}', [AdminController::class, 'delete_title']);
Route::post('insert_activity', [AdminController::class, 'insert_activity']);

