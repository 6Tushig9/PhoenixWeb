<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostOruulah extends Model
{
    use HasFactory;

    protected $table='post_oruulah';
    protected $fillable=['title','image','post'];

}