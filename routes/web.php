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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/','welcome');

// Route::get('/contact_us', function () {
//     return view('contact_us');
// });

//Route::get('{pages}/{url}','AllPages')->name('pages');
//Route::get('/about_us', 'AboutusController@index')->name('about_us');
Route::get('{pages}','AllPages')->name('pages')->where('pages','about_us|contact_us|codes');
Route::resource('products', 'ProductController');
Route::get('lang/{locale}', 'LocalizationController@index');
Route::post('/submitContact', 'ContactInfoController@submitContact')->name('submit_contact');