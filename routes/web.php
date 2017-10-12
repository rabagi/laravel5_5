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
use Illuminate\Support\Facades\Mail;

Route::view('/',  'welcome', ['name' => 'RBG']);

Route::redirect('welcome', '/');

Route::get('email', function(){

	Mail::to('giovanny.rabagi@gmail.com')->send(new \App\Mail\welcomeUser());

});


Route::get('mail', function(){
	return new \App\Mail\welcomeUser('GRB');
});