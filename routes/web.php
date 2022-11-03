<?php

use App\Http\Controllers\TeacherController;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/teacher/add', [TeacherController::class, 'add']);
Route::post('/teacher/store', [TeacherController::class, 'store']);
Route::get('/teacher/delete/{id}', [TeacherController::class, 'delete']);
Route::get('/teacher/edit/{id}', [TeacherController::class, 'edit']);
Route::post('/teacher/update', [TeacherController::class, 'update']);
