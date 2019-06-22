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
     return view('home');
 });

 Route::get('/officerlogin', function () {
    return view('officerlogin');
});

Route::get('/certi', function () {
    return view('admin.certi');
});

// Route::get('/pdf','Users@getPdf');



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


//  Route::get('/','homecontroller@home');
Route::post('/logout','homecontroller@logout');



Route::get('/show-all-uploaded-docs','Users@showAllDocs');
Route::get('/show-all-certificates','Users@showAllcerti');
Route::get('/userregister','Users@getuseregisteruser');
Route::post('/userregister','Users@registeruser');
Route::get('/userlogin','Users@getuserlogin');
Route::post('/userlogin','Users@userlogin');
Route::get('/user-home-screen','Users@getUserHomeScreen');
Route::get('/applyA','Users@getDocA');
Route::post('/applyA','Users@DocA');
Route::get('/see-applied-docs-status','Users@seeAppliedDocsStatus');
Route::post('/re-apply/{appid}','Users@reApply');


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

Route::get('/viewB/{A}','officer@viewA');
Route::get('/viewA/{B}','officer@viewB');

Route::get('/accept-application/{appid}/{uid}','officer@acceptDoc');
Route::get('/reject-application/{appid}/{uid}','officer@rejectDoc');





?>










