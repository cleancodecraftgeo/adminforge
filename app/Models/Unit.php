<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unit extends Model
{
    use HasUlids;
    protected $fillable =
    [
        'name',
        'symbol',
        'is_active'
    ];

    public function products():HasMany
    {
        return $this->hasMany(Product::class);
    }
}
