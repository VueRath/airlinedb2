<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;


    protected $fillable = [
        'accomodation',
        'origin',
        'destination',
        'departure_date',
        'payment_status',
        'passenger_name',
        'age',
        'email',
        'contact',
    ];

    protected static function boot()
{
    parent::boot();

    static::creating(function ($flight) {
        if (is_null($flight->amount)) {
            $flight->amount = rand(100, 1000);
        }
    });
}

}
