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
}
