<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SubProduct extends Model
{
    use HasFactory;
    protected $table='sub_products';
    protected $fillable=['Загвар','Онцлог_шинж','Зураг','Үнэ','Товч_мэдээлэл','Тоон_хэмжээ'];

    public function category(): BelongsToMany
    {
        return $this->BelongsToMany(MainProduct::class,'categories');
    }
}

