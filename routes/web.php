<?php

use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-email', function () {
    $details = [
        'email' => 'ejemplo@test.com',
        'title' => 'Esto es una prueba',
        'body' => 'This is a test email sent using Laravel queues.'
    ];

    SendEmailJob::dispatch($details);

    return 'Email sent successfully!';
});
