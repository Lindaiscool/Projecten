<?php

use App\Http\Controllers\TicketsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\OrderController;
use App\Http\Livewire\Admin\AgendaComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ColofonController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UploadController;



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
    return view('home');
});
Route::post('/', function () {
    return view('home');
});

Route::get('/colofon', [ColofonController::class, 'GetColofonPage']);

Route::get('/route', [RouteController::class, 'GetRoutePage']);

Route::get('/test', [TestController::class, 'getTest']); /* word alleen gebruikt voor testen etc. */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); 

Route::get('/token', function (Request $request) {
    $token = csrf_token();
});

Route::get('/agenda', [AgendaComponent::class, 'render'])->name('agenda');

Route::post('/store-form', [AgendaComponent::class, 'store'])->name('store.form');

//tickets
Route::get('/tickets', [TicketsController::class, 'index']);{
}
Route::post('/tickets', [TicketsController::class, 'store']);

Route::get('/tickets', 'App\Http\Controllers\TicketsController@index');

Route::post('add',[TicketsController::class, 'add']);

//orderpage
Route::get('/orderpage', [OrderController::class, 'select']);

Route::get('/orderpage', [OrderController::class, 'index']);
Route::get('/orderpage', 'App\Http\Controllers\OrderController@select');
Route::post('save',[OrderController::class, 'save']);

Route::post('upload', [UploadController::class, 'store']);

Route::get('upload', 'UploadController@uploadVideo')->name('videos.uploadedVideo');
Route::get('uploadVideo', 'VideoController@uploadVideo')->name('videos.uploadedVideo');

// echo