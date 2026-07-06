<?php

namespace App\Models;

use App\Models\AttributeValue;
use App\Models\Product;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attribute extends Model
{
    use HasUlids;
    //

    protected $fillable =
    [
        'name',
        'slug',
        'is_active',
        'sort_order'

    ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }


    public function values(): HasMany
    {
        return $this->hasMany(AttributeValue::class);
    }
}
