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

//    $title = '';
//
//    if ($user->award) {
//        $title = 'Award Winner';
//    }

    $title = when($user->award, 'Award Winner');


    return view('show', compact('user', 'title'));
});
