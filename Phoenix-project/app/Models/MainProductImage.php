<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MainProductImage extends Model
{
    use HasFactory;
    protected $table='main_product_images';
    protected $fillable=['main_product_id','Зураг_1','Зураг_2','Зураг_3','Зураг_4','Зураг_5','Зураг_6','Зураг_7','Зураг_8'];

    public function image(): BelongsTo
    {
        return $this->BelongsTo(MainProduct::class);
    }
}
