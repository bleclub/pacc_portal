<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home.index');
// });

// Route::get('/report', function () {
//     return view('reports.index');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::resource('report', ReportController::class);

Route::get('/report/edit/{id}/{case_id}', [ReportController::class, 'edit'])->name('report.edit');

Route::resource('department', DepartmentController::class);