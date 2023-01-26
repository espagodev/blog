<?php

use app\Http\Controllers\v1\ApiPostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::namespace('v1')->name('api.')->group(function(){
    Route::get('apiPost', 'ApiPostsController@index')->name('apiPost');

    Route::get('apiPost/{id}', 'ApiPostsController@show');
});