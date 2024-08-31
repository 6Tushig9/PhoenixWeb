<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCategory extends Model
{
    use HasFactory;
    protected $table='type_categories';
    protected $fillable=['name','feature','content','image','price','number'];
}
