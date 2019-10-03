<?php

Route::group(['prefix' => 'despesa'], function () {
  Route::get('index', ['as' => 'despesa.index', 'uses' => 'LancamentoController@listDespesas']);
  Route::get('create', ['as' => 'despesa.create', 'uses' => 'LancamentoController@create']);
  Route::post('store', ['as' => 'despesa.store', 'uses' => 'LancamentoController@store']);
});

Route::get('/', function () {
    return view('welcome');
});
