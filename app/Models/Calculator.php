<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculator extends Model
{
    use HasFactory;
    protected $table = "Calculators";
    protected $fillable = [
        "kg",
        "km",
        "air_freight",
        "ocean_freight",
        "road_freight"
    ];
}
