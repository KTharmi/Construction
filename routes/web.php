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
    Route::get('/services/electrical', 'Services\ElectricalServiceController@index')->name('service.electrical');
    Route::get('/services/buildingDrawing', 'Services\BuildingDrawingController@index')->name('service.buildingDrawing');
    Route::get('/services/painting', 'Services\PaintingController@index')->name('service.painting');
    Route::get('/services/plumbing', 'Services\PlumbingConstructionController@index')->name('service.plumbing');
    Route::get('/services/roofing', 'Services\RoofingConstructionController@index')->name('service.roofing');
    Route::get('/services/tiles', 'Services\TilesFittingController@index')->name('service.tiles');


 });

   Auth::routes();
   Route::get('/home', 'HomeController@index')->name('home');
 Route::group(['middleware' => ['auth']],function(){

      Route::get('profile','UserController@profile')->name('profile');
      Route::post('profile','UserController@update_avatar')->name('update_avatar');

   Route::group(['middleware' =>['admin']],function(){
      Route::group(['namespace' =>'Admin', 'prefix' => 'admin/employee'],function(){
         Route::get('/view', 'EmployeeController@index')->name('admin.employee.view');
         Route::get('/create', 'EmployeeController@create')->name('admin.employee.create');
         Route::post('/', 'EmployeeController@store')->name('admin.employee.store');
         Route::get('/{employee}/edit', 'EmployeeController@edit')->name('admin.employee.edit');
         Route::patch('/update/{employee}', 'EmployeeController@update')->name('admin.employee.update');
         Route::get('/delete/{employee}', 'EmployeeController@delete')->name('admin.employee.delete');
         Route::delete('destroy/{employee}', 'EmployeeController@destroy')->name('admin.employee.destroy');
     
      });

      Route::group(['namespace' =>'Admin', 'prefix' => 'admin/labourer'],function(){
         Route::get('/view', 'LabourerController@index')->name('admin.labourer.view');
         Route::get('/create', 'LabourerController@create')->name('admin.labourer.create');
         Route::post('/', 'LabourerController@store')->name('admin.labourer.store');
         Route::get('/{labourer}/edit', 'LabourerController@edit')->name('admin.labourer.edit');
         Route::patch('/update/{labourer}', 'LabourerController@update')->name('admin.labourer.update');
         Route::get('/delete/{labourer}', 'LabourerController@delete')->name('admin.labourer.delete');
         Route::delete('destroy/{labourer}', 'LabourerController@destroy')->name('admin.labourer.destroy');
      });

      Route::group(['namespace' =>'Admin', 'prefix' => 'admin/project'],function(){
         Route::get('/view', 'ProjectController@index')->name('admin.project.view');
         Route::get('/create', 'ProjectController@create')->name('admin.project.create');
         Route::post('/', 'ProjectController@store')->name('admin.project.store');
         Route::get('/{project}/edit', 'ProjectController@edit')->name('admin.project.edit');
         Route::patch('/update/{project}', 'ProjectController@update')->name('admin.project.update');
         Route::get('/delete/{project}', 'ProjectController@delete')->name('admin.project.delete');
         Route::delete('destroy/{project}', 'ProjectController@destroy')->name('admin.project.destroy');
   
      });
   });

   Route::group(['middleware' =>['estimator']],function(){
      Route::group(['namespace' =>'Estimator', 'prefix' => 'estimator/material'],function(){
            
         Route::get('/view', 'MaterialController@index')->name('estimator.material.view');
         Route::get('/create', 'MaterialController@create')->name('estimator.material.create');
         Route::post('/', 'MaterialController@store')->name('estimator.material.store');
         Route::get('/{material}/edit', 'MaterialController@edit')->name('estimator.material.edit');
         Route::patch('/update/{material}', 'MaterialController@update')->name('estimator.material.update');
         Route::get('/delete/{material}', 'MaterialController@delete')->name('estimator.material.delete');
         Route::delete('destroy/{material}', 'MaterialController@destroy')->name('estimator.material.destroy');
   
      });

      Route::group(['namespace' =>'Estimator', 'prefix' => 'estimator/labourer'],function(){
         Route::get('/view', 'LabourerController@index')->name('estimator.labourer.view');
         Route::get('/create', 'LabourerController@create')->name('estimator.labourer.create');
         Route::post('/', 'LabourerController@store')->name('estimator.labourer.store');
         Route::get('/{labourer}/edit', 'LabourerController@edit')->name('estimator.labourer.edit');
         Route::patch('/update/{labourer}', 'LabourerController@update')->name('estimator.labourer.update');
         Route::get('/delete/{labourer}', 'LabourerController@delete')->name('estimator.labourer.delete');
         Route::delete('destroy/{labourer}', 'LabourerController@destroy')->name('estimator.labourer.destroy');
   
      });
      Route::group(['namespace' =>'Estimator', 'prefix' => 'estimator/task'],function(){
         Route::get('/view', 'WorkController@index')->name('estimator.task.view');
         Route::get('/create', 'WorkController@create')->name('estimator.task.create');
         Route::post('/', 'WorkController@store')->name('estimator.task.store');
         Route::get('/{work}/edit', 'WorkController@edit')->name('estimator.task.edit');
         Route::patch('/update/{work}', 'WorkController@update')->name('estimator.task.update');
         Route::get('/delete/{work}', 'WorkController@delete')->name('estimator.task.delete');
         Route::delete('destroy/{work}', 'WorkController@destroy')->name('estimator.task.destroy');
   
      });
      Route::group(['namespace' =>'Estimator', 'prefix' => 'estimator/estimate'],function(){
         Route::get('/materials', 'MaterialEstimateController@index')->name('estimator.estimate.material');
         Route::get('/labourers', 'LabourerEstimateController@index')->name('estimator.estimate.labourer');
         Route::get('/totalcost', 'Labourer_MaterialEstimateController@index')->name('estimator.estimate.totalcost');
         Route::get('/user/selection', 'MaterialEstimateController@selection')->name('estimator.estimate.selection');
         
         Route::get('/labourerCost', 'BillController@labourercost')->name('estimator.bill.labourerCost');
         Route::get('/customer/invoice', 'BillController@invoice')->name('estimator.bill.invoice');
      });

   });
});
