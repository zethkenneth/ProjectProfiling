<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\PositionsController;
use App\Http\Controllers\AssigningProjectController;
use App\Http\Controllers\UserAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});
//admin
Route::get('admin/employeeindex', [EmployeesController::class, 'index']);
Route::get('admin/projectindex', [ProjectsController::class, 'index']);
Route::get('admin/positionindex', [PositionsController::class, 'index']);
Route::get('admin/assigningprojectindex', [AssigningProjectController::class, 'index']);
Route::get('/login', [UserAuthController::class, 'login']); //login route



