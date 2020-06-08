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
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::view('/', 'welcome');


// Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('admin_login');
// Route::get('/login/client', 'Auth\LoginController@showClientLoginForm')->name('client_login');
 
// //RegisterController
// Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('admin_register');
// Route::get('/register/client', 'Auth\RegisterController@showClientRegisterForm')->name('client_register');
 
// //ClientController
// Route::get('/client', 'Login_Controller@clientDashboard')->name('client_dashboard');
 
// //AdminController
// Route::get('/admin', 'Admin_Controller@adminDashboard')->name('admin_dashboard');
 

 
// //********************************POST********************************
// //LoginController
// Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('admin_login');
// Route::post('/login/client', 'Auth\LoginController@clientLogin')->name('client_login');
 
// //RegisterController
// Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('admin_register');
// Route::post('/register/client', 'Auth\RegisterController@createClient')->name('client_register');





Route::get('/', function () {
    return view('master_page');
});

Route::get('/','Welcome_Controller@index')->name('/Welcome.index');
Route::get('/pages','Welcome_Controller@pages')->name('/Welcome.pages');
Route::get('/contract','Welcome_Controller@contract')->name('/Welcome.contract');
Route::get('/login','Login_Controller@index')->name('/Login.index');


Route::get('/admin','Admin_Controller@index')->name('admin');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

