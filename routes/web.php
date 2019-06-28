<?php

//SetSessionForm
Route::get('/', function () {
    Auth::logout();
    return view('auth.login');
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
Route::post('/',['uses' =>'SessionController@set']);

Route::get('/p' , 'GrievanceController@pwd');
Route::get('/u/change' , 'GrievanceController@changeP');
Route::post('/chang',['uses' =>'GrievanceController@changePassword']);
//User-Routes
Route::get('/u' , 'GrievanceController@form');
Route::get('/u/history' , 'GrievanceController@history');
Route::get('/u/history/{grievance}' , 'GrievanceController@show');
Route::get('/u/showreportfinal/{grvid}' , 'GrievanceController@showreportfinal_u');
Route::post('/visibility','NotificationsController@changeStatus');
Route::get('/u/notifications' , 'NotificationsController@index');

//Admin-Routes
Route::get('/a/new/{grvid}' , 'GrievanceController@new');
Route::get('/a/notifications' , 'NotificationsController@index');
Route::get('/a/change' , 'GrievanceController@changeP');
Route::get('/a/showgrievance/{grvid}' , 'GrievanceController@showgrv');
Route::get('/a' , 'GrievanceController@pendingall');
Route::get('/a/asked/{grvid}' , 'GrievanceController@asked');
Route::get('/a/onapprove/{grvid}' , 'GrievanceController@onapprove');
Route::get('/a/onreject/{grvid}' , 'GrievanceController@onreject');
Route::get('/a/approved/{grvid}' , 'GrievanceController@approved');
Route::get('/a/approved' , 'GrievanceController@approvedall');
Route::get('/a/pending/{grvid}' , 'GrievanceController@pending');
Route::get('/a/pending' , 'GrievanceController@pendingall');
Route::get('/a/showreportfinal/{grvid}' , 'GrievanceController@showreportfinal');
Route::get('/a/showreports/{grvid}' , 'GrievanceController@showreportpending');

//Cellm-Routes
Route::get('/c' , 'GrievanceController@cat');
Route::get('/write/{grievance}','GrievanceController@writereport');
Route::post('/write',['uses' =>'GrievanceController@storerep']);
Route::get('/c/notifications' , 'NotificationsController@index');
Route::get('/c/showreport/{grvid}' , 'GrievanceController@showreport');
Route::get('/c/reports' , 'GrievanceController@history_c');
Route::get('/c/change' , 'GrievanceController@changeP');

//Models
Route::resource('grievances','GrievanceController');

// Route::get('/write/{grievannce}', [ 'as' => 'write-report', 'uses' => 'GrievanceController@writereport']);

// Route::post('/remarks','GrievanceController@store1');
//  Route::post('grievances', [
//      'remarks' => 'GrievanceController@store1'
//    ]);


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

