<?php

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
Route::get('/student', function () {
    return view('student');
});
Route::get('/teacher', function () {
    return view('teacher');
});
Route::get('/signIn', function () {
    return view('signIn');
});
Route::get('/signUp', function () {
    return view('SignUp');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/course', function () {
    return view('course');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
