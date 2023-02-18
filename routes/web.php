<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RequestSampleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HiLowController;
use App\Http\Controllers\PhotoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello_world', fn () => view('hello_world', [
    'name' => 'Mantare Otto',
    'age' => 78,
]));

Route::get('/', fn () => view('index'));
Route::get('/curriculum', fn () => view('curriculum'));

Route::get('/world-time', [UtilityController::class, 'worldTime']);

Route::get('/omikuji', [GameController::class, 'omikuji']);

Route::get('/monty-hall', [GameController::class, 'montyHall']);

Route::get('/form', [RequestSampleController::class, 'form']);
Route::get('/query-strings', [RequestSampleController::class, 'queryStrings']);
// Route::get('/users/{id}', [RequestSampleController::class, 'profile']);
Route::get('/users/{id}', [RequestSampleController::class, 'profile'])->name('profile');
Route::get('/products/{category}/{year}', [RequestSampleController::class, 'productsArchive']);

Route::get('/route-link', [RequestSampleController::class, 'routeLink']);

//login
Route::get('login', [RequestSampleController::class, 'loginForm']);
Route::post('/login', [RequestSampleController::class, 'login'])->name('login');

//event
Route::resource('/events', EventController::class)->only(['create', 'store']);

//hi-low
Route::get('/hi-low', [HiLowController::class, 'index'])->name('hi-low');
Route::post('/hi-low', [HiLowController::class, 'result']);

//files
Route::resource('/photos', PhotoController::class)->only(['create', 'store', 'show', 'destroy']);
Route::get('/photos/{photo}/download', [PhotoController::class, 'download'])->name('photos.download');
