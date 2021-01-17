<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PocketPills\Staff;
use App\Http\Controllers\PocketPills\BranchProduct;
use App\Http\Controllers\PocketPills\Branch;
use App\Http\Controllers\PocketPills\Pharmacy;


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


Route::apiResource('staff', 'App\Http\Controllers\PocketPills\Staff');
Route::apiResource('branchproduct', 'App\Http\Controllers\PocketPills\BranchProduct');
Route::apiResource('branch', 'App\Http\Controllers\PocketPills\Branch');
Route::apiResource('pharmacy', 'App\Http\Controllers\PocketPills\Pharmacy');
