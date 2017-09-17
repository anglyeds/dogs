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



Route::group(['prefix'=> 'admin'],function(){
	Voyager::routes();
});
// Auth::routes();
Route::post('/submit-contact-us-form', 'HomeController@submitContactForm')->name('contact-us');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dogs', 'HomeController@dogs')->name('dogs');
Route::get('/cats', 'HomeController@cats')->name('cats');
Route::get('/others', 'HomeController@others')->name('others');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/models', 'HomeController@becomeModels')->name('models');

Route::get('/dogs/profile/{id}', 'DogController@index')->name('profile');
Route::get('/cats/profile/{id}', 'CatController@index')->name('profile');
Route::get('/others/profile/{id}', 'OtherController@index')->name('profile');

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');
