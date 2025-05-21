<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facilty extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'image',
        'name',
        'description'
    ];

    public function classes()
    {
        return $this->belongsToMany(FlightClass::class, 'flight_class_facility', 'facility_id', 'flight_class_id');
    }
}
