<?php

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

Route::get('login', function() {
  return view('login');
});
Route::post('login', 'loginController@login');

Route::get('register', function() {
  return view('register');
});
Route::post('register', 'registerController@register');

Route::get('logout', 'logoutController@logout');

Route::get('dashboard', 'dashboardController@see');

Route::get('/{user_id}', 'messageController@compose');
Route::post('/{user_id}', 'messageController@send');