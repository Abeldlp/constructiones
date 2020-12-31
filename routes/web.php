<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return Inertia::render('index');
    });
    Route::post('/save_inquiry', 'InquiryController@store');
    Route::get('/sobre-nosotros', function () {
        return Inertia::render('about');
    });

    Route::get('/obras', 'ConstructionController@index');

    Route::get('/contacta', function () {
        return Inertia::render('contact');
    });

    Route::prefix('/admin')->middleware('auth')->group(function(){

        Route::get('/', 'PresupuestoController@index');

        Route::prefix('/nueva_obra')->group(function(){
            Route::get('/', 'ConstructionController@create');
            Route::post('/', 'ConstructionController@store');
            Route::delete('/delete/{id}', 'ConstructionController@destroy');
        });


        Route::prefix('/clientes')->group(function () {
            Route::get('/', 'InquiryController@index');
            Route::put('/update/{id}', 'InquiryController@update');
            Route::delete('/delete/{id}', 'InquiryController@destroy');
        });
    });
});

Auth::routes();



