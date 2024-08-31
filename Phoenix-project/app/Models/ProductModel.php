<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductModel extends Model
{
    use HasFactory;
    protected $table='product_models';
    protected $fillable=['model','price'];

    public function products(): BelongsTo {
        return $this->BelongsTo(Product::class);
    }
}
