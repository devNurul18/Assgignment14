<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;



Route::get('/my-profile/{id}' , [profileController::class , 'index']);
