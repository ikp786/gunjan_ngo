<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IncomeController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DonerController;



// admin controllers
use App\Http\Controllers\Front\HomeController;

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

Route::get('front/home',[HomeController::class, 'index']);

// dashboard

//login
Route::post('admin/login/loginUser' , [AuthController::class, 'loginUser']);
Route::get('admin/login/login' , [AuthController::class, 'signIn']);

Route::group(['prefix'=>'admin' ], function(){

Route::get('dashboard',[DashboardController::class, 'index']);//->middleware('admin');


//category

Route::group(['prefix'=>'categories'], function(){
Route::get('index',[CategoryController::class, 'index']);
Route::get('create',[CategoryController::class, 'create']);
Route::post('store',[CategoryController::class, 'store']);
Route::get('edit/{id}',[CategoryController::class, 'edit']);
Route::post('update/{id}',[CategoryController::class, 'update']);
Route::get('destroy/{id}',[CategoryController::class, 'destroy']);
});

//income

Route::group(['prefix'=>'incomes'], function(){
Route::get('index',[IncomeController::class, 'index']);
Route::get('create',[IncomeController::class, 'create']);
Route::post('store',[IncomeController::class, 'store']);
Route::get('edit/{id}',[IncomeController::class, 'edit']);
Route::post('update/{id}',[IncomeController::class, 'update']);
Route::get('destroy/{id}',[IncomeController::class, 'destroy']);
});

//expense

Route::group(['prefix'=>'expenses'], function(){
Route::get('index',[ExpenseController::class, 'index']);
Route::get('create',[ExpenseController::class, 'create']);
Route::post('store',[ExpenseController::class, 'store']);
Route::get('edit/{id}',[ExpenseController::class, 'edit']);
Route::post('update/{id}',[ExpenseController::class, 'update']);
Route::get('destroy/{id}',[ExpenseController::class, 'destroy']);
});

//service

Route::group(['prefix'=>'services'], function(){
Route::get('index',[ServiceController::class, 'index']);
Route::get('create',[ServiceController::class, 'create']);
Route::post('store',[ServiceController::class, 'store']);
Route::get('edit/{id}',[ServiceController::class, 'edit']);
Route::post('update/{id}',[ServiceController::class, 'update']);
Route::get('destroy/{id}',[ServiceController::class, 'destroy']);
});

// doner

Route::group(['prefix'=>'doners'], function(){
Route::get('index',[DonerController::class, 'index']);
Route::get('create',[DonerController::class, 'create']);
Route::post('store',[DonerController::class, 'store']);
Route::get('edit/{id}',[DonerController::class, 'edit']);
Route::post('update/{id}',[DonerController::class, 'update']);
Route::get('destroy/{id}',[DonerController::class, 'destroy']);
});


});