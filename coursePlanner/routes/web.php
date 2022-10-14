<?php

use App\Http\Controllers\uploadCourse;
use App\Models\students;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

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
    return view('upload_course',[
        'students' => students::all()
    ]);
});

Route::post('/uploadPdf',
[uploadCourse::class, 'store']

);

Route::get('/downloadPdf',
[uploadCourse::class, 'download']
);

Route::get('/login',[Auth::class,'login']);
Route::get('/registration',[Auth::class,'registration']);
Route::post('/registered-user',[Auth::class,'registerUser'])->name
('registered-user');
Route::post('/login-user',[Auth::class,'loginUser'])->name
('login-user');
Route::get('/dashboard',[Auth::class,'dashboard']);