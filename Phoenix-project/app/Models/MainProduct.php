<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MainProduct extends Model
{
    use HasFactory;
    protected $table='main_products';
    protected $fillable = ['product_name','ontslog_shinj','image','price','brief_information','quantity'];

    public function category(): HasMany
    {
        return $this->HasMany(SubProduct::class);
    }

    public function images()
    {
        return $this->hasMany(MainProductImage::class, 'main_product_id');
    }

}
