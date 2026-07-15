<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Str;

class ProductObserver
{
    /**
     * Handle the Product "creating" event.
     */
    public function creating(Product $product): void
    {
        logger('creating');

        if (blank($product->sku)) {


            do {
                $sku = 'PRD-' . strtoupper(Str::random(6));
            } while (Product::where('sku', $sku)->exists());

            $product->sku = $sku;
        }




    }

    /**
     * Handle the Product "created" event.
     */


    public function created(Product $product): void
    {
        logger('created');
    }

    public function updating(Product $product): void
{
    logger('updating');

    if ($product->isDirty('name')) {
    $product->slug = Str::slug($product->name);
}
}

    /**
     * Handle the Product "updated" event.
     */
    public function updated(Product $product): void
    {
        if($product->wasChanged('name')){
            logger([
            'old_price' => $product->getOriginal('price'),
            'new_price' => $product->price,
        ]);
        }
    }

    /**
     * Handle the Product "deleted" event.
     */
    public function deleted(Product $product): void
    {
        //
    }

    /**
     * Handle the Product "restored" event.
     */
    public function restored(Product $product): void
    {
        //
    }

    /**
     * Handle the Product "force deleted" event.
     */
    public function forceDeleted(Product $product): void
    {
        //
    }

    public function saving (Product $product):void
    {
        logger('saving');
    }

    public function saved(Product $product):void
    {
        logger('saved');
    }
}
