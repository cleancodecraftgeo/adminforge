<?php

namespace App\Services;

use App\Contracts\InventoryServiceInterface;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\DB;

class ProductService
{
    //    public function create(array $data): Product
    // {
    //     return DB::transaction(function () use ($data) {

    //         $product = Product::create($data);

    //         throw new \Exception('Test Transaction');

    //         ProductVariant::create([
    //             'product_id' => $product->id,
    //             'sku' => $product->sku,
    //             'price' => $product->price,
    //             'stock' => 0,
    //             'is_active' => true,
    //             'is_default' => true,
    //         ]);

    //         return $product;
    //     });
    // }

    public function __construct(private InventoryServiceInterface  $inventoryService)
    {


        logger('🛒 ProductService yaradıldı');
    }


    public function create(array $data): Product
    {
        return DB::transaction(function () use ($data) {

            $product = $this->createProduct($data);

            $this->createDefaultVariant($product);

            return $product;
        });
    }



    private function createProduct(array $data): Product
    {
        return Product::create($data);
    }

    private function createDefaultVariant(Product $product): void
    {


        ProductVariant::create([
            'product_id' => $product->id,
            'sku' => $product->sku,
            'price' => $product->price,
            'stock' => 0,
            'is_active' => true,
            'is_featured' => true,
        ]);
    }
}
