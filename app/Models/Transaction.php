<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'flight_id',
        'flight_class_id',
        'name',
        'email',
        'phone',
        'number_of_passengers',
        'promo_code_id',
        'payment_status',
        'subtotal',
        'grandtotal'
    ];
}
