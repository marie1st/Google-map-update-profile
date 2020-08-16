<?php

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
Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('{page}', function($slug){
    $page = \App\Page::fundBySlug($slug);

    return view()->first(
        ["pages/{page=>slug}", 'panel'], compact('page')
    );
        
});

Route::get('/', 'HomeController@index');
Route::get('home', function () {
})->middleware('verified');

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/dashboard', 'HomeController@index')->name('home');
require __DIR__ . '/profile/profile.php';

Route::get('profile/{id}', 'HomeController@user');

//Routhing to update and insert company table
Route::prefix('profile')->group(function() {
    Route::get('profile/{id}', 'CompanyController@show');
    Route::post('profile', 'CompanyController@store');
    Route::put('profile/{id}', 'CompanyController@update');
    Route::delete('profile/{id}','CompanyController@destroy');
});
