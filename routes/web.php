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
//     return view('admin.dashboard');
// });

// Route::get('/login', function () {
//     return view('admin.admin_login');
// });

// Route::get('/status','Controller@viewstatus');

// Route::get('/certi', function () {
//     return view('admin.certi');
// });

// Route::get('/add', function () {
//     return view('add');
// });

// //
// // Auth::routes();


Route::get('/','homecontroller@home');
Route::post('/logout','homecontroller@logout');



Route::get('/show-all-uploaded-docs','user@showAllDocs');
Route::get('/show-all-certificates','user@showAllcerti');
Route::get('/userregister','user@getuseregisteruser');
Route::post('/userregister','user@registeruser');
Route::get('/userlogin','user@getuserlogin');
Route::post('/userlogin','user@userlogin');
Route::get('/user-home-screen','user@getUserHomeScreen');
Route::get('/applyA','user@getDocA');
Route::post('/applyA','user@DocA');
Route::get('/see-applied-docs-status','user@seeAppliedDocsStatus');
Route::post('/re-apply/{appid}','user@reApply');


Route::get('/loginofficer','officer@getofficerlogin');
Route::post('/loginofficer','officer@officerlogin');
Route::get('/viewaddressproof/{addprof}','officer@addprof');
Route::get('/viewidproof/{idprof}','officer@idprof');
Route::get('/accpetuser/{id}','officer@accept');
Route::get('/rejectuser/{id}','officer@reject');
Route::get('/officer-home-screen','officer@getOfficerHomeScreen');
Route::get('/application-for-docA','officer@appliedForA');
Route::get('/new-user-application','officer@getNewUserApplication');
Route::post('/new-user-application','officer@NewUserApplication');
// routes to view pdf of doc A

Route::get('/viewB/{A}','officer@addprofA');
Route::get('/viewA/{B}','officer@idprofA');

Route::post('/accept-application/{appid}','officer@acceptDoc');
Route::post('/reject-application/{appid}','officer@rejectDoc');





?>










