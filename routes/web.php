<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');
Route::get('add', 'manage@AddPost');
Route::post('add', 'manage@AddPost');
Route::get('view', 'manage@view');
Route::get('/read/{id}', 'manage@read');
Route::post('/read/{id}', 'manage@read');

Route::group(['middleware' => ['auth' ,'admin']], function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/role-register', 'App\Http\Controllers\Admin\DashboardController@registerd');
    Route::get('/role-edit/{id}', 'App\Http\Controllers\Admin\DashboardController@registeredit');
    Route::put('/role-register-update/{id}', 'App\Http\Controllers\Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}', 'App\Http\Controllers\Admin\DashboardController@registerdelete');
    Route::get('/posts', 'App\Http\Controllers\Admin\PostsController@index');
    Route::delete('/post-delete/{id}', 'App\Http\Controllers\Admin\PostsController@deletepost');

});

