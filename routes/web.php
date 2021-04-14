<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\StatusController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function () {
    return redirect()->route('tasks.index');
})->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::put('tasks/sync', [TaskController::class,'sync'])->name('tasks.sync');
    Route::resource('tasks','\App\Http\Controllers\TaskController');

    Route::post('statuses', [StatusController::class,'store'])->name('statuses.store');
    Route::put('statuses', [StatusController::class,'update'])->name('statuses.update');
});
