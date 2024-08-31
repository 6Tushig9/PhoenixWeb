<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadProduct extends Model
{
    use HasFactory;
    protected $table='upload_product';
    protected $fillable=['product-name','product-feature','product-info'];
}
