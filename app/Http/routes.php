<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
	return $app->version();
});

$app->group(['prefix' => 'api', 'namespace' => 'App\Http\Controllers\Api'], function() use ($app){
	$app->group(['prefix' => 'api/v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() use ($app){
		$app->group(['prefix' => 'api/v1/districts', 'namespace' => 'App\Http\Controllers\Api\V1\District'], function() use ($app){
			$app->get('/', ['uses' => 'DistrictController@all']);
		});
		$app->group(['prefix' => 'api/v1/animals', 'namespace' => 'App\Http\Controllers\Api\V1\Animal'], function() use ($app){
			$app->get('/', ['uses' => 'AnimalController@all']);
		});
		$app->group(['prefix' => 'api/v1/races', 'namespace' => 'App\Http\Controllers\Api\V1\Race'], function() use ($app){
			$app->get('/', ['uses' => 'RaceController@all']);
		});
		$app->group(['prefix' => 'api/v1/post_types', 'namespace' => 'App\Http\Controllers\Api\V1\PostType'], function() use ($app){
			$app->get('/', ['uses' => 'PostTypeController@all']);
		});
		$app->group(['prefix' => 'api/v1/user_types', 'namespace' => 'App\Http\Controllers\Api\V1\UserType'], function() use ($app){
			$app->get('/', ['uses' => 'UserTypeController@all']);
		});
	});
});
