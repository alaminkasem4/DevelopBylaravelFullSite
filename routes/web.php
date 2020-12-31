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

// Route::get('/', function () {
//     return view('frontend.layouts.index');
// });

Auth::routes();
//deshboard
Route::get('/home', 'HomeController@index')->name('home');

// Frontend Route
Route::get('/','Frontend\FrontendController@index');
Route::get('about-us','Frontend\FrontendController@AboutUs')->name('about.us');
Route::get('contact-us','Frontend\FrontendController@ContactUs')->name('contact.us');
Route::get('newsEvent-details{id}','Frontend\FrontendController@NewsDetails')->name('news.Event.details');

Route::get('our-mission','Frontend\FrontendController@mission')->name('our.mission');
Route::get('our-vision','Frontend\FrontendController@vision')->name('our.vision');
Route::get('our-newsEvent','Frontend\FrontendController@newsEvent')->name('our.newsEvent');
Route::post('contact/store','Frontend\FrontendController@contactSotre')->name('contact.store');


//Backend
Route::group(['middleware'=>'auth'],function(){

	Route::prefix('users')->group(function(){
		Route::get('/view','Backend\UsersController@view')->name('users.view');
		Route::get('/add','Backend\UsersController@add')->name('users.add');
		Route::post('/store','Backend\UsersController@store')->name('users.store');
		Route::get('/edit/{id}','Backend\UsersController@edit')->name('users.edit');
		Route::post('/update/{id}','Backend\UsersController@update')->name('users.update');
		Route::post('/delete','Backend\UsersController@delete')->name('users.delete');
	});

	Route::prefix('profile')->group(function(){
		Route::get('/view','Backend\ProfileController@view')->name('profile.view');
		Route::get('/edit','Backend\ProfileController@edit')->name('profile.edit');
		Route::post('/update','Backend\ProfileController@update')->name('profile.update');
		Route::get('/password/view','Backend\ProfileController@password_view')->name('profile.password_view');
		Route::post('/password/update','Backend\ProfileController@password_update')->name('profile.password_update');
	});

	Route::prefix('logos')->group(function(){
		Route::get('/view','Backend\LogoController@view')->name('logos.view');
		Route::get('/add','Backend\LogoController@add')->name('logos.add');
		Route::post('/store','Backend\LogoController@store')->name('logos.store');
		Route::get('/edit/{id}','Backend\LogoController@edit')->name('logos.edit');
		Route::post('/update/{id}','Backend\LogoController@update')->name('logo.update');
		Route::post('/delete','Backend\LogoController@delete')->name('logos.delete');
	});

	Route::prefix('sliders')->group(function(){
		Route::get('/view','Backend\SlidersController@view')->name('sliders.view');
		Route::get('/add','Backend\SlidersController@add')->name('sliders.add');
		Route::post('/store','Backend\SlidersController@store')->name('sliders.store');
		Route::get('/edit/{id}','Backend\SlidersController@edit')->name('sliders.edit');
		Route::post('/update/{id}','Backend\SlidersController@update')->name('sliders.update');
		Route::post('/delete','Backend\SlidersController@delete')->name('sliders.delete');
	});

	Route::prefix('misstions')->group(function(){
		Route::get('/view','Backend\MisstionController@view')->name('misstions.view');
		Route::get('/add','Backend\MisstionController@add')->name('misstions.add');
		Route::post('/store','Backend\MisstionController@store')->name('misstions.store');
		Route::get('/edit/{id}','Backend\MisstionController@edit')->name('misstions.edit');
		Route::post('/update/{id}','Backend\MisstionController@update')->name('misstions.update');
		Route::post('/delete','Backend\MisstionController@delete')->name('misstions.delete');
	});

	Route::prefix('visions')->group(function(){
		Route::get('/view','Backend\VisionController@view')->name('visions.view');
		Route::get('/add','Backend\VisionController@add')->name('visions.add');
		Route::post('/store','Backend\VisionController@store')->name('visions.store');
		Route::get('/edit/{id}','Backend\VisionController@edit')->name('visions.edit');
		Route::post('/update/{id}','Backend\VisionController@update')->name('visions.update');
		Route::post('/delete','Backend\VisionController@delete')->name('visions.delete');
	});

	Route::prefix('news_events')->group(function(){
		Route::get('/view','Backend\NewsEventController@view')->name('news_events.view');
		Route::get('/add','Backend\NewsEventController@add')->name('news_events.add');
		Route::post('/store','Backend\NewsEventController@store')->name('news_events.store');
		Route::get('/edit/{id}','Backend\NewsEventController@edit')->name('news_events.edit');
		Route::post('/update/{id}','Backend\NewsEventController@update')->name('news_events.update');
		Route::post('/delete','Backend\NewsEventController@delete')->name('news_events.delete');
	});

	Route::prefix('servics')->group(function(){
		Route::get('/view','Backend\ServiceController@view')->name('servics.view');
		Route::get('/add','Backend\ServiceController@add')->name('servics.add');
		Route::post('/store','Backend\ServiceController@store')->name('servics.store');
		Route::get('/edit/{id}','Backend\ServiceController@edit')->name('servics.edit');
		Route::post('/update/{id}','Backend\ServiceController@update')->name('servics.update');
		Route::post('/delete','Backend\ServiceController@delete')->name('servics.delete');
	});

	Route::prefix('contacts')->group(function(){
		Route::get('/view','Backend\ContactController@view')->name('contacts.view');
		Route::get('/add','Backend\ContactController@add')->name('contacts.add');
		Route::post('/store','Backend\ContactController@store')->name('contacts.store');
		Route::get('/edit/{id}','Backend\ContactController@edit')->name('contacts.edit');
		Route::post('/update/{id}','Backend\ContactController@update')->name('contacts.update');
		Route::post('/delete','Backend\ContactController@delete')->name('contacts.delete');
		//communication contacts
		Route::get('communication/view','Backend\ContactController@communication')->name('contacts.communication.view');
		Route::post('communication/delete','Backend\ContactController@communicationDelete')->name('communication.contacts.delete');


	});

	Route::prefix('aboutus')->group(function(){
		Route::get('/view','Backend\AboutusController@view')->name('aboutus.view');
		Route::get('/add','Backend\AboutusController@add')->name('aboutus.add');
		Route::post('/store','Backend\AboutusController@store')->name('aboutus.store');
		Route::get('/edit/{id}','Backend\AboutusController@edit')->name('aboutus.edit');
		Route::post('/update/{id}','Backend\AboutusController@update')->name('aboutus.update');
		Route::post('/delete','Backend\AboutusController@delete')->name('aboutus.delete');
	});

});
