<?php

namespace App\Models;

use App\Models\AttributeValue;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProductVariant extends Model
{
    use HasUlids;

    protected $fillable = [
    'product_id',
    'sku',
    'stock',
    'price',
    'is_active',
    'is_default'

    ];

    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function attributeValues():BelongsToMany
    {
        return $this->belongsToMany(AttributeValue::class,'product_variant_values');
    }
}
