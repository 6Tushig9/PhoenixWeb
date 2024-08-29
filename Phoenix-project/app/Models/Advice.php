<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advice extends Model
{
    use HasFactory;
    protected $table='advice';
    protected $fillable=['title','content'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}