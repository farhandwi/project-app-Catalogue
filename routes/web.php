<?php

//penggunaan use relatif terhadap folder project
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CooperationController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CooperationController::class, 'index']);
Route::get('/detail/{cooperation:name}', [CooperationController::class, 'show']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticate']);