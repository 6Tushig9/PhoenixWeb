<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MainProductImage extends Model
{
    use HasFactory;
    protected $table='main_product_images';
    protected $fillable=['main_product_id','picture_1','picture_2','picture_3','picture_4','picture_5','picture_6','picture_7','picture_8'];

    public function image(): BelongsTo
    {
        return $this->BelongsTo(MainProduct::class);
    }
}
