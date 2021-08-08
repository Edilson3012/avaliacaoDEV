<?php

Route::any('admin/users/search', 'Admin\UsuarioController@seach')->name('user.search');
Route::put('admin/users/{id}', 'Admin\UsuarioController@update')->name('user.update');
Route::get('admin/users/create', 'Admin\UsuarioController@create')->name('user.create');
Route::delete('admin/users/{id}', 'Admin\UsuarioController@destroy')->name('user.destroy');
Route::get('admin/users/{id}/edit', 'Admin\UsuarioController@edit')->name('user.edit');
Route::get('admin/users/{id}', 'Admin\UsuarioController@show')->name('user.show');
Route::post('admin/users/store', 'Admin\UsuarioController@store')->name('user.store');
Route::get('admin/users', 'Admin\UsuarioController@index')->name('user.index');

Route::get('/', function () {
    return view('welcome');
});
