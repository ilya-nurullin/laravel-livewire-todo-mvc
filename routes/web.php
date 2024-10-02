<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/todo', 'todo')
    ->middleware('auth')
    ->name('todo');

Route::get('/login', function () {
    $users = User::all();

    return view('user-list', compact('users'));
})->name('login');

Route::get('/a/{userId}', function ($userId) {
    Auth::loginUsingId($userId);

    return redirect()->to('todo');
})->name('auth');
