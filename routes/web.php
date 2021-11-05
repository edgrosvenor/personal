<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| One Lonely Route
|--------------------------------------------------------------------------
|
| I will eventually build some features here that require more traditional
| routing, but at the moment this entire website relies on a single
| fallback route.
*/

Route::fallback(PageController::class);
