<?php

use App\Models\User;
use App\Services\Awards;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'users' => User::all()
    ]);
});

Route::get('/{user}', function(User $user) {
    return view('show', compact('user'));
});
