<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Hello! My name is Ed. I'm glad you've come to visit.
|--------------------------------------------------------------------------
|
| I am a web developer with > 20 years of experience, mostly in Perl & PHP.
| I now spend most of my time in the TALL Stack, taking full advantage of
| all the amazing stuff the Laravel ecosystem offers us.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
