<?php

use App\Http\Controllers\CompletionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::loginUsingId(1);

Route::get('/', function () {
    return view('welcome');
});

Route::post('completions', [CompletionController::class, 'store']);
