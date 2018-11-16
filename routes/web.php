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

/*router::get('/importar', 'ImportController@import')->name('Importar');*/
/*Route::post('/import-excel', 'ExcelController@importFile')->name('import');*/

Route::get('/productos', 'ProductController@index')->name('products');

Route::get('/productos/{query}', [

	'uses' => 'ProductController@searchProduct',
	'as' => 'searchProducts'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/import-excel', 'ExcelController@index')->name('importar');

Route::get('/mail', 'MailController@index')->name('mail');