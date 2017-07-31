<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('apps', 'AppController');
Route::resource('apps/{app}/synonyms', 'SynonymController');
Route::resource('apps/{app}/indices', 'IndexController');
Route::resource('apps/{app}/indices/{index}/facets', 'FacetController');
Route::resource('apps/{app}/indices/{index}/searchable-attributes', 'SearchableAttributeController');