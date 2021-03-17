<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;


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
/*****************
 * @author:Varsha S
 * @Date:17/03/2021
 * ***************/
//index page
Route::get('/', function () {
    return view('index');
});
//inserting details
Route::get("insert",[CrudController::class,'register']);
//view page
Route::get("view",[CrudController::class,'view']);
//deletion
Route::get('delete/{id}',[CrudController::class,'delete']);
//updation page
Route::get('updateview/{id}',[CrudController::class,'updateview']);
//updating action
Route::post('/update',[CrudController::class,'update']);