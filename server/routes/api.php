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

Route::middleware('auth:api')->get('/user/token', function () {
    return response()->json(\Auth::user()->token());
});

Route::middleware('auth:api')->get('/user', function () {
    return response()->json(\Auth::user());
});

Route::middleware('auth:api')->post('/posts', function(Request $request) {
    return response()->json($request->input());
});
