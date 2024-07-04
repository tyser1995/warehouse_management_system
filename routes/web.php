<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\URL;

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
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/register', [App\Http\Controllers\PageController::class, 'register']);
Route::post('/user/register', ['as' => '/user/register', 'uses' => 'App\Http\Controllers\UserController@register']);

//Google
Route::get('/google/redirect', ['as' => 'google.redirect', 'uses' => 'App\Http\Controllers\Auth\LoginController@redirectToGoogle']);
Route::get('/google/callback', ['as' => 'google.callback', 'uses' => 'App\Http\Controllers\Auth\LoginController@handleGoogleCallback']);

Route::get('user/{id}/avatar', function ($id) {
    // Find the user
    $user = App\Models\User::find(1);

    // Return the image in the response with the correct MIME type
    return response()->make($user->profile_photo, 200, array(
        'Content-Type' => (new finfo(FILEINFO_MIME))->buffer($user->profile_photo)
    ));
});

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('users', ['as' => 'users', 'uses' => 'App\Http\Controllers\UserController@index']);
    Route::get('users/delete/{id}', ['as' => 'users/delete/{id}', 'uses' => 'App\Http\Controllers\UserController@delete']);
    Route::get('users/verify/{id}', ['as' => 'users/verify', 'uses' => 'App\Http\Controllers\UserController@verify_user']);
	Route::resource('user', 'App\Http\Controllers\UserController');

  	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
  	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
  	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'App\Http\Controllers\DashboardController@index']);

    //Roles
    Route::get('roles', ['as' => 'roles', 'uses' => 'App\Http\Controllers\RoleController@index']);
    Route::resource('role', 'App\Http\Controllers\RoleController');

    //CUSTOMER MANAGEMENT
    Route::get('customers', ['as' => 'users', 'uses' => 'App\Http\Controllers\CustomerController@index']);
    Route::get('customers/delete/{id}', ['as' => 'users/delete/{id}', 'uses' => 'App\Http\Controllers\CustomerController@delete']);
    Route::get('customers/verify/{id}', ['as' => 'users/verify', 'uses' => 'App\Http\Controllers\CustomerController@verify_user']);
	Route::resource('customer', 'App\Http\Controllers\CustomerController');

});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});