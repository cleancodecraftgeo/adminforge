<?php

use App\Http\Controllers\api\ProductController;
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::apiResource('/products',ProductController::class);
