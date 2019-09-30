<?php
Route::group(['prefix' => 'v1'], function(){

Route::post('auth', 'Auth\ApiAuthController@authenticate');

   Route::group(['middleware' => 'jwt.auth'], function(){
     Route::resource('lancamentos','api\v1\LancamentoController');
   });
});
