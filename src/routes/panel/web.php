<?php

use Illuminate\Support\Facades\Route;
use Larapanel\Larapanel\Http\Controllers\Panel\TinymceMediaController;

Route::group([
    'namespace' => 'Larapanel\Larapanel\Http\Controllers\Panel',
    'prefix' => 'panel',
    'middleware' => ['web', 'auth', 'verified']
], function () {

    Route::get('/', 'PanelController@index')->name('panel');

});

Route::group([
    'namespace' => 'Larapanel\Larapanel\Http\Controllers\Panel\Account',
    'middleware' => ['web', 'auth', 'verified']
], function () {

    Route::resource('/account', 'AccountController')
        ->only( 'edit', 'update');
    Route::post('/account/set_image', 'AccountController@setImage')->name('account.setImage');
    Route::get('/account/get_image', 'AccountController@getImage')->name('account.getImage');

});
Route::resource('/users', 'User\UserController')->except(['index', 'show']);

Route::post('tinymce', TinymceMediaController::class)->name('tinymce.upload');
