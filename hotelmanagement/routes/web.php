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

Route::get('/loginmanger', function () {
    return view('loginmanger');
});


Auth::routes();
// Route::get('/stafflogin', function(){
// 	return view('stafflogin');
// });

Route::get('/home', 'manager\ManagerController@index')->name('managerhome');
Route::get('/admin', 'AdminController@index');
Route::get('/stafflogin', 'StaffLoginController@showLoginForm');
Route::post('stafflogin', 'StaffLoginController@login');
Route::post('stafflogout', 'StaffLoginController@logout');
Route::get('staffhome',  'staff\staffcontroller@showhomepage');
Route::resource('managers', 'ManagersController');
Route::get('/managerhome', 'manager\ManagerController@index');
Route::post('/registerstaff','manager\ManagerController@registerStaff');
Route::get('/booking' , 'BookingController@index');
Route::post('/registerbooking' , 'BookingController@registerbooking');
Route::get('manageraddstaff', 'manager\ManagerController@addstaff');
Route::get('managermange', 'manager\ManagerController@managestaff');
Route::get('managerroles', 'manager\ManagerController@manageroles');
Route::post('/deletestaff', 'staff\StaffEditController@destroy');
Route::resource('tasks','TaskController');
Route::post('/setroles', 'manager\ManagerController@assignRole');
Route::get('getselectvalues/{val}/{vall}', 'manager\ManagerController@changeDropDown');
Route::post('addsalary','AccountantController@addSalary');
Route::get('getstaffnames/{val}', 'staff\staffcontroller@changeDropDown');
Route::post('/deleterole/{val}/{val2}', 'manager\ManagerController@deleterole');

