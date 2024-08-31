<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mainCategory extends Model
{
    use HasFactory;
    protected $table='main_categories';
    protected $fillable=['name','feature','content','image','price','number'];
}
