<?php

use App\Http\Controllers\commonController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('admin');
});

Route::get("/admin", [commonController::class, ('admin')])->name("admin");

Route::get("/add-student-view", [commonController::class, ('viewStudentAdd')])->name("add-studentView");
Route::post("/add-student", [commonController::class, ('addStudent')])->name("add-student");
Route::get("/Student-List", [commonController::class, ('studentList')])->name("student-list");
