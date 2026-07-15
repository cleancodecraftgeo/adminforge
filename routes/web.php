<?php

use App\Services\ProductService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testd', function () {
    app(ProductService::class)->create([
        'name'        => 'Test Məhsul',
        'slug'        => 'test-mehsul',
        'description' => 'Test description',
        'price'       => 99.99,
        'sku'         => 'PRD-TEST01',
        'is_active'   => true,
        'category_id' => 1,
    ]);
});

Route::get('/di-test',function(ProductService $productService){
    dd($productService);
});
