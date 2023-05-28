<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TestController;

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

Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
Route::post('/companies', [CompanyController::class, 'store'])->name('companies.store');
Route::get('/companies/{company}/edit',[CompanyController::class, 'edit'])->name('companies.edit');
Route::post('/companies/{company}/update',[CompanyController::class, 'update'])->name('companies.update');
Route::delete('/companies/{company}/destroy',[CompanyController::class, 'destroy'])->name('companies.destroy');


// Route::get('test', [TestController::class, 'test']);
Route::get('test/{name}/{age}', [TestController::class, 'test']);
