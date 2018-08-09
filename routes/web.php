<?php


Route::get('/admin/home', function () {
    return view('admin.dashboard.home');
});

Route::get('/admin/category/index', 'DashboardController@categoryIndex')->name('admin.category.index');
Route::get('/admin/category/manage', 'DashboardController@categoryManage')->name('admin.category.manage');
Route::get('/admin/subcategory/index', 'DashboardController@subcategoryIndex')->name('admin.subcategory.index');
Route::get('/admin/subcategory/manage', 'DashboardController@subcategoryManage')->name('admin.subcategory.manage');







Route::resource('/admin/category', 'CategoryController');
Route::resource('/admin/subcategory', 'SubcategoryController');