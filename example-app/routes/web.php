<?php

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

use App\Http\Controllers\Controller;
Route::get('/', [Controller::class, 'message']);
Route::get('/exercisePage1', [Controller::class, 'nextPage']);
Route::get('/exercisePage2', [Controller::class, 'nextPageNext']);


// Route::get('/', function () {
    
//     return view('welcome');
// });



