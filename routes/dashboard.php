<?php

use App\Http\Controllers\SubscriberController;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('subscribers',[SubscriberController::class, 'all'])
    ->name('subscribers.all');
