<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryCharges extends Model
{
    use HasFactory;
    protected $table = 'delivery_charges';
    protected $fillable = [
        'charges',
        'status',
    ];
}
