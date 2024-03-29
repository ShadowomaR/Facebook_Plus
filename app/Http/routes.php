<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'as'=>'home',
	'uses'=>'PagesControlleur@home'
]);


Route::get('about', [
	'as'=>'about',
	'uses'=>'PagesControlleur@about'
]);

Route::get('Getstart', [
	'as'=>'Getstart',
	'uses'=>'PagesControlleur@Getstart'
]);

Route::post('contact', [
	'as'=>'contact',
	'uses'=>'Contact_controlleur@store'
]);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
