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
Route::group(['namespace' => 'Frontend'], function () {
//Languages Changer
Route::get('changelanguage', 'LanguageController@changeLanguage');
Route::get('fee', 'AllController@fee');
Route::get('rule', 'AllController@rule');
});
Route::get('/', function () {
    return view('frontend.index');
});



//Admin
Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin','middleware' => 'auth', 'namespace' => 'Backend'], function () {   
    Route::resource('fee', 'FeeController');
    Route::resource('rule', 'RuleController');
    
    Route::resource('select','SelectController');
    Route::resource('user','UserController');
    Route::resource('fselect','FemaleSelectController');
    Route::resource('rollcall','RollCallController');
    Route::resource('rollcallrecord','RollCallRecordController');
    Route::resource('payment','PaymentController');

});