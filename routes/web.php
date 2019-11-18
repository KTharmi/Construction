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
    Route::get('/about', 'HomeController@about')->name('user.about');
    Route::get('/contact', 'HomeController@contact')->name('user.contact');
    Route::get('/project', 'Page\ProjectController@index')->name('user.project');
    Route::get('/elements', 'Page\ElementsController@index')->name('user.elements');
   Route::group(['prefix' => '/services'],function(){
      Route::get('/electrical', 'ServiceController@electricalServices')->name('service.electrical');
      Route::get('/buildingDrawing', 'ServiceController@buildingServices')->name('service.buildingDrawing');
      Route::get('/painting', 'ServiceController@paintingServices')->name('service.painting');
      Route::get('/plumbing', 'ServiceController@plumbingServices')->name('service.plumbing');
      Route::get('/roofing', 'ServiceController@roofingServices')->name('service.roofing');
      Route::get('/tiles', 'ServiceController@tilesFittingsServices')->name('service.tiles');
      
   });

 });

   Auth::routes();
   Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']],function(){

      Route::get('profile','UserController@profile')->name('profile');
      Route::post('profile','UserController@update_avatar')->name('update_avatar');

   Route::group(['middleware' =>['owner']],function(){
      Route::group(['namespace' =>'Admin', 'prefix' => 'admin'],function(){
         Route::group([ 'prefix' => '/user'],function(){
            Route::get('/view', 'UserController@index')->name('admin.user.view');
            Route::get('/create', 'UserController@create')->name('admin.user.create');
            Route::post('/', 'UserController@store')->name('admin.user.store');
            Route::get('/{user}/edit', 'UserController@edit')->name('admin.user.edit');
            Route::patch('/update/{user}', 'UserController@update')->name('admin.user.update');
            Route::get('/delete/{user}', 'UserController@delete')->name('admin.user.delete');
            Route::delete('destroy/{user}', 'UserController@destroy')->name('admin.user.destroy');
         });

         Route::group([ 'prefix' => '/employee'],function(){
            Route::get('/view', 'EmployeeController@index')->name('admin.employee.view');
            Route::get('/create', 'EmployeeController@create')->name('admin.employee.create');
            Route::post('/', 'EmployeeController@store')->name('admin.employee.store');
            Route::get('/{employee}/edit', 'EmployeeController@edit')->name('admin.employee.edit');
            Route::patch('/update/{employee}', 'EmployeeController@update')->name('admin.employee.update');
            Route::get('/delete/{employee}', 'EmployeeController@delete')->name('admin.employee.delete');
            Route::delete('destroy/{employee}', 'EmployeeController@destroy')->name('admin.employee.destroy');
         });

         Route::group([ 'prefix' => '/customer'],function(){
            Route::get('/view', 'CustomerController@index')->name('admin.customer.view');
            Route::get('/create', 'CustomerController@create')->name('admin.customer.create');
            Route::post('/', 'CustomerController@store')->name('admin.customer.store');
            Route::get('/{customer}/edit', 'CustomerController@edit')->name('admin.customer.edit');
            Route::patch('/update/{customer}', 'CustomerController@update')->name('admin.customer.update');
            Route::get('/delete/{customer}', 'CustomerController@delete')->name('admin.customer.delete');
            Route::delete('destroy/{customer}', 'CustomerController@destroy')->name('admin.customer.destroy');
         });


         Route::group(['prefix' => '/labourer'],function(){
            Route::get('/view', 'LabourerController@index')->name('admin.labourer.view');
            Route::get('/create', 'LabourerController@create')->name('admin.labourer.create');
            Route::post('/', 'LabourerController@store')->name('admin.labourer.store');
            Route::get('/{labourer}/edit', 'LabourerController@edit')->name('admin.labourer.edit');
            Route::patch('/update/{labourer}', 'LabourerController@update')->name('admin.labourer.update');
            Route::get('/delete/{labourer}', 'LabourerController@delete')->name('admin.labourer.delete');
            Route::delete('destroy/{labourer}', 'LabourerController@destroy')->name('admin.labourer.destroy');
         });

         Route::group([ 'prefix' => '/project'],function(){
            Route::get('/view', 'ProjectController@index')->name('admin.project.view');
            Route::get('/create', 'ProjectController@create')->name('admin.project.create');
            Route::post('/', 'ProjectController@store')->name('admin.project.store');
            Route::get('/{project}/edit', 'ProjectController@edit')->name('admin.project.edit');
            Route::patch('/update/{project}', 'ProjectController@update')->name('admin.project.update');
            Route::get('/delete/{project}', 'ProjectController@delete')->name('admin.project.delete');
            Route::delete('destroy/{project}', 'ProjectController@destroy')->name('admin.project.destroy');
      
         });

         Route::group(['prefix' => '/material'],function(){   
            Route::get('/view', 'MaterialController@index')->name('admin.material.view');
            Route::get('/create', 'MaterialController@create')->name('admin.material.create');
            Route::post('/', 'MaterialController@store')->name('admin.material.store');
            Route::get('/{material}/edit', 'MaterialController@edit')->name('admin.material.edit');
            Route::patch('/update/{material}', 'MaterialController@update')->name('admin.material.update');
            Route::get('/delete/{material}', 'MaterialController@delete')->name('admin.material.delete');
            Route::delete('destroy/{material}', 'MaterialController@destroy')->name('admin.material.destroy');

         });

         Route::group(['prefix' => '/task'],function(){   
            Route::get('/view', 'TaskController@index')->name('admin.task.view');
            Route::get('/create', 'TaskController@create')->name('admin.task.create');
            Route::post('/', 'TaskController@store')->name('admin.task.store');
            Route::get('/{work}/edit', 'TaskController@edit')->name('admin.task.edit');
            Route::patch('/update/{work}', 'TaskController@update')->name('admin.task.update');
            Route::get('/delete/{work}', 'TaskController@delete')->name('admin.task.delete');
            Route::delete('destroy/{work}', 'TaskController@destroy')->name('admin.task.destroy');

         });

         Route::group(['prefix' => '/bill'],function(){   
            Route::get('/view', 'BillController@index')->name('admin.bill.view');

         });

      });

   });

   Route::group(['middleware' =>['engineer']],function(){
      Route::group(['namespace' =>'Engineer', 'prefix' => 'engineer'],function(){
         Route::get('/view', 'ProjectController@index')->name('engineer.project.view');
      });

   });


   Route::group(['middleware' =>['estimator']],function(){
      Route::group(['namespace' =>'Estimator', 'prefix' => 'estimator'],function(){
         Route::group(['prefix' => '/material'],function(){   
            Route::get('/view', 'MaterialController@index')->name('estimator.material.view');
            Route::get('/create', 'MaterialController@create')->name('estimator.material.create');
            Route::post('/', 'MaterialController@store')->name('estimator.material.store');
            Route::get('/{material}/edit', 'MaterialController@edit')->name('estimator.material.edit');
            Route::patch('/update/{material}', 'MaterialController@update')->name('estimator.material.update');
            Route::get('/delete/{material}', 'MaterialController@delete')->name('estimator.material.delete');
            Route::delete('destroy/{material}', 'MaterialController@destroy')->name('estimator.material.destroy');

         });

         Route::group(['prefix' => '/labourer'],function(){
            Route::get('/view', 'LabourerController@index')->name('estimator.labourer.view');
            Route::get('/create', 'LabourerController@create')->name('estimator.labourer.create');
            Route::post('/', 'LabourerController@store')->name('estimator.labourer.store');
            Route::get('/{labourer}/edit', 'LabourerController@edit')->name('estimator.labourer.edit');
            Route::patch('/update/{labourer}', 'LabourerController@update')->name('estimator.labourer.update');
            Route::get('/delete/{labourer}', 'LabourerController@delete')->name('estimator.labourer.delete');
            Route::delete('destroy/{labourer}', 'LabourerController@destroy')->name('estimator.labourer.destroy');
      
         });

         Route::group(['prefix' => '/task'],function(){
            Route::get('/view', 'WorkController@index')->name('estimator.task.view');
            Route::get('/create', 'WorkController@create')->name('estimator.task.create');
            Route::post('/', 'WorkController@store')->name('estimator.task.store');
            Route::get('/{work}/edit', 'WorkController@edit')->name('estimator.task.edit');
            Route::patch('/update/{work}', 'WorkController@update')->name('estimator.task.update');
            Route::get('/delete/{work}', 'WorkController@delete')->name('estimator.task.delete');
            Route::delete('destroy/{work}', 'WorkController@destroy')->name('estimator.task.destroy');
      
         });

         Route::group(['prefix' => '/equipment'],function(){
            Route::get('/view', 'EquipmentController@index')->name('estimator.equipment.view');
            Route::get('/create', 'EquipmentController@create')->name('estimator.equipment.create');
            Route::post('/', 'EquipmentController@store')->name('estimator.equipment.store');
            Route::get('/{equipment}/edit', 'EquipmentController@edit')->name('estimator.equipment.edit');
            Route::patch('/update/{equipment}', 'EquipmentController@update')->name('estimator.equipment.update');
            Route::get('/delete/{equipment}', 'EquipmentController@delete')->name('estimator.equipment.delete');
            Route::delete('destroy/{equipment}', 'EquipmentController@destroy')->name('estimator.equipment.destroy');
      
         });

         Route::group(['prefix' => '/project'],function(){
            Route::get('/view', 'ProjectController@index')->name('estimator.project.view');
            Route::get('/{project}/show', 'ProjectController@show')->name('estimator.project.show');
            Route::get('/{project}/materialChoose', 'ProjectController@materialChoose')->name('estimator.project.materialChoose');
            Route::get('/{project}/edit', 'ProjectController@edit')->name('estimator.project.edit');
            Route::patch('/update/{project}', 'ProjectController@update')->name('estimator.project.update');
      
         });

         Route::group(['prefix' => '/estimate'],function(){
            Route::get('/materials', 'MaterialEstimateController@index')->name('estimator.estimate.material');
            Route::get('/user/selection', 'MaterialEstimateController@selection')->name('estimator.estimate.selection');
            Route::post('/user/selection/store', 'MaterialEstimateController@selectionStore')->name('estimator.estimate.selectionStore');
            
            Route::get('/labourers', 'LabourerEstimateController@index')->name('estimator.estimate.labourer');
            Route::get('/labourers/selection', 'LabourerEstimateController@create')->name('estimator.estimate.labourerStore');

            
            Route::get('/total', 'Labourer_MaterialEstimateController@index')->name('estimator.estimate.totalcost');

            Route::get('/task', 'WorkEstimateController@index')->name('estimator.estimate.task');
            Route::get('/task/selection', 'WorkEstimateController@create')->name('estimator.estimate.taskStore');
            Route::get('/labourerCost', 'BillController@labourercost')->name('estimator.bill.labourerCost');
            Route::get('/customer/invoice', 'BillController@invoice')->name('estimator.bill.invoice');
         });
   
      });

   });

   Route::group(['middleware' =>['CManager']],function(){
      Route::group(['namespace' =>'CManager', 'prefix' => 'CManager'],function(){
        // Route::get('/view', 'ProjectController@index')->name('CManager.project.view');
      });

   });
   
   Route::group(['middleware' =>['CManager']],function(){
      Route::group(['namespace' =>'Manager', 'prefix' => 'Manager'],function(){  
            Route::get('/view', 'LaborerController@index')->name('CManager.labourerSch.view');
            Route::get('/store', 'LaborerController@store')->name('CManager.labourerSch.store');

      });

   });      
   
});
