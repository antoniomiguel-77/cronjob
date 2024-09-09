<?php

use App\Mail\NotifyMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/send', function () {
    Mail::to('info@xzero.ao')->send(new NotifyMail("Hello CronJob"));
});
