<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeDetailController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/emp_detail', EmployeeDetailController::class);
Route::get('/add_emp_detail', [EmployeeDetailController::class, 'addNewEmployee']);
Route::post('/add_emp_detail', [EmployeeDetailController::class, 'newEmployee_details']);
Route::post('/update/{id}', [EmployeeDetailController::class, 'update']);
Route::get('/delete/{id}', [EmployeeDetailController::class, 'destroy']);


