<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TypeCategory extends Model
{
    use HasFactory;
    protected $table='type_categories';
    protected $fillable=['model','image','feature','price','number'];

    public function product(): BelongsTo
    {
        return $this->BelongsTo(Product::class);
    }
}