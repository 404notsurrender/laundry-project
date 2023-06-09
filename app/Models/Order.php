<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'driver_id',
        'type',
        'distance',
        'amount',
        'shipping_cost',
        'price_total',
        'payment',
        'status',
        'status_tracking'
    ];
}
