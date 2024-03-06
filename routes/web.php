<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::resource('data', PageController::class);

