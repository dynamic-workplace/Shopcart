<?php


Route::get('/admin/home', function () {
    return view('admin.dashboard.home');
});

Route::get('/admin/category/index', 'Admin\DashboardController@categoryIndex')->name('admin.category.index');
Route::get('/admin/category/manage', 'Admin\DashboardController@categoryManage')->name('admin.category.manage');
Route::get('/admin/subcategory/index', 'Admin\DashboardController@subcategoryIndex')->name('admin.subcategory.index');
Route::get('/admin/subcategory/manage', 'Admin\DashboardController@subcategoryManage')->name('admin.subcategory.manage');
Route::get('/admin/product/new', 'Admin\DashboardController@createNewProduct')->name('admin.product.new');


Route::get('/test', function (){

    return view('test');

});

Route::post('/test', 'Admin\DashboardController@test');
Route::get('/check','Admin\DashboardController@makeWork');
Route::get('/break','Admin\DashboardController@doWork');



Route::resource('/admin/category', 'Admin\Main\CategoryController');
Route::resource('/admin/subcategory', 'Admin\Main\SubcategoryController');

Route::resource('/admin/product/process', 'Admin\Product\ProductController');

Route::resource('/admin/product/mobile','Admin\Product\Mobile\MobileController');
Route::resource('/admin/product/smartwearabletech', 'Admin\Product\SmartWearableTech\SmartwearabletechController');
Route::resource('/admin/product/mobileaccessories', 'Admin\Product\MobileAccessories\MobileaccessoriesController');