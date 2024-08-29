<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Advice extends Model
{
    use HasFactory;
    protected $table='advice';
    protected $fillable=['title','content'];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
}