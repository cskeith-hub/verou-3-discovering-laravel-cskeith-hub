<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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


Route::get('/', [Controller::class, 'home']);
Route::get('/addLearnerPage', [Controller::class, 'addLearnerPage']);
Route::get('/coachesOverview', [Controller::class, 'coachesOverview']);
Route::get('/learnersOverview', [Controller::class, 'learnersOverview']);
Route::post('/addStudent',[CrudController::class,'create']);






// Route::get('/', function () {
    
//     return view('welcome');



