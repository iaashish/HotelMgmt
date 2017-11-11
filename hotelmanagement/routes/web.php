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

Route::get('about', function () {
    return view('about');
});


Auth::routes();
// Route::get('/stafflogin', function(){
// 	return view('stafflogin');
// });

Route::get('/home', 'manager\managerController@index')->name('managerhome');
Route::get('/admin', 'AdminController@index');
Route::get('/stafflogin', 'StaffLoginController@showLoginForm');

Route::post('stafflogin', 'StaffLoginController@login');
Route::post('stafflogout', 'StaffLoginController@logout');
Route::get('staffhome',  'staff\staffcontroller@showhomepage');


Route::resource('managers', 'ManagersController');
Route::get('/managerhome', 'manager\managerController@index');
Route::post('/registerstaff','manager\managerController@registerStaff');

Route::get('/booking' , 'BookingController@index');
Route::post('/registerbooking' , 'BookingController@registerbooking');
