<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Information;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


    Route::get('/terms','HomeController@terms');
/*-------------------------- HomeController --------------------------------*/

    Route::get('/home', 'HomeController@index'); //route vèrs page d'accueil
    Route::get('/', 'HomeController@index'); //route vèrs page d'accueil
    Route::get('contact','HomeController@contact'); //route vèrs page de contact
    Route::post('/', 'HomeController@saveInfo');

/*-------------------------- Fin HomeController -----------------------------*/

    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);