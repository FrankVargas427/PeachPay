<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web3AuthController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(config('fortify.middleware', ['web']))->prefix('metamask')->group(function () {
    $limiter = config('fortify.limiters.metamask');

    Route::get('/ethereum/signature', [Web3AuthController::class, 'signature'])
        ->name('metamask.signature')
        ->middleware('guest:'.config('fortify.guard'));

    Route::post('/ethereum/authenticate', [Web3AuthController::class, 'authenticate'])
        ->middleware(array_filter([
            'guest:'.config('fortify.guard'),
            $limiter ? 'throttle:'.$limiter : null,
        ]))->name('metamask.authenticate');
});