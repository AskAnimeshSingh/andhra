<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointsRedeem extends Model
{
    use HasFactory;
    protected $table = 'point_transactions'; 

    protected $fillable = [
        'user_id',
        'order_id',
        'points',
        'points_status',
    ];
}
