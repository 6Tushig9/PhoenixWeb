<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Logonuud extends Model
{
    use HasFactory;
    protected $table = 'logonuud';
    protected $fillable=['name','image'];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}