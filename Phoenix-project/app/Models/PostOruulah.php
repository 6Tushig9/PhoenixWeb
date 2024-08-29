<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostOruulah extends Model
{
    use HasFactory;

    protected $table='post_oruulah';
    protected $fillable=['title','image','post'];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}