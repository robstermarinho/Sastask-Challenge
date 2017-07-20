<?php


use App\User;
use MongoDB\Client as Mongo;
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

Route::get('/home', function () {
    return redirect('home');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// It return the current user information
Route::get('/current_user', 'UserController@show_current_user');