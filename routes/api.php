<?php

use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ContactController;
use App\Http\Controllers\API\GalleryController;
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/coba', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'Berhasil Tersambung dengan End Point',
        'data' => null
    ], 200);
});
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/contacts/set-type', [ContactController::class, 'set_type']);
Route::get('/contacts/get-type', [ContactController::class, 'get_type']);



Route::apiResources([
    'contacts' => ContactController::class,
    'gallery' => GalleryController::class,
    'category' => CategoryController::class
]);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
