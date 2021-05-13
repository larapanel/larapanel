<?php
use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Larapanel\Larapanel\Http\Controllers',
    'prefix' => 'panel',
    'middleware' => ['web', 'auth', 'verified']
], function () {
    Route::namespace('Authorization')->group(function () {

        Route::resource('permissions', 'PermissionsController')
            ->except(['show']);

        Route::resource('roles', 'RolesController')
            ->except(['show']);

        Route::resource('roles-assignment', 'RolesAssignmentController')
            ->only(['index', 'edit', 'update']);

    });
    Route::namespace('User')->group(function (){
        Route::resource('users', 'UserController')
            ->except(['index', 'show']);
    });
});
