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
    return view('frontend.index');
});
Route::get('/registration',function(){
    return view('frontend.registration');
})->name('registration');

Route::group(['namespace' => 'Frontend'], function () {
//Languages Changer
Route::get('changelanguage', 'LanguageController@changeLanguage');
Route::get('fee', 'AllController@fee');
Route::get('rule', 'AllController@rule');
Route::post('/registration','StudentRegisterController@store');
//male
Route::get('register/index','StudentRegisterController@index')->name('register.index');
Route::get('register/{id}','StudentRegisterController@show')->name('register.show');
Route::post('register/{id}','StudentRegisterController@update');
Route::get('select','StudentRegisterController@user');
Route::get('fselect','StudentRegisterController@fselect');
//female
Route::get('fregister/index','FemaleRegisterController@index')->name('fregister.index');
Route::get('fregister/{id}','FemaleRegisterController@show')->name('fregister.show');
Route::post('fregister/{id}','FemaleRegisterController@update');

});



//Admin
Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin','middleware' => 'auth', 'namespace' => 'Backend'], function () {   
    Route::resource('fee', 'FeeController');
    Route::resource('rule', 'RuleController');
    Route::resource('rollcall','RollCallController');
    Route::resource('mrollcall','MaleRollCallController'); 
    Route::resource('select','SelectController');
    Route::resource('user','UserController');
    Route::resource('fselect','FemaleSelectController');
    Route::resource('rollcallrecord','RollCallRecordController');
    Route::resource('mrollcallrecord','MaleRollCallRecordController');
    Route::resource('payment','PaymentController');
    Route::resource('mpayment','MalePaymentController');


});