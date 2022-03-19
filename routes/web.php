<?php

use App\Http\Controllers\StudentsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentsController::class, 'students']);
Route::get('/student/create', [StudentsController::class, 'createStudent'])->name('student.create');
Route::post('/student/store', [StudentsController::class, 'storeStudent'])->name('student.store');
Route::post('/student/delete', [StudentsController::class, 'deleteStudent'])->name('student.delete');
