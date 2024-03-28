<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|processCode/refresh_token/getInvoiceQueryAll//
*/

Route::get('/user/oauth', [UserController::class, 'oauth_quickbooks']);
Route::get('/callback', [UserController::class, 'processCode']);
Route::get('/redirect', [UserController::class, 'redirect_to']);
Route::get('/create/department', [DepartmentController::class, 'store']);
Route::get('/refresh_token/quickbook/{token}', [UserController::class, 'refresh_token']);//
Route::get('/refresh_token/{last_token}', [UserController::class, 'token_fresh']);
Route::get('/qb/invoice/all', [UserController::class, 'getInvoiceQueryAll']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
