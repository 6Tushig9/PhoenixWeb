<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=['title','content'];

    public function features(): HasMany {
        return $this->HasMany(ProductFeature::class);
    }

    public function models(): HasMany {
        return $this->HasMany(ProductModel::class);
    }
}
