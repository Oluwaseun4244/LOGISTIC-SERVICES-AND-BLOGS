<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    protected $table = "Quotes";
    protected $fillable = [
    "name",
    "freight",
    "email",
    "phone",
    "pickup",
    "dropoff",
    "weight",
    "distance",
    "trackingID",
    "total",
    "orderStatus",
     ];
}
