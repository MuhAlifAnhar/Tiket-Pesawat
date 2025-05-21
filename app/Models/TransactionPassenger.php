<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionPassenger extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'transaction_id',
        'flight_seat_id',
        'name',
        'date_of_birth',
        'nationality'
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
