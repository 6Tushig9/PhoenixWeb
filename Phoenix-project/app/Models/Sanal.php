<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanal extends Model
{
    use HasFactory;
    protected $table='sanals';
    protected $fillable=['name','phone_number','sanal_huselt'];
}