<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','user-role:user'])->group(function(){
    Route::get("/home",[HomeController::class,'userHome'])->name("home");
});

Route::middleware(['auth','user-role:editor'])->group(function(){
    Route::get("/editor/home",[HomeController::class,'editorHome'])->name("editor.home");
});

Route::middleware(['auth','user-role:admin'])->group(function(){
    Route::get("/admin/home",[HomeController::class,'adminHome'])->name("admin.home");
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
