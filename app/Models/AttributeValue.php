<?php

namespace App\Models;

use App\Models\Attribute;
use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AttributeValue extends Model
{
    //
       use HasUlids;

    protected $fillable = [
        'attribute_id',
        'value',
        'is_active',
        'sort_order'
    ];
    public function attribute():BelongsTo
    {
        return $this->belongsTo(Attribute::class);
    }

     public function productVariants():BelongsToMany
    {
        return $this->belongsToMany(ProductVariant::class,'product_variant_values');
    }
}
