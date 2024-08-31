<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductFeature extends Model
{
    use HasFactory;
    protected $table='product_features';
    protected $fillable=['features'];

    public function products(): BelongsTo {
        return $this->BelongsTo(Product::class);
    }
}
