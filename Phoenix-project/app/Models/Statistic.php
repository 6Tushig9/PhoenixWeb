<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Statistic extends Model
{
    use HasFactory;
    protected $table='statistics';
    protected $fillable=['year','hometown','electric','carbon'];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}