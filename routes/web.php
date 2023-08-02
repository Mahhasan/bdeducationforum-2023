<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantsController;
use App\Http\Controllers\FrontendController;

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

Route::get('/create-participants', [App\Http\Controllers\ParticipantsController::class, 'create_participants']);
Route::post('/create-participants', [App\Http\Controllers\ParticipantsController::class, 'store_participants'])->name('store.participants');
Route::post('/create-participants-byadmin', [App\Http\Controllers\ParticipantsController::class, 'store_participants_byadmin'])->name('store.participants.byadmin');


Route::get('/speaker', [App\Http\Controllers\FrontendController::class, 'view_speaker']);
Route::get('/snapshoot', [App\Http\Controllers\FrontendController::class, 'view_snapshoot']);
Route::get('/about-event', [App\Http\Controllers\FrontendController::class, 'view_about_event']);
Route::get('/about-organizer', [App\Http\Controllers\FrontendController::class, 'view_about_organizer']);
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'view_contact']);
Route::get('/schedule', [App\Http\Controllers\FrontendController::class, 'view_schedule']);
