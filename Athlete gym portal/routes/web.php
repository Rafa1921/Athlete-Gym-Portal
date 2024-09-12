<?php

use App\Models\User;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageController;

// Guest Routes
Route::get('/home', [GuestController::class, 'home'])->name('guest.home');
Route::get('/about', [GuestController::class, 'about'])->name('guest.about');
Route::get('/services', [GuestController::class, 'services'])->name('guest.services');
Route::get('/contact', [GuestController::class, 'contacts'])->name('guest.contacts');
Route::get('/join', [GuestController::class, 'join'])->name('guest.join');

Route::get('/student-manage', [ManageController::class, 'index'])->name('student-manage');



Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/user/rafa/rafa/rafa/rafa' , function (){
    return dd('user') ;
})->name('user');

Route::get('/user/{name}', function ($name) {
    return view('hello ' .$name);
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $users = User::all();
        return view('dashboard', compact('users'));
    })->name('dashboard');

    Route::get('admin/profile',function(){
        return dd('admoin profile page');
    });

    
    Route::get('add-student',function(){
        return view('add-student');
    })->name('add-student');

    Route::get('LoginLogs',function(){
        return view('LoginLogs');
    })->name('LoginLogs');    

    Route::get('ActivitiesofStudents',function(){
        return view('ActivitiesofStudents');
    })->name('ActivitiesofStudents');
});
