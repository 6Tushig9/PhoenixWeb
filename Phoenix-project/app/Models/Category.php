<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable=['main_product_id','sub_product_id'];

    public function mainProduct(): BelongsTo
    {
        return $this->belongsTo(MainProduct::class);
    }

    public function subProduct(): BelongsTo
    {
        return $this->belongsTo(SubProduct::class);
    }
}
