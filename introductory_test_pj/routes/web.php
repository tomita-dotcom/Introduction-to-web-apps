<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


Route::get('/', [TestControllerer::class, 'index']);
Route::post('/todos/create', [TestControllerer::class, 'store']);
Route::post('/todos/update', [TestControllerer::class, 'update']);
Route::post('/todos/delete', [TestControllerer::class, 'delete']);

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

