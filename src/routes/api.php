<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MemberController;

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

// GET
// Route::get('/member', function(){
//     echo 'hoge';
// });

// GET + Class
Route::get('/member', [MemberController::class, 'index']);
Route::post('/member/create', [MemberController::class, 'create']);
Route::get('/member/{id}/show', [MemberController::class, 'fetch']);
Route::post('/member/{id}/update', [MemberController::class, 'update']);
Route::get('/member/{id}/delete', [MemberController::class, 'delete']);
