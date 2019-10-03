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
//Route::view('/welcome', 'home');



 Route::group(['namespace' =>'User'],function(){
    Route::get('/', 'HomeController@index')->name('user.home');
    Route::get('/about', 'AboutController@index')->name('user.about');
    Route::get('/contact', 'ContactController@index')->name('user.contact');
    Route::get('/services', 'ServicesController@index')->name('user.services');
    Route::get('/project', 'Page\ProjectController@index')->name('user.project');
    Route::get('/elements', 'Page\ElementsController@index')->name('user.elements');
 });

  Auth::routes();
 Route::get('/home', 'HomeController@index')->name('home');
   Route::group(['middleware' => ['auth']],function(){

      
         Route::group(['namespace' =>'Admin', 'prefix' => 'admin/employee'],function(){
         
         Route::get('/view', 'EmployeeController@index')->name('admin.employee.view');
         

     
   });
   Route::group(['namespace' =>'Estimator', 'prefix' => 'estimator/material'],function(){
         
      Route::get('/view', 'MaterialController@index')->name('estimator.material.view');
      Route::get('/create', 'MaterialController@create')->name('estimator.material.create');
      Route::post('/store', 'MaterialController@create')->name('estimator.material.store');

  
});


   });
