<?php

use App\Http\Controllers\Charging;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use NunoMaduro\Collision\Contracts\Provider;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\UserController;

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


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard', [Dashboard::class,'index'])->name('dashboard');
    Route::get('/dashboard/startcharging', [Dashboard::class, 'startcharging']); 
    Route::get('/dashboard/stopcharging', [Dashboard::class, 'stopcharging']); 
    Route::post('/dashboard/changekw', [Dashboard::class, 'changekw']); 
    Route::post('/sendemail/send', 'App\Http\Controllers\EmailController@send');
    Route::post('/sendemailreport/send', 'App\Http\Controllers\EmailControllerDatasheet@send');
    Route::post('/contactemail/send', 'App\Http\Controllers\EmailControllerContact@send');
    Route::resource('/admin/users', UserController::class)->name('index', 'users');
});
    
