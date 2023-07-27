<?php

//penggunaan use relatif terhadap folder project
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CooperationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DasboardCooperationController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\OrganizationTypeController;
use App\Http\Controllers\IndustryController;

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

Route::get('/', [CooperationController::class, 'index'])->middleware('guest');
Route::get('/detail/{cooperation:name}', [CooperationController::class, 'show']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::resource('/dashboard/cooperations', DasboardCooperationController::class)->middleware('auth');
Route::resource('/country', CountryController::class)->middleware('auth');
Route::resource('/organizationtype', OrganizationTypeController::class)->middleware('auth');
Route::resource('/industrytype', IndustryController::class)->middleware('auth');
