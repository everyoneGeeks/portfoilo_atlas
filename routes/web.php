<?php





Route::group(['middleware' => ['auth'],'prefix'=>'admin'], function() {



    
 /*
|--------------------------------------------------------------------------
| website setting Section 
|--------------------------------------------------------------------------
| this will handle all settings part
*/
Route::get('/settings','HeadlineController@index')->name('settings');
Route::get('/setting/info/{id}','HeadlineController@show')->name('setting.info')->where('id', '[0-9]+');
Route::get('/setting/edit/{id}','HeadlineController@edit')->name('setting.edit')->where('id', '[0-9]+')->middleware('role:setting,edit');
Route::post('/setting/update/{id}','HeadlineController@update')->name('setting.edit.submit')->where('id', '[0-9]+')->middleware('role:setting,edit');
#--   

 /*
|--------------------------------------------------------------------------
| website pricing Section 
|--------------------------------------------------------------------------
| this will handle all pricing part
*/
Route::get('/pricings','PricingController@index')->name('pricings');
Route::get('/pricing/info/{id}','PricingController@show')->name('pricing.info')->where('id', '[0-9]+');
Route::get('/pricing/edit/{id}','PricingController@edit')->name('pricing.edit')->where('id', '[0-9]+')->middleware('role:pricing,edit');
Route::post('/pricing/update/{id}','PricingController@update')->name('pricing.edit.submit')->where('id', '[0-9]+')->middleware('role:pricing,edit');
#--   

/*
|--------------------------------------------------------------------------
| aboutUsBox Section 
|--------------------------------------------------------------------------
| this will handle all aboutUsBox part
*/
Route::get('/aboutUsBoxs','AboutUsBoxController@index')->name('aboutUsBoxs');
Route::get('/aboutUsBox/info/{id}','AboutUsBoxController@show')->name('aboutUsBox.info')->where('id', '[0-9]+');
Route::get('/aboutUsBox/edit/{id}','AboutUsBoxController@edit')->name('aboutUsBox.edit')->where('id', '[0-9]+')->middleware('role:aboutUsBox,edit');
Route::post('/aboutUsBox/edit/{id}','AboutUsBoxController@update')->name('aboutUsBox.edit.submit')->where('id', '[0-9]+')->middleware('role:aboutUsBox,edit');
Route::get('/aboutUsBox/add','AboutUsBoxController@create')->name('aboutUsBox.add')->middleware('role:aboutUsBox,add');
Route::post('/aboutUsBox/add','AboutUsBoxController@store')->name('aboutUsBox.add.submit')->middleware('role:aboutUsBox,add');
#----------------------------------------------------------------------------------



/*
|--------------------------------------------------------------------------
| services Section 
|--------------------------------------------------------------------------
| this will handle all services part
*/
Route::get('/services','ServicesController@index')->name('services');
Route::get('/service/info/{id}','ServicesController@show')->name('service.info')->where('id', '[0-9]+');
Route::get('/service/edit/{id}','ServicesController@edit')->name('service.edit')->where('id', '[0-9]+')->middleware('role:service,edit');
Route::post('/service/edit/{id}','ServicesController@update')->name('service.edit.submit')->where('id', '[0-9]+')->middleware('role:service,edit');
Route::get('/service/add','ServicesController@create')->name('service.add')->middleware('role:service,add');
Route::post('/service/add','ServicesController@store')->name('service.add.submit')->middleware('role:service,add');
#----------------------------------------------------------------------------------


/*
|--------------------------------------------------------------------------
| website clients Section 
|--------------------------------------------------------------------------
| this will handle all settings part
*/
Route::get('/clients','ClientController@index')->name('clients');
Route::get('/client/info/{id}','ClientController@show')->name('client.info')->where('id', '[0-9]+');
Route::get('/client/edit/{id}','ClientController@edit')->name('client.edit')->where('id', '[0-9]+')->middleware('role:setting,edit');
Route::post('/client/update/{id}','ClientController@update')->name('client.edit.submit')->where('id', '[0-9]+')->middleware('role:setting,edit');
Route::get('/client/add','ClientController@create')->name('client.add')->middleware('role:client,add');
Route::post('/client/add','ClientController@store')->name('client.add.submit')->middleware('role:client,add');
#--   




/*
|--------------------------------------------------------------------------
| admin Section 
|--------------------------------------------------------------------------
| this will handle all admin  part
*/
Route::group(['middleware' => 'superAdmin'], function()
{
    Route::get('/admins','adminsController@list')->name('admins');
    Route::get('/admin/info/{id}','adminsController@info')->name('admin.info')->where('id', '[0-9]+');
    Route::get('/admin/permission/{id}','adminsController@status')->name('admin.permission')->where('id', '[0-9]+');
    Route::get('/admin/edit/{id}','adminsController@formEdit')->name('admin.edit')->where('id', '[0-9]+');
    Route::post('/admin/edit/{id}','adminsController@submitEdit')->name('admin.edit.submit')->where('id', '[0-9]+');
    Route::get('/admin/add','adminsController@formAdd')->name('admin.add');
    Route::get('/admin/delete/{id}','adminsController@delete')->name('admin.delete');
    Route::post('/admin/add','adminsController@submitAdd')->name('admin.add.submit');
});
#----------------------------------------------------------------------------------

/*
|--------------------------------------------------------------------------
| complains Section 
|--------------------------------------------------------------------------
| this will handle all complains part
*/
Route::get('/complains','complainsController@list')->name('complains');
Route::get('/complains/info/{id}','complainsController@info')->name('complains.info');
#---------------------------------------------------------------------------------- 


Route::get('/home','dashBoardController@index')->name('dashboard');
Route::get('/','dashBoardController@index')->name('dashboard');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout.get');
});

Auth::routes(['register' => false, 'verify' => false]);

Route::get('/home',function(){ return view('home'); });
Route::get('/',function(){ return view('home'); });
