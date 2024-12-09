<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;
    protected $table='statistics';
    protected $fillable=['year','household_sum','saved_bill','carbon_reduced'];
}
