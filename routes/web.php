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

Route::group(['middleware' => 'usersession'], function () {
Route::get('index',[AdminController::class, 'index']);
Route::get('users', [AdminController::class, 'getUsers']);
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
Route::get('/edit_user/{id}', [AdminController::class, 'ShowData']);
Route::get('/get_address/{id?}', [AdminController::class, 'get_address']);
Route::get('/get_sub_address/{id}', [AdminController::class, 'get_sub_address']);
Route::post('deny_access',[AdminController::class, 'deny_access']);
Route::post('location_insert',[AdminController::class, 'locations_insert'])->name('location.insert');
Route::get('admin_reports',[AdminController::class, 'admin_reports']);
Route::post('edit_reports',[AdminController::class, 'edit_report']);
Route::get('manage_access',[AdminController::class, 'manage_access']);
Route::get('locations',[AdminController::class, 'locations']);
Route::get('sub_locations',[AdminController::class, 'sub_locations']);
Route::post('edit_sublocation',[AdminController::class, 'edit_sublocation']);
Route::get('edit_location/{id}',[AdminController::class, 'edit_location']);
Route::post('/update_locations', [AdminController::class, 'update_locations']);
Route::post('update_profile', [AdminController::class, 'update_profile']);
Route::get('report_title',[AdminController::class, 'report_title']);
Route::post('insert_title', [AdminController::class, 'insert_title']);
Route::post('edit_title/', [AdminController::class, 'edit_title']);
Route::get('/delete_title/{id}', [AdminController::class, 'delete_title']);
Route::get('/delete_data/{id}/{table}', [AdminController::class, 'delete_data']);       
Route::post('insert_activity', [AdminController::class, 'insert_activity']);
Route::get('report_view/{id}',[AdminController::class, 'report_view']);
Route::get('report_date',[AdminController::class, 'report_date']);
Route::post('filter_data',[AdminController::class, 'filter_data']);
});
Route::get('login', [AdminController::class, 'admin_login']);
Route::post('login', [AdminController::class, 'login']);
Route::get('logout',[AdminController::class, 'logout']);
Route::post('company_post_details', [AdminController::class, 'company_details'])->name('company.details');
Route::get('company_details',[AdminController::class, 'get_company']);
Route::post('edit_company',[AdminController::class, 'update_company']);
Route::get('show_info/{id}',[AdminController::class, 'show_access']);
Route::get('get_location/{text}',[AdminController::class, 'get_location']);
Route::post('assign-client', [AdminController::class,'AssignValueToClient']);
Route::post('sub_location', [AdminController::class,'sub_location']);
Route::get('get_report_images', [AdminController::class,'get_report_images']);
// Route::post('list',[AdminController::class, 'get_data']);
Route::post('email',[AdminController::class, 'send_mail']);  
Route::post('update_report_images', [AdminController::class,'update_report_images']);
Route::get('report_delete', [AdminController::class,'delete_report']);
Route::get('company_delete', [AdminController::class,'delete_company']);




