<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\studentController;
use App\Http\Controllers\coachController;
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
Route::get('/addLearnerPage', [studentController::class, 'addLearnerPage']);
Route::get('/learnersOverview', [studentController::class, 'learnersOverview']);
Route::post('/addStudent',[studentController::class,'create']);
Route::get('/addCoachPage', [coachController::class, 'addCoachPage']);
Route::post('/addCoach',[coachController::class,'create']);
Route::get('/coachesOverview', [coachController::class, 'coachesOverview']);
