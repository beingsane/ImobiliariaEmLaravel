<?php

Route::get('/', ['as' => 'site.home', function () {
	return view('site.home');
}]);

Route::get('/sobre', ['as' => 'site.sobre', function () {
	return view('site.sobre');
}]);

Route::get('/contato', ['as' => 'site.contato', function () {
	return view('site.contato');
}]);

Route::get('/imovel/{id}/{titulo?}', ['as' => 'site.imovel', function () {
	return view('site.imovel');
}]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
