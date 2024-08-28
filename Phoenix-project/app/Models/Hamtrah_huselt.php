<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hamtrah_huselt extends Model
{
    use HasFactory;
    protected $table='hamtrah_huselts';
    protected $fillable=['name','phone','comment'];
}
