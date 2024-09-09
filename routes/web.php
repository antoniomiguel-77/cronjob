<?php

use App\Mail\NotifyMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/send', function () {
    Mail::to('albino77miguel@gmail.com')->send(new NotifyMail("Hello CronJob"));
});
