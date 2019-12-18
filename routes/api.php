<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

        Route::resource('roles', 'RolesController', ['except' => ['create', 'edit']]);

        Route::resource('users', 'UsersController', ['except' => ['create', 'edit']]);

       // Route::resource('formations', 'FormationsController', ['except' => ['create', 'edit']]);

        Route::resource('categories', 'CategoriesController', ['except' => ['create', 'edit']]);

        Route::resource('tags', 'TagsController', ['except' => ['create', 'edit']]);

        Route::resource('places', 'PlacesController', ['except' => ['create', 'edit']]);
     

});
Route::get('/test','Api\V1\UsersController@index');


Route::get('/formations/{formation}/comments','CommentController@index');
Route::middleware('auth:api')->group(function(){
    Route::POST('/formations/{formation}/comment','CommentController@store');
});