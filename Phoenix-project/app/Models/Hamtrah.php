<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hamtrah extends Model
{
    use HasFactory;
    protected $table='hamtrahs';
    protected $fillable=['name','phone_number','sanal_huselt'];
}