<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
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

/* Debut Back-office */
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('Back.html.main');
    })->name('dashboard');
});
/* Fin Back-office */

 /* DEBUTDeconnexion */
Route::group(['middleware'=>['auth']], function (){
Route::get('/logout',[LogoutController::class, 'perform'])
->name('logout.perform');
});
/* FINDeconnexion */

Route::resource('/backoffice/user', UserController::class)->middleware('auth');

