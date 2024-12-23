<?php
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PateController;
use App\Http\Controllers\PateCommentController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [AuthController::class, 'create']);
Route::post('/login', [AuthController::class, 'store']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::post('/forgot-password', [ForgotPasswordLinkController::class, 'store']);
Route::post('/forgot-password/{token}', [ForgotPasswordLinkController::class, 'reset']);
Route::group(['prefix' => 'notes'], function () {
    Route::get('/', [NoteController::class, 'index']);
    Route::get('/post',  [NoteController::class, 'create']);
    Route::post('/post',  [NoteController::class, 'store']);
    Route::get('/delete/{id}',  [NoteController::class, 'destroy']);
    Route::post('/update/{id}',  [NoteController::class, 'update']);
});
