<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logonuud extends Model
{
    use HasFactory;
    protected $table = 'logonuud';
    protected $fillable=['Name','Image'];
}