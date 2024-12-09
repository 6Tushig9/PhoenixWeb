<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubProductImage extends Model
{
    use HasFactory;

    protected $table = 'sub_product_images';

    protected $fillable = ['sub_product_id', 'picture_1','picture_2','picture_3','picture_4','picture_5'];

    // Renamed the method for clarity
    public function subProduct(): BelongsTo
    {
        return $this->belongsTo(SubProduct::class, 'sub_product_id');
    }
}
