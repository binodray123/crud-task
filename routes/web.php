<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\EmployeeController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route for Company
Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
Route::post('/companies', [CompanyController::class, 'store'])->name('companies.store');
Route::get('/companies/{company}/edit',[CompanyController::class, 'edit'])->name('companies.edit');
Route::post('/companies/{company}/update',[CompanyController::class, 'update'])->name('companies.update');
Route::delete('/companies/{company}/destroy',[CompanyController::class, 'destroy'])->name('companies.destroy');

//Route for Employee

Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/{employee}/edit',[EmployeeController::class, 'edit'])->name('employees.edit');
Route::post('/employees/{employee}/update',[EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{employee}/destroy',[EmployeeController::class, 'destroy'])->name('employees.destroy');


// Route::get('test', [TestController::class, 'test']);
Route::get('test/{name}/{age}', [TestController::class, 'test']);
