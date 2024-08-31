<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subCateogory extends Model
{
    use HasFactory;
    protected $table='sub_cateogories';
    protected $fillable=['name','feature','content','image','price','number'];
}
