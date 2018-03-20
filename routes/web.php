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
Route::get('home', 'IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
  // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('tag', 'TagCrudController');
    CRUD::resource('product', 'ProductCrudController');
    CRUD::resource('purchase', 'PurchaseCrudController');
    CRUD::resource('sale', 'SaleCrudController');

});

