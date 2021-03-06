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


// get all the products
Route::get('/products', 'ProductController@getProducts');

// add product form
Route::get('/ProdForm/{id?}', 'ProductController@ProdForm');

// delete a product
Route::get('/deleteProduct/{id}', 'ProductController@destroyProduct');

// add a product
Route::post('/addProduct', 'ProductController@addProduct');

// update a product
Route::put('/editProduct/{id}', 'ProductController@editProduct');


//get all categories
Route::get('/categories', 'CategoryController@getCategories');

// delete a product
Route::get('/deleteCategory/{id}', 'CategoryController@destroyCategory');

// add category form
Route::get('/CatForm/{id?}', 'CategoryController@CatForm');

// add a category
Route::post('/addCategory', 'CategoryController@addCategory');

// update a category
Route::put('/editCategory/{id}', 'CategoryController@editCategory');
