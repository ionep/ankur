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

/*
Route::get('/hello', function () {
    //return view('welcome');
    return '<h1>Hello World</h1>';
});

Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user '.$name.' with an id of '.$id;
});
*/

Route::get('/', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/boardmembers','PagesController@boardmembers');
Route::get('/accountmembers','PagesController@accountmembers');
Route::get('/loancommittee','PagesController@loancommittee');
Route::get('/advisors','PagesController@advisors');
Route::get('/staffs','PagesController@staff');
Route::get('/introduction','PagesController@introduction');
Route::get('/plans','PagesController@plans');
Route::get('/loans','PagesController@loans');
Route::get('/hours','PagesController@hours');
Route::get('/internalservice','PagesController@internalservice');
Route::get('/contact','PagesController@contact');
Route::get('/openaccount','PagesController@openaccount');
Route::get('/buyvehicle','PagesController@buyvehicle');
Route::get('/getloan','PagesController@getloan');
Route::get('/gallery','PagesController@gallery');
Route::get('/remit','PagesController@remit');
Route::get('/online','PagesController@online');
Route::get('/easy','PagesController@easy');
Route::get('/chairmessage','PagesController@chairmessage');


Route::get('/update/plan','UpdateController@plan');
Route::get('/update/loan','UpdateController@loan');
Route::post('/update/plan','UpdateController@updateplan');
Route::post('/update/loan','UpdateController@updateloan');

Route::get('/view/plan','UpdateController@viewplan');
Route::get('/view/plan/{id}','UpdateController@deleteplan')->name('plan.destroy');

Route::get('/view/loan','UpdateController@viewloan');
Route::get('/view/loan/{id}','UpdateController@deleteloan')->name('loan.destroy');

Route::get('/file/{date}/loan','FileController@loan');
Route::get('/file/{date}/plan','FileController@plan');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('extras/news','NewsController');

//weird shows error on /news only
// Route::get('news/get','NewsController@index');