<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('email-test', function () {

    $details['email'] = 'your_email@gmail.com';

    dispatch(new App\Jobs\SendEmailJob($details));

    dd('done');
});