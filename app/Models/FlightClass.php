<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlightClass extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'flight_id',
        'class_type',
        'price',
        'total_seats'
    ];
}
