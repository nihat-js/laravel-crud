<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
Route::get('/',function(){
    return view('welcome');
});

Route::group(["prefix"=>"/customers"],function(){

    Route::get('/',[CustomerController::class,'index'])->name("customers");
    Route::get('/update/{customerNumber}',[CustomerController::class,'update'])->name("customers-update");
    Route::get('/create',[CustomerController::class,'create'])->name('customers-create');

    Route::post('/update/{customerNumber}',[CustomerController::class,'update_post'])->name("customers-update-post");
    Route::post('/create',[CustomerController::class,'create_post'])->name("customers-create-post");
    Route::get('/delete/{customerNumber}',[CustomerController::class,'delete'])->name('customers-delete');



});