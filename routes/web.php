<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\ApplicationController;
use App\Models\Application;

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

Route::get('/', [TourController::class,'index']);

Route::get("/tours/{id}", [TourController::class, "inftour"]);

Route::post("/enroll",[SubscriptionController::class,"new_subscription"]);

// Route::get('/tour/tour', function() {
//     return view('tour');
// });



Route::post("/ApplicationController/new_applications",[ApplicationController::class,"new_applications"]);

