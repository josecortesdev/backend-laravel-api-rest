<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::post('logout', 'UserController@logout');


Route::group(['middleware' => ['jwt.verify']], function() {

    Route::post('user','UserController@getAuthenticatedUser');

    Route::resource('products', ProductController::class);
    
});

