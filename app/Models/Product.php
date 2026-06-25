<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    //
    use HasUlids;

    protected $fillable = [
        'name',
        'brand_id',
        'category_id',
        'name',
        'slug',
        'description',
        'price',
        'sku',
        'stock',
        'is_active',
        'is_featured'
    ];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function brand():BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
