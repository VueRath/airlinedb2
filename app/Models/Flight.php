<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;


    protected $fillable = [
        'flight_name',
        'departure_date',
        'payment_status',
        'passenger_name',
        'age',
        'email',
        'contact',
    ];
}
